<?php
/**
* Upgrade to pro options
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_freshwp_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'freshwp' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'freshwp_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new FreshWP_Customize_Static_Text_Control( $wp_customize, 'freshwp_upgrade_text_control', array(
        'label'       => esc_html__( 'FreshWP Pro', 'freshwp' ),
        'section'     => 'sc_freshwp_upgrade',
        'settings' => 'freshwp_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy FreshWP? Upgrade to FreshWP Pro now and get:', 'freshwp' ).
            '<ul class="freshwp-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Layout Options', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Page Templates', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Post Templates', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '8 Different Posts Styles', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '7 Different Featured Posts Widgets(each widget displays recent/popular/random posts or posts from a given category or tag.)', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Featured Posts Slider Widget(this widget displays recent/popular/random posts or posts from a given category or tag.)', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Tabbed Widget', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '2 Header Layouts (full-width header or header+728x90 ad)', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'freshwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'freshwp' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.FRESHWP_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To FreshWP PRO', 'freshwp' ) . '</a></strong>'
    ) ) ); 

}