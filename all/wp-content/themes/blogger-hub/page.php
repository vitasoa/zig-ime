<?php
/**
 * The template for displaying all pages.
 * @package Blogger Hub
 */

get_header(); ?>

<?php do_action('blogger_hub_page_header'); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div id="wrapper" class="container">
        <div class="main-wrap-box"> 
            <div class="feature-box">
                <div class="bradcrumbs">
                    <?php blogger_hub_the_breadcrumb(); ?>
                </div>
            </div>
            <div class="feature-box">
                <h1><?php the_title();?></h1>
                <img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
                <?php the_content(); ?>                
            </div>
            <?php wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'blogger-hub' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
            ) ); ?>       
            <div class="clear"></div>    
        </div>
        <div class="feature-box">
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            ?>
        </div>
    </div>
<?php endwhile; // end of the loop. 
wp_reset_postdata();?>

<?php do_action('blogger_hub_page_left_footer'); ?>

<?php get_footer(); ?>