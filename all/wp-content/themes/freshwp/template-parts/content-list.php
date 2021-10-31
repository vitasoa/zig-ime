<?php
/**
* A template part for displaying list style posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="freshwp-list-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(freshwp_get_option('hide_thumbnail')) ) { ?>
    <div class="freshwp-list-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'freshwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('freshwp-medium-image', array('class' => 'freshwp-list-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(freshwp_get_option('hide_thumbnail'))) { ?><div class="freshwp-list-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (freshwp_get_option('hide_thumbnail'))) { ?><div class="freshwp-list-post-details-full"><?php } ?>

    <?php if ( !(freshwp_get_option('hide_post_categories')) ) { ?><?php freshwp_list_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="freshwp-list-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php freshwp_list_postmeta(); ?>

    <?php if ( !(freshwp_get_option('hide_post_snippet')) ) { ?><div class="freshwp-list-post-snippet"><?php the_excerpt(); ?></div><?php } ?>

    <?php if ( !(freshwp_get_option('hide_read_more_button')) ) { ?><div class='freshwp-list-post-read-more'><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( freshwp_read_more_text() ); ?></a></div><?php } ?>

    <?php if(!(has_post_thumbnail()) || (freshwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(freshwp_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>