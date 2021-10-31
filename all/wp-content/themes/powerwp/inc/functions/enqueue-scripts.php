<?php
/**
 * Enqueue scripts and styles.
 */
function powerwp_scripts() {
    wp_enqueue_style('powerwp-maincss', get_stylesheet_uri(), array(), NULL);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );

    wp_enqueue_style('powerwp-webfont', '//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Domine:400,700|Oswald:400,700|Poppins:400,700', array(), NULL);

    wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.js', array( 'jquery' ), NULL, true);
    wp_enqueue_script('resizesensor', get_template_directory_uri() .'/assets/js/ResizeSensor.js', array( 'jquery' ), NULL, true);
    wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.js', array( 'jquery' ), NULL, true);
    wp_enqueue_script('powerwp-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery' ), NULL, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'powerwp_scripts' );

/**
 * Enqueue IE compatible scripts and styles.
 */
function powerwp_ie_scripts() {
    wp_enqueue_script( 'powerwp-html5shiv', get_template_directory_uri(). '/assets/js/html5shiv.js', array(), NULL, false);
    wp_script_add_data( 'powerwp-html5shiv', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'powerwp-respond', get_template_directory_uri(). '/assets/js/respond.js', array(), NULL, false );
    wp_script_add_data( 'powerwp-respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'powerwp_ie_scripts' );

/**
 * Enqueue customizer styles.
 */
function powerwp_enqueue_customizer_styles() {
    wp_enqueue_style( 'powerwp-customizer-styles', get_template_directory_uri() . '/inc/admin/css/customizer-style.css', array(), NULL );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), NULL );
}
add_action( 'customize_controls_enqueue_scripts', 'powerwp_enqueue_customizer_styles' );