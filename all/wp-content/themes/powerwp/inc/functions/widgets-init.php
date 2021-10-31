<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function powerwp_widgets_init() {

register_sidebar(array(
    'id' => 'powerwp-header-banner',
    'name' => __( 'Header Banner', 'powerwp' ),
    'description' => __( 'This sidebar is located on the header of the web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'powerwp-left-sidebar',
    'name' => __( 'Sidebar 1', 'powerwp' ),
    'description' => __( 'This sidebar is located on the left-hand side of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-side-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-right-sidebar',
    'name' => __( 'Sidebar 2', 'powerwp' ),
    'description' => __( 'This sidebar is located on the right-hand side of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-side-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-footer-1',
    'name' => __( 'Footer 1', 'powerwp' ),
    'description' => __( 'This sidebar is located on the left bottom of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-footer-2',
    'name' => __( 'Footer 2', 'powerwp' ),
    'description' => __( 'This sidebar is located on the middle bottom of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-footer-3',
    'name' => __( 'Footer 3', 'powerwp' ),
    'description' => __( 'This sidebar is located on the middle bottom of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-footer-4',
    'name' => __( 'Footer 4', 'powerwp' ),
    'description' => __( 'This sidebar is located on the right bottom of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'powerwp_widgets_init' );