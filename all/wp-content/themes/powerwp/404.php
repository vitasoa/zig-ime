<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

<div class='powerwp-posts-wrapper' id='powerwp-posts-wrapper'>

<div class='powerwp-posts'>

<header class="page-header">
    <h1 class="page-title"><?php echo esc_html__( 'Oops! That page can not be found.', 'powerwp' ); ?></h1>
</header><!-- .page-header -->

<div class='powerwp-posts-content'>

    <p><?php echo esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'powerwp' ); ?></p>

    <?php get_search_form(); ?>

    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    
    <div>
        <h2><?php echo esc_html__( 'Most Used Categories', 'powerwp' ); ?></h2>
        <ul>
        <?php
                wp_list_categories( array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                ) );
        ?>
        </ul>
    </div>

    <?php
        /* translators: %1$s: smiley */
        $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'powerwp' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
    ?>

    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

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