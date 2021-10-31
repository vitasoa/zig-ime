<?php
function powerwp_getting_started($wp_customize) {

    $wp_customize->add_section( 'sc_powerwp_getting_started', array( 'title' => esc_html__( 'Getting Started', 'powerwp' ), 'description' => __( 'Thanks for your interest in PowerWP! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'powerwp' ), 'panel' => 'powerwp_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'powerwp_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new PowerWP_Customize_Button_Control( $wp_customize, 'powerwp_documentation_control', array( 'label' => esc_html__( 'Documentation', 'powerwp' ), 'section' => 'sc_powerwp_getting_started', 'settings' => 'powerwp_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/powerwp-wordpress-theme/', 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'powerwp_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new PowerWP_Customize_Button_Control( $wp_customize, 'powerwp_contact_control', array( 'label' => esc_html__( 'Contact Us', 'powerwp' ), 'section' => 'sc_powerwp_getting_started', 'settings' => 'powerwp_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/contact/', 'button_target' => '_blank', ) ) );

}