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

<?php if ( powerwp_get_option('posts_heading') ) : ?>
<h1 class="powerwp-posts-heading"><span><?php echo esc_html( powerwp_get_option('posts_heading') ); ?></span></h1>
<?php else : ?>
<h1 class="powerwp-posts-heading"><span><?php esc_html_e( 'Recent Posts', 'powerwp' ); ?></span></h1>
<?php endif; ?>

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