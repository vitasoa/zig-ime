<?php
// Get our wp_nav_menu() fallback, wp_page_menu(), to show a "Home" link as the first item
function powerwp_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'powerwp_page_menu_args' );


function powerwp_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'menu-primary-navigation',
        'menu_class'   => 'menu powerwp-nav-menu menu-primary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}