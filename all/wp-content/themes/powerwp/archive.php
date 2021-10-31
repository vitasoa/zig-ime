<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PowerWP
 */

get_header(); ?>

<div class='powerwp-container'>
<div id='powerwp-content-wrapper'>

<div id='powerwp-content-inner-wrapper'>

<div class='powerwp-main-wrapper' id='powerwp-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class='powerwp-main-wrapper-inside clearfix'>

<div class="powerwp-posts-wrapper" id="powerwp-posts-wrapper">

<div class="powerwp-posts">

<header class="page-header">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header>

<div class="powerwp-posts-content">

<?php if (have_posts()) : ?>

    <div class="powerwp-posts-container">
    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', powerwp_post_style() ); ?>

    <?php endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php powerwp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#powerwp-posts-wrapper -->

</div>
</div>
</div>

<?php get_sidebar(); ?>

</div>

</div>
</div>

<?php get_footer(); ?>