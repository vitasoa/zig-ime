<?php
// Get custom-logo URL
function powerwp_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $powerwp_custom_logo_id = get_theme_mod( 'custom_logo' );
    $powerwp_logo = wp_get_attachment_image_src( $powerwp_custom_logo_id , 'full' );
    return $powerwp_logo[0];
}

function powerwp_read_more_text() {
       $readmoretext = esc_html__( 'Continue Reading...', 'powerwp' );
        if ( powerwp_get_option('read_more_text') ) {
                $readmoretext = esc_html(powerwp_get_option('read_more_text'));
        }
       return $readmoretext;
}

// Category ids in post class
function powerwp_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'powerwp_category_id_class');

// Change excerpt length
function powerwp_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 25;
    if ( powerwp_get_option('read_more_length') ) {
        $read_more_length = powerwp_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'powerwp_excerpt_length');

// Change excerpt more word
function powerwp_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'powerwp_excerpt_more');

// Adds custom classes to the array of body classes.
function powerwp_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'powerwp-group-blog';
    }

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-page-sidebar.php', 'template-full-width-post.php', 'template-full-width-post-sidebar.php' ) ) ) {
       $classes[] = 'powerwp-layout-full-width';
    }

    if ( !is_active_sidebar( 'powerwp-left-sidebar' ) && !is_active_sidebar( 'powerwp-right-sidebar' ) ) {
       //$classes[] = 'powerwp-style-full-width-no-sidebar';
    }

    if ( is_404() ) {
        $classes[] = 'powerwp-404-full-width';
    }

    return $classes;
}
add_filter( 'body_class', 'powerwp_body_classes' );


function powerwp_post_style() {
       $post_style = 'list';
        if ( powerwp_get_option('post_style') ) {
                $post_style = esc_html(powerwp_get_option('post_style'));
        }
       return $post_style;
}