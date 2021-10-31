<?php
/**
 * Post meta functions
 *
 * @package PowerWP
 */

if ( ! function_exists( 'powerwp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function powerwp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'powerwp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'powerwp' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'powerwp_full_cats' ) ) :
function powerwp_full_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ' ', 'powerwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="powerwp-full-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'powerwp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'powerwp_full_postmeta' ) ) :
function powerwp_full_postmeta() { ?>
    <?php if ( !(powerwp_get_option('hide_post_author')) || !(powerwp_get_option('hide_posted_date')) || !(powerwp_get_option('hide_comments_link')) ) { ?>
    <div class="powerwp-full-post-footer">
    <?php if ( !(powerwp_get_option('hide_post_author')) ) { ?><span class="powerwp-full-post-author powerwp-full-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(powerwp_get_option('hide_posted_date')) ) { ?><span class="powerwp-full-post-date powerwp-full-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(powerwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="powerwp-full-post-comment powerwp-full-post-meta"><?php comments_popup_link( __( 'Leave a comment', 'powerwp' ), __( '1 Comment', 'powerwp' ), __( '% Comments', 'powerwp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;



if ( ! function_exists( 'powerwp_list_cats' ) ) :
function powerwp_list_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ' ', 'powerwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="powerwp-list-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'powerwp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'powerwp_list_postmeta' ) ) :
function powerwp_list_postmeta() { ?>
    <?php if ( !(powerwp_get_option('hide_post_author')) || !(powerwp_get_option('hide_posted_date')) || !(powerwp_get_option('hide_comments_link')) ) { ?>
    <div class="powerwp-list-post-footer">
    <?php if ( !(powerwp_get_option('hide_post_author')) ) { ?><span class="powerwp-list-post-author powerwp-list-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(powerwp_get_option('hide_posted_date')) ) { ?><span class="powerwp-list-post-date powerwp-list-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(powerwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="powerwp-list-post-comment powerwp-list-post-meta"><?php comments_popup_link( __( 'Leave a comment', 'powerwp' ), __( '1 Comment', 'powerwp' ), __( '% Comments', 'powerwp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'powerwp_single_cats' ) ) :
function powerwp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( ', ' );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="powerwp-entry-meta-single powerwp-entry-meta-single-top"><span class="powerwp-entry-meta-single-cats"><i class="fa fa-folder-open-o"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'powerwp' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'powerwp_single_postmeta' ) ) :
function powerwp_single_postmeta() { ?>
    <?php if ( !(powerwp_get_option('hide_post_author')) || !(powerwp_get_option('hide_posted_date')) || !(powerwp_get_option('hide_comments_link')) || !(powerwp_get_option('hide_post_edit')) ) { ?>
    <div class="powerwp-entry-meta-single">
    <?php if ( !(powerwp_get_option('hide_post_author')) ) { ?><span class="powerwp-entry-meta-single-author"><i class="fa fa-user-circle-o"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(powerwp_get_option('hide_posted_date')) ) { ?><span class="powerwp-entry-meta-single-date"><i class="fa fa-clock-o"></i>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(powerwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="powerwp-entry-meta-single-comments"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( __( 'Leave a comment', 'powerwp' ), __( '1 Comment', 'powerwp' ), __( '% Comments', 'powerwp' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(powerwp_get_option('hide_post_edit')) ) { ?><?php edit_post_link( __( 'Edit', 'powerwp' ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;