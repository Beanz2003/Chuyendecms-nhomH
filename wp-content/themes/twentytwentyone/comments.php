<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php if ( '1' === $twenty_twenty_one_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'twentytwentyone' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone' ) ),
					esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2><!-- .comments-title -->
		<div class="container">
		<div class=" row">
			<?php
			$post_id = get_the_ID(); // ID của bài viết

// Lấy các comments mới nhất từ WP sử dụng WP API
$comments = get_comments(array(
    'status' => 'approve', // Chỉ lấy comments đã được phê duyệt
    'order' => 'DESC', // Sắp xếp theo thứ tự giảm dần (mới nhất lên đầu)
    'parent' => 0, // Chỉ lấy các comments cha (không lấy các comments con)
    'post_id' => $post_id // Lọc theo ID của bài viết
));

// Hiển thị các comments
foreach ($comments as $comment) {
    $comment_author = $comment->comment_author;
    $comment_content = $comment->comment_content;
    $comment_avatar = get_avatar_url($comment->comment_author_email, array('size' => 64)); // Lấy đường dẫn ảnh đại diện

    echo '<div class="media comment-box commentspost">';
    echo '<div class="media-left">';
    echo '<a href="#">';
    echo '<img class="img-responsive user-photo" src="' . $comment_avatar . '">';
    echo '</a>';
    echo '</div>';
    echo '<div class="media-body">';
    echo '<h4 class="media-heading">' . $comment_author . '</h4>';
    echo '<p>' . $comment_content . '</p>';

    // Lấy các comments con của comment cha hiện tại
    $child_comments = get_comments(array(
        'parent' => $comment->comment_ID // Lấy các comments con có parent là comment_ID của comment cha
    ));

    // Hiển thị các comments con
    foreach ($child_comments as $child_comment) {
        $child_comment_author = $child_comment->comment_author;
        $child_comment_content = $child_comment->comment_content;
        $child_comment_avatar = get_avatar_url($child_comment->comment_author_email, array('size' => 64)); // Lấy đường dẫn ảnh đại diện

        echo '<div class="media comment-box child-comment">';
        echo '<div class="media-left">';
        echo '<a href="#">';
        echo '<img class="img-responsive user-photo" src="' . $child_comment_avatar . '">';
        echo '</a>';
        echo '</div>';
        echo '<div class="media-body">';
        echo '<h4 class="media-heading">' . $child_comment_author . '</h4>';
        echo '<p>' . $child_comment_content . '</p>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
}
			?>
		</div>
	</div> 
		
		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
					esc_html__( 'Older comments', 'twentytwentyone' )
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__( 'Newer comments', 'twentytwentyone' ),
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
				),
			)
		);
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply'        => esc_html__( 'Leave a comment', 'twentytwentyone' ),
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);
	?>

</div><!-- #comments -->
