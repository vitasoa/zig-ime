<?php
/**
 * VW Mobile App Theme Customizer
 *
 * @package VW Mobile App
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_mobile_app_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_mobile_app_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-mobile-app' ),
	    'description' => __( 'Description of what this panel does.', 'vw-mobile-app' ),
	) );

	$wp_customize->add_section( 'vw_mobile_app_left_right', array(
    	'title'      => __( 'General Settings', 'vw-mobile-app' ),
		'priority'   => 30,
		'panel' => 'vw_mobile_app_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_mobile_app_theme_options',array(
        'default' => __('Right Sidebar','vw-mobile-app'),
        'sanitize_callback' => 'vw_mobile_app_sanitize_choices'	        
	));
	$wp_customize->add_control('vw_mobile_app_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','vw-mobile-app'),
        'section' => 'vw_mobile_app_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-mobile-app'),
            'Right Sidebar' => __('Right Sidebar','vw-mobile-app'),
            'One Column' => __('One Column','vw-mobile-app'),
            'Three Columns' => __('Three Columns','vw-mobile-app'),
            'Four Columns' => __('Four Columns','vw-mobile-app'),
            'Grid Layout' => __('Grid Layout','vw-mobile-app')
        ),
	) );

	//Slider
	$wp_customize->add_section( 'vw_mobile_app_banner_section' , array(
    	'title'      => __( 'Banner Settings', 'vw-mobile-app' ),
		'priority'   => null,
		'panel' => 'vw_mobile_app_panel_id'
	) );

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'vw_mobile_app_banner_settings', array(
		'default'           => '',
		'sanitize_callback' => 'vw_mobile_app_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'vw_mobile_app_banner_settings', array(
		'label'    => __( 'Select Banner Image Page', 'vw-mobile-app' ),
		'description' => __('Banner image size (1500 x 600)','vw-mobile-app'),
		'section'  => 'vw_mobile_app_banner_section',
		'type'     => 'dropdown-pages'
	) );

	//About Category
	$wp_customize->add_section( 'vw_mobile_app_category_section' , array(
    	'title'      => __( 'About us', 'vw-mobile-app' ),
		'priority'   => null,
		'panel' => 'vw_mobile_app_panel_id'
	) );

	$wp_customize->add_setting('vw_mobile_app_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_mobile_app_section_title',array(
		'label'	=> __('Section Title','vw-mobile-app'),
		'section'=> 'vw_mobile_app_category_section',
		'setting'=> 'vw_mobile_app_section_title',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_section_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_mobile_app_section_text',array(
		'label'	=> __('Section Text','vw-mobile-app'),
		'section'=> 'vw_mobile_app_category_section',
		'setting'=> 'vw_mobile_app_section_text',
		'type'=> 'text'
	));	

	$categories = get_categories();
	$cat_post = array();
	$cat_post[]= 'select';
	$i = 0;	
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('vw_mobile_app_about_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'vw_mobile_app_sanitize_choices',
	));
	$wp_customize->add_control('vw_mobile_app_about_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display services','vw-mobile-app'),
		'description' => __('Image size (70 x 70)','vw-mobile-app'),
		'section' => 'vw_mobile_app_category_section',
	));
	
	//Footer Text
	$wp_customize->add_section('vw_mobile_app_footer',array(
		'title'	=> __('Footer','vw-mobile-app'),
		'description'=> __('This section will appear in the footer','vw-mobile-app'),
		'panel' => 'vw_mobile_app_panel_id',
	));	
	
	$wp_customize->add_setting('vw_mobile_app_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_mobile_app_footer_text',array(
		'label'	=> __('Copyright Text','vw-mobile-app'),
		'section'=> 'vw_mobile_app_footer',
		'setting'=> 'vw_mobile_app_footer_text',
		'type'=> 'text'
	));	
}

add_action( 'customize_register', 'vw_mobile_app_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Mobile_App_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Mobile_App_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_Mobile_App_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Mobile App Pro', 'vw-mobile-app' ),
					'pro_text' => esc_html__( 'Upgrade Pro', 'vw-mobile-app' ),
					'pro_url'  => esc_url('https://www.vwthemes.com/themes/wordpress-mobile-app-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-mobile-app-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-mobile-app-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Mobile_App_Customize::get_instance();