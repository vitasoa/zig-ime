<?php
/**
* Recommended Plugins Options
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'sc_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'freshwp' ), 'panel' => 'freshwp_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'freshwp_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new FreshWP_Customize_Recommended_Plugins( $wp_customize, 'freshwp_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'freshwp' ), 'section' => 'sc_recommended_plugins', 'settings' => 'freshwp_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins' ) ) );

}