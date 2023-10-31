<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide custom-header">
		<div class="header-content">
			<?php the_title( '<h1 class="entry-title custom-title">', '</h1>' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
			<?php
			$post = get_post();
			$post_day = get_the_date('d',$post->ID);
			$post_month = get_the_date('m',$post->ID);
			$post_year = get_the_date('y',$post->ID);
			?>
			<div class="custom-post-date custom-circle">
				<div class="custom-date-month">
					<span class="date"><?php echo $post_day ?></span>
					<span class="month"><?php echo $post_month ?></span>
				</div>
				<div class="custom-year">
					<span class="year">'<?php echo $post_year ?></span>
				</div>
			</div>
		</div>
		<div class="overviewline"></div>
	</header><!-- .entry-header -->

	<div class="entry-content alignwide custom-content">
		<?php
			the_content();
			
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
					)
				);
		?>
	</div><!-- .entry-content -->


	
	<footer class="entry-footer default-max-width custom-footer alignwide">
		<p class="custom-author">(Theo <?php echo get_the_author() ?>)</p>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->