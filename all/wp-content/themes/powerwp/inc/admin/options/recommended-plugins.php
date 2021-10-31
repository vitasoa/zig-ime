<?php
function powerwp_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'sc_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'powerwp' ), 'panel' => 'powerwp_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'powerwp_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'powerwp_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new PowerWP_Customize_Recommended_Plugins( $wp_customize, 'powerwp_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'powerwp' ), 'section' => 'sc_recommended_plugins', 'settings' => 'powerwp_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins' ) ) );

}