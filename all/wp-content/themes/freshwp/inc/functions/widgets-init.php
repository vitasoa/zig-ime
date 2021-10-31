<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_widgets_init() {

register_sidebar(array(
    'id' => 'freshwp-header-banner',
    'name' => __( 'Header Banner', 'freshwp' ),
    'description' => __( 'This sidebar is located on the header of the web page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'freshwp-left-sidebar',
    'name' => __( 'Sidebar 1', 'freshwp' ),
    'description' => __( 'This sidebar is located on the left-hand side of web page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-side-widget widget freshwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-right-sidebar',
    'name' => __( 'Sidebar 2', 'freshwp' ),
    'description' => __( 'This sidebar is located on the right-hand side of web page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-side-widget widget freshwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-home-top-widgets',
    'name' => __( 'Top Widgets (Home Page Only)', 'freshwp' ),
    'description' => __( 'This widget area is located at the top of homepage.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-main-widget widget freshwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-top-widgets',
    'name' => __( 'Top Widgets (Every Page)', 'freshwp' ),
    'description' => __( 'This widget area is located at the top of every page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-main-widget widget freshwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-home-bottom-widgets',
    'name' => __( 'Bottom Widgets (Home Page Only)', 'freshwp' ),
    'description' => __( 'This widget area is located at the bottom of homepage.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-main-widget widget freshwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-bottom-widgets',
    'name' => __( 'Bottom Widgets (Every Page)', 'freshwp' ),
    'description' => __( 'This widget area is located at the bottom of every page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-main-widget widget freshwp-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-footer-1',
    'name' => __( 'Footer 1', 'freshwp' ),
    'description' => __( 'This sidebar is located on the left bottom of web page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-footer-2',
    'name' => __( 'Footer 2', 'freshwp' ),
    'description' => __( 'This sidebar is located on the middle bottom of web page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-footer-3',
    'name' => __( 'Footer 3', 'freshwp' ),
    'description' => __( 'This sidebar is located on the middle bottom of web page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'freshwp-footer-4',
    'name' => __( 'Footer 4', 'freshwp' ),
    'description' => __( 'This sidebar is located on the right bottom of web page.', 'freshwp' ),
    'before_widget' => '<div id="%1$s" class="freshwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="freshwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'freshwp_widgets_init' );