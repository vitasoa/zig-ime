<?php
function powerwp_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_powerwp_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'powerwp' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'powerwp_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new PowerWP_Customize_Static_Text_Control( $wp_customize, 'powerwp_upgrade_text_control', array(
        'label'       => esc_html__( 'PowerWP Pro', 'powerwp' ),
        'section'     => 'sc_powerwp_upgrade',
        'settings' => 'powerwp_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy PowerWP? Upgrade to PowerWP Pro now and get:', 'powerwp' ).
            '<ul class="powerwp-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Layout Options', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Page Templates', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Post Templates', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '5 Different Posts Styles', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '5 Different Featured Posts Widgets(each widget displays recent/popular/random posts or posts from a given category or tag.)', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '2 Header Layouts (full-width header or header+728x90 ad)', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'powerwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'powerwp' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.POWERWP_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To PowerWP PRO', 'powerwp' ) . '</a></strong>'
    ) ) ); 

}