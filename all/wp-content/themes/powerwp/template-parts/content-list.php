<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PowerWP
 */

?>

<div id="post-<?php the_ID(); ?>" class="powerwp-list-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(powerwp_get_option('hide_thumbnail')) ) { ?>
    <div class="powerwp-list-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'powerwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('powerwp-medium-image', array('class' => 'powerwp-list-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(powerwp_get_option('hide_thumbnail'))) { ?><div class="powerwp-list-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (powerwp_get_option('hide_thumbnail'))) { ?><div class="powerwp-list-post-details-full"><?php } ?>

    <?php if ( !(powerwp_get_option('hide_post_categories')) ) { ?><?php powerwp_list_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="powerwp-list-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php powerwp_list_postmeta(); ?>

    <?php if ( !(powerwp_get_option('hide_post_snippet')) ) { ?><div class="powerwp-list-post-snippet"><?php the_excerpt(); ?></div><?php } ?>

    <?php if ( !(powerwp_get_option('hide_read_more_button')) ) { ?><div class='powerwp-list-post-read-more'><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( powerwp_read_more_text() ); ?></a></div><?php } ?>

    <?php if(!(has_post_thumbnail()) || (powerwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(powerwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>