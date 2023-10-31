<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main --> 
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Recent Posts</h5>
				<ul class="list-unstyled quick-links">
					<?php
					$args = array(
						'posts_per_page' => 4, // Số bài viết bạn muốn hiển thị
						'post_status' => 'publish', // Chỉ lấy các bài viết đã được xuất bản
						'orderby' => 'date', // Sắp xếp theo ngày đăng
						'order' => 'DESC', // Sắp xếp giảm dần
					);

					$recent_posts = get_posts($args);

					foreach ($recent_posts as $post) {
						setup_postdata($post);
						$post_title = get_the_title();
						$post_link = get_permalink();
						?>
						<li><a href="<?php echo $post_link; ?>"><i class="fa fa-angle-double-right"></i><?php echo $post_title; ?></a></li>
						<?php
					}

					wp_reset_postdata();
					?>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Recent Comments</h5>
				<ul class="list-unstyled quick-links">
					<?php
					$args = array(
						'number' => 4, // Số bình luận bạn muốn hiển thị
						'status' => 'approve', // Chỉ lấy các bình luận đã được phê duyệt
						'orderby' => 'comment_date', // Sắp xếp theo ngày bình luận
						'order' => 'DESC', // Sắp xếp giảm dần
					);

					$recent_comments = get_comments($args);

					foreach ($recent_comments as $comment) {
						$comment_content = $comment->comment_content;
						$comment_author = $comment->comment_author;
						$comment_post = get_post($comment->comment_post_ID);
						$comment_post_title = $comment_post->post_title;
						$comment_post_link = get_permalink($comment->comment_post_ID);
						?>
						<li><a href="<?php echo $comment_post_link; ?>"><i class="fa fa-angle-double-right"></i><?php echo $comment_content; ?> - <?php echo $comment_author; ?> on "<?php echo $comment_post_title; ?>"</a></li>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
			
			</div>	
		</div>
	</section>
	<!-- ./Footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
