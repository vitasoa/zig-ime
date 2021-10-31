<?php
/**
* The template for displaying search results pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

<header class="page-header">
<h1 class="page-title"><?php /* translators: %s: search query. */ printf( esc_html__( 'Search Results for: %s', 'freshwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</header>

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