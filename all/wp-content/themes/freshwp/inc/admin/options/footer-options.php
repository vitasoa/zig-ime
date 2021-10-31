<?php
/**
* Footer options
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_footer_options($wp_customize) {

    $wp_customize->add_section( 'sc_freshwp_footer', array( 'title' => esc_html__( 'Footer', 'freshwp' ), 'panel' => 'freshwp_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'freshwp_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_html', ) );

    $wp_customize->add_control( 'freshwp_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'freshwp' ), 'section' => 'sc_freshwp_footer', 'settings' => 'freshwp_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'freshwp' ), 'section' => 'sc_freshwp_footer', 'settings' => 'freshwp_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}