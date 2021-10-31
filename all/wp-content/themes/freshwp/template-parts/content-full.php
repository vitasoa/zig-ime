<?php
/**
* A template part for displaying full style posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="freshwp-full-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(freshwp_get_option('hide_thumbnail')) ) { ?>
    <div class="freshwp-full-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( esc_html__( 'Permanent Link to %s', 'freshwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('freshwp-featured-image', array('class' => 'freshwp-full-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(freshwp_get_option('hide_thumbnail'))) { ?><div class="freshwp-full-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (freshwp_get_option('hide_thumbnail'))) { ?><div class="freshwp-full-post-details-full"><?php } ?>

    <?php if ( !(freshwp_get_option('hide_post_categories')) ) { ?><?php freshwp_full_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="freshwp-full-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php freshwp_full_postmeta(); ?>

    <div class="freshwp-full-post-snippet clearfix">
    <?php
    the_content( sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'freshwp' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ) );

    wp_link_pages( array(
     'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'freshwp' ) . '</span>',
     'after'       => '</div>',
     'link_before' => '<span>',
     'link_after'  => '</span>',
     'separator'   => '',
     ) );
    ?>
    </div>

    <footer class="freshwp-full-post-footer">
        <?php if ( !(freshwp_get_option('hide_post_tags')) ) { ?><?php freshwp_post_tags(); ?><?php } ?>
    </footer>

    <?php if(!(has_post_thumbnail()) || (freshwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(freshwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>