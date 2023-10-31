<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
	?>
	<div class="row">
		<div class="col-md-3">
	

<div id="content"class="page">
  <h1 class="titlepage" >Trang mới nhất</h1>
  <hr class="gg">
  <ul class="page-list">
	  <?php
	  $args = array(
		  'post_type' => 'page', // Chỉ lấy các trang
		  'posts_per_page' => -1 // Lấy tất cả trang
	  );
	  $query = new WP_Query($args);

	  while ($query->have_posts()) : $query->the_post();
	  ?>
	  <li>
		  <h2 class="pages"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  <hr class="ww">	
		  <?php
		  if (has_post_thumbnail()) {
			  the_post_thumbnail();
		  }
		  ?>
		  <?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	  </li>
	  <?php endwhile;
	  wp_reset_postdata();
	  ?>
  </ul>

</div>
		</div>

		<div class="col-md-6">
	<?php		
if ( have_posts() ) {
	?>
		<header class="page-header alignwide">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->

	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.
	
	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
?>
		</div>
		<div class="col-md-3">

		</div>
	</div>
	