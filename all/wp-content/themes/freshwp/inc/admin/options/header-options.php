<?php
/**
* Header Options
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_header_options($wp_customize) {

    // Header
    $wp_customize->add_section( 'sc_freshwp_header', array( 'title' => esc_html__( 'Header Options', 'freshwp' ), 'panel' => 'freshwp_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'freshwp_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'freshwp' ), 'section' => 'sc_freshwp_header', 'settings' => 'freshwp_options[hide_header_content]', 'type' => 'checkbox', ) );

}