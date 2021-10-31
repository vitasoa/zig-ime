<?php
/**
* Getting started options
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_getting_started($wp_customize) {

    $wp_customize->add_section( 'sc_freshwp_getting_started', array( 'title' => esc_html__( 'Getting Started', 'freshwp' ), 'description' => __( 'Thanks for your interest in FreshWP! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'freshwp' ), 'panel' => 'freshwp_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'freshwp_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new FreshWP_Customize_Button_Control( $wp_customize, 'freshwp_documentation_control', array( 'label' => esc_html__( 'Documentation', 'freshwp' ), 'section' => 'sc_freshwp_getting_started', 'settings' => 'freshwp_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/freshwp-wordpress-theme/', 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'freshwp_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new FreshWP_Customize_Button_Control( $wp_customize, 'freshwp_contact_control', array( 'label' => esc_html__( 'Contact Us', 'freshwp' ), 'section' => 'sc_freshwp_getting_started', 'settings' => 'freshwp_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/contact/', 'button_target' => '_blank', ) ) );

}