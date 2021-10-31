<?php
/**
* Post meta functions
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'freshwp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function freshwp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'freshwp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'freshwp' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'freshwp_full_cats' ) ) :
function freshwp_full_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html( ' ' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="freshwp-full-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'freshwp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'freshwp_full_postmeta' ) ) :
function freshwp_full_postmeta() { ?>
    <?php if ( !(freshwp_get_option('hide_post_author')) || !(freshwp_get_option('hide_posted_date')) || !(freshwp_get_option('hide_comments_link')) ) { ?>
    <div class="freshwp-full-post-footer">
    <?php if ( !(freshwp_get_option('hide_post_author')) ) { ?><span class="freshwp-full-post-author freshwp-full-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(freshwp_get_option('hide_posted_date')) ) { ?><span class="freshwp-full-post-date freshwp-full-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(freshwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="freshwp-full-post-comment freshwp-full-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'freshwp' ), esc_attr__( '1 Comment', 'freshwp' ), esc_attr__( '% Comments', 'freshwp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;



if ( ! function_exists( 'freshwp_list_cats' ) ) :
function freshwp_list_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html( ' ' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="freshwp-list-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'freshwp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'freshwp_list_postmeta' ) ) :
function freshwp_list_postmeta() { ?>
    <?php if ( !(freshwp_get_option('hide_post_author')) || !(freshwp_get_option('hide_posted_date')) || !(freshwp_get_option('hide_comments_link')) ) { ?>
    <div class="freshwp-list-post-footer">
    <?php if ( !(freshwp_get_option('hide_post_author')) ) { ?><span class="freshwp-list-post-author freshwp-list-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(freshwp_get_option('hide_posted_date')) ) { ?><span class="freshwp-list-post-date freshwp-list-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(freshwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="freshwp-list-post-comment freshwp-list-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'freshwp' ), esc_attr__( '1 Comment', 'freshwp' ), esc_attr__( '% Comments', 'freshwp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'freshwp_single_cats' ) ) :
function freshwp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( ', ' );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="freshwp-entry-meta-single freshwp-entry-meta-single-top"><span class="freshwp-entry-meta-single-cats"><i class="fa fa-folder-open-o"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'freshwp' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'freshwp_single_postmeta' ) ) :
function freshwp_single_postmeta() { ?>
    <?php if ( !(freshwp_get_option('hide_post_author')) || !(freshwp_get_option('hide_posted_date')) || !(freshwp_get_option('hide_comments_link')) || !(freshwp_get_option('hide_post_edit')) ) { ?>
    <div class="freshwp-entry-meta-single">
    <?php if ( !(freshwp_get_option('hide_post_author')) ) { ?><span class="freshwp-entry-meta-single-author"><i class="fa fa-user-circle-o"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(freshwp_get_option('hide_posted_date')) ) { ?><span class="freshwp-entry-meta-single-date"><i class="fa fa-clock-o"></i>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(freshwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="freshwp-entry-meta-single-comments"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( esc_attr__( 'Leave a comment', 'freshwp' ), esc_attr__( '1 Comment', 'freshwp' ), esc_attr__( '% Comments', 'freshwp' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(freshwp_get_option('hide_post_edit')) ) { ?><?php edit_post_link( __( 'Edit', 'freshwp' ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;