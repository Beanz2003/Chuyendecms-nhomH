<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$args = array(
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'orderby'        => 'date',
	'order'          => 'DESC',
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
);

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {
		echo '<ul class="custom-news-list alignwide">';
		while ( $query->have_posts() ) {
			$query->the_post();

			$post_day = get_the_date( 'd' );
			$post_month = get_the_date( 'm' );
			$post_year = get_the_date( 'y' );

			$post_title = get_the_title();
			$post_link = get_permalink();

			$news_item = '
				<li class="custom-news-item">
					<div class="custom-post-date custom-background-none">
						<div class="custom-date-month">
							<span class="date">' . $post_day . '</span>
							<span class="month">' . $post_month . '</span>
						</div>
						<div class="custom-year">
							<span class="year">' . $post_year . '</span>
						</div>
					</div>
					<a href="' . $post_link . '" class="custom-post-link">' . $post_title . '</a>
				</li>
			';

			echo $news_item;
		}
		echo '</ul>';

		// Restore the global post data
		wp_reset_postdata();
	}
endwhile; // End of the loop.

get_footer();
