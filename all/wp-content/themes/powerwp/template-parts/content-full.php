<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PowerWP
 */

?>

<div id="post-<?php the_ID(); ?>" class="powerwp-full-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(powerwp_get_option('hide_thumbnail')) ) { ?>
    <div class="powerwp-full-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( esc_html__( 'Permanent Link to %s', 'powerwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('powerwp-featured-image', array('class' => 'powerwp-full-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(powerwp_get_option('hide_thumbnail'))) { ?><div class="powerwp-full-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (powerwp_get_option('hide_thumbnail'))) { ?><div class="powerwp-full-post-details-full"><?php } ?>

    <?php if ( !(powerwp_get_option('hide_post_categories')) ) { ?><?php powerwp_full_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="powerwp-full-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php powerwp_full_postmeta(); ?>

    <div class="powerwp-full-post-snippet clearfix">
    <?php
    the_content( sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'powerwp' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ) );

    wp_link_pages( array(
     'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'powerwp' ) . '</span>',
     'after'       => '</div>',
     'link_before' => '<span>',
     'link_after'  => '</span>',
     'separator'   => '',
     ) );
    ?>
    </div>

    <footer class="powerwp-full-post-footer">
        <?php if ( !(powerwp_get_option('hide_post_tags')) ) { ?><?php powerwp_post_tags(); ?><?php } ?>
    </footer>

    <?php if(!(has_post_thumbnail()) || (powerwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(powerwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>