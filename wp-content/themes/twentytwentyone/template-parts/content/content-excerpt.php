<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<div class="list-new-view">
<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
<div class="row top_news_block_desc">

	<?php					
	$post = get_post();					
	$date = $post->post_date;					
	$day = date("j", strtotime($date));					
	$month = date("F", strtotime($date));					
	
	$post_date = get_the_date('d', $post->ID);					
	$post_month = get_the_date('m', $post->ID);		
	$post_date = get_the_date('d', $post->ID);					
	$post_month = get_the_date('m', $post->ID);			
	
	
	echo '<div class="col-md-3 topnewstime">';
	echo '<span class="topnewsdate">'. $day .'</span>';
	echo '<br>';
	echo '<span class="topnewsmonth">'. "Tháng ". $post_month .'</span>';
	echo '</div>';
	 ?>
	 <div class="col-md-9 shortdesc">
	<?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>

	<div class="entry-content">
		<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div><!-- .entry-content -->
	</div>
	<!--<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer> .entry-footer -->
	</div>
</article><!-- #post-${ID} -->

