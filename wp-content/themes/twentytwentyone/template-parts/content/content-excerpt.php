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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row top_news_block_desc">
    <?php
	
    if (!is_home()) {
        $post = get_post();
        $date = $post->post_date;
        $day = date("j", strtotime($date));
        $month = date("F", strtotime($date));
    
        $post_date = get_the_date('d', $post->ID);
        $post_month = get_the_date('m', $post->ID);
        $post_date = get_the_date('d', $post->ID);
        $post_month = get_the_date('m', $post->ID);
    ?>
    <div class="col-md-3 image-post">
        <?php the_post_thumbnail('thumbnail', array('class' => 'post-thumbnail')); ?>
    </div>
    <div class="col-md-3 topnewstime">
        <span class="topnewsdate"><?php echo $day; ?></span><br>
        <span class="topnewsmonth"><?php echo "Tháng " . $post_month; ?></span>
    </div>
    <div class="col-md-6 shortdesc">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-content">
            <?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
        </div><!-- .entry-content -->
    </div>
    <?php
    } else {
        $post = get_post();
        $date = $post->post_date;
        $day = date("j", strtotime($date));
        $month = date("F", strtotime($date));
    
        $post_date = get_the_date('d', $post->ID);
        $post_month = get_the_date('m', $post->ID);
        $post_date = get_the_date('d', $post->ID);
        $post_month = get_the_date('m', $post->ID);
    ?>
    <div class="col-md-3 topnewstime">
        <span class="topnewsdate"><?php echo $day; ?></span><br>
        <span class="topnewsmonth"><?php echo "Tháng " . $post_month; ?></span>
    </div>
    <div class="col-md-9 shortdesc">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-content">
            <?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
        </div><!-- .entry-content -->
    </div>
    <?php
    }
    ?>
</div>
</article><!-- #post-${ID} -->


