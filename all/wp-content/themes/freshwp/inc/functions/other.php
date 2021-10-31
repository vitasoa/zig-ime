<?php
/**
* More Custom Functions
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function freshwp_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $freshwp_custom_logo_id = get_theme_mod( 'custom_logo' );
    $freshwp_logo = wp_get_attachment_image_src( $freshwp_custom_logo_id , 'full' );
    return $freshwp_logo[0];
}

function freshwp_read_more_text() {
       $readmoretext = esc_html__( 'Continue Reading...', 'freshwp' );
        if ( freshwp_get_option('read_more_text') ) {
                $readmoretext = esc_html(freshwp_get_option('read_more_text'));
        }
       return $readmoretext;
}

// Category ids in post class
function freshwp_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'freshwp_category_id_class');

// Change excerpt length
function freshwp_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 25;
    if ( freshwp_get_option('read_more_length') ) {
        $read_more_length = freshwp_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'freshwp_excerpt_length');

// Change excerpt more word
function freshwp_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'freshwp_excerpt_more');

// Adds custom classes to the array of body classes.
function freshwp_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'freshwp-group-blog';
    }

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $classes[] = 'freshwp-layout-full-width';
    }

    if ( is_404() ) {
        $classes[] = 'freshwp-404-full-width';
    }

    return $classes;
}
add_filter( 'body_class', 'freshwp_body_classes' );


function freshwp_post_style() {
       $post_style = 'list';
        if ( freshwp_get_option('post_style') ) {
                $post_style = esc_html(freshwp_get_option('post_style'));
        }
       return $post_style;
}