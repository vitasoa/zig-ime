<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

<div class='freshwp-posts-wrapper' id='freshwp-posts-wrapper'>

<div class='freshwp-posts freshwp-box'>

<header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'freshwp' ); ?></h1>
</header><!-- .page-header -->

<div class='freshwp-posts-content'>

    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'freshwp' ); ?></p>

    <?php get_search_form(); ?>

    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    
    <div>
        <h2><?php esc_html_e( 'Most Used Categories', 'freshwp' ); ?></h2>
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
        $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'freshwp' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
    ?>

    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

</div>

</div>

</div><!--/#freshwp-posts-wrapper -->

</div>
</div>
</div>

<?php get_sidebar(); ?>

</div>

</div>
</div>
</div>

<?php get_footer(); ?>