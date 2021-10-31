<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='freshwp-content-outer-container'>
<div class='freshwp-container'>
<div id='freshwp-content-wrapper'>

<div id='freshwp-content-inner-wrapper'>

<div class='freshwp-main-wrapper' id='freshwp-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class='freshwp-main-wrapper-inside clearfix'>

<div class="freshwp-featured-posts-area clearfix">
<?php dynamic_sidebar( 'freshwp-top-widgets' ); ?>
</div>

<div class="freshwp-posts-wrapper" id="freshwp-posts-wrapper">

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'single' ); ?>

    <?php the_post_navigation(array('prev_text' => __( '&larr; %title', 'freshwp' ), 'next_text' => __( '%title &rarr;', 'freshwp' ))); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div><!--/#freshwp-posts-wrapper -->

<div class='freshwp-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'freshwp-bottom-widgets' ); ?>
</div>

</div>
</div>
</div>

<?php get_sidebar(); ?>

</div>

</div>
</div>
</div>

<?php get_footer(); ?>