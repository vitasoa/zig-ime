<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

<?php if(is_home() && !is_paged()) { ?>
<div class="freshwp-featured-posts-area clearfix">
<?php dynamic_sidebar( 'freshwp-home-top-widgets' ); ?>
</div>
<?php } ?>

<div class="freshwp-featured-posts-area clearfix">
<?php dynamic_sidebar( 'freshwp-top-widgets' ); ?>
</div>

<div class="freshwp-posts-wrapper" id="freshwp-posts-wrapper">
<div class="freshwp-posts freshwp-box">

<?php if(is_home() && !is_paged()) { ?>
<?php if ( freshwp_get_option('posts_heading') ) : ?>
<h1 class="freshwp-posts-heading"><span><?php echo esc_html( freshwp_get_option('posts_heading') ); ?></span></h1>
<?php else : ?>
<h1 class="freshwp-posts-heading"><span><?php esc_html_e( 'Recent Posts', 'freshwp' ); ?></span></h1>
<?php endif; ?>
<?php } ?>

<div class="freshwp-posts-content">

<?php if (have_posts()) : ?>

    <div class="freshwp-posts-container">
    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', freshwp_post_style() ); ?>

    <?php endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php freshwp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>

</div>
</div><!--/#freshwp-posts-wrapper -->

<?php if(is_home() && !is_paged()) { ?>
<div class='freshwp-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'freshwp-home-bottom-widgets' ); ?>
</div>
<?php } ?>

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