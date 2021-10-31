<?php
/**
 * Describe child theme functions
 *
 * @package News Vibrant
 * @subpackage News Vibrant Child
 * 
 */

/*-------------------------------------------------------------------------------------------------------------------------------*/
if ( ! function_exists( 'news_vibrant_child_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function news_vibrant_child_setup() {

    $news_vibrant_child_theme_info = wp_get_theme();
    $GLOBALS['news_vibrant_child_version'] = $news_vibrant_child_theme_info->get( 'Version' );
}
endif;

add_action( 'after_setup_theme', 'news_vibrant_child_setup' );

/*-------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Managed the theme default color
 */
function news_vibrant_lite_customize_register( $wp_customize ) {
		global $wp_customize;

		$wp_customize->get_setting( 'news_vibrant_theme_color' )->default = '#08408E';

	}

add_action( 'customize_register', 'news_vibrant_lite_customize_register', 20 );
 
/*-------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Enqueue child theme styles and scripts
 */
add_action( 'wp_enqueue_scripts', 'news_vibrant_child_scripts', 20 );

function news_vibrant_child_scripts() {
    
    global $news_vibrant_child_version;
    
    wp_dequeue_style( 'news-vibrant-style' );
    wp_dequeue_style( 'news-vibrant-responsive-style' );
    
	wp_enqueue_style( 'news-vibrant-parent-style', get_template_directory_uri() . '/style.css', array(), esc_attr( $news_vibrant_child_version ) );
    
    wp_enqueue_style( 'news-vibrant-parent-responsive', get_template_directory_uri() . '/assets/css/nv-responsive.css', array(), esc_attr( $news_vibrant_child_version ) );
    
    wp_enqueue_style( 'news-vibrant-lite', get_stylesheet_uri(), array(), esc_attr( $news_vibrant_child_version ) );
    
    $news_vibrant_lite_theme_color = esc_attr( get_theme_mod( 'news_vibrant_theme_color', '#08408E' ) );
    
    $news_vibrant_site_title_option = get_theme_mod( 'news_vibrant_site_title_option', true );
    $news_vibrant_site_title_color = get_theme_mod( 'news_vibrant_site_title_color', '#34b0fa' );
    
    $output_css = '';
    
    $output_css .= ".navigation .nav-links a,.bttn,button,input[type='button'],input[type='reset'],input[type='submit'],.navigation .nav-links a:hover,.bttn:hover,button,input[type='button']:hover,input[type='reset']:hover,input[type='submit']:hover,.widget_search .search-submit,.widget_tag_cloud .tagcloud a:hover,.edit-link .post-edit-link,.reply .comment-reply-link,.home .nv-home-icon a,.nv-home-icon a:hover,#site-navigation ul li a:before,.nv-header-search-wrapper .search-form-main .search-submit,.ticker-caption,.comments-link:hover a,.news_vibrant_featured_slider .slider-posts .lSAction > a:hover,.news_vibrant_default_tabbed ul.widget-tabs li,.news_vibrant_default_tabbed ul.widget-tabs li.ui-tabs-active,.news_vibrant_default_tabbed ul.widget-tabs li:hover,.nv-block-title-nav-wrap .carousel-nav-action .carousel-controls:hover,.news_vibrant_social_media .social-link a,.news_vibrant_social_media .social-link a:hover,.nv-archive-more .nv-button:hover,.error404 .page-title,#nv-scrollup{ background: ". esc_attr( $news_vibrant_lite_theme_color ) ."}\n";
        
    $output_css .= "a,a:hover,a:focus,a:active,.widget a:hover,.widget a:hover::before,.widget li:hover::before,.entry-footer a:hover,.comment-author .fn .url:hover,#cancel-comment-reply-link,#cancel-comment-reply-link:before,.logged-in-as a,.nv-featured-posts-wrapper .nv-single-post-wrap .nv-post-content .nv-post-meta span:hover, .nv-featured-posts-wrapper .nv-single-post-wrap .nv-post-content .nv-post-meta span a:hover,.search-main:hover,.nv-ticker-block .lSAction>a:hover,.nv-slide-content-wrap .post-title a:hover,.news_vibrant_featured_posts .nv-single-post .nv-post-content .nv-post-title a:hover,.news_vibrant_carousel .nv-single-post .nv-post-title a:hover,.news_vibrant_block_posts .layout3 .nv-primary-block-wrap .nv-single-post .nv-post-title a:hover,.news_vibrant_featured_slider .featured-posts .nv-single-post .nv-post-content .nv-post-title a:hover,.nv-featured-posts-wrapper .nv-single-post-wrap .nv-post-content .nv-post-title a:hover,.nv-post-title.large-size a:hover,.nv-post-title.small-size a:hover,.nv-post-meta span:hover,.nv-post-meta span a:hover,.news_vibrant_featured_posts .nv-single-post-wrap .nv-post-content .nv-post-meta span:hover,.news_vibrant_featured_posts .nv-single-post-wrap .nv-post-content .nv-post-meta span a:hover,.nv-post-title.small-size a:hover,#top-footer .widget a:hover,#top-footer .widget a:hover:before,#top-footer .widget li:hover:before, #footer-navigation ul li a:hover, .entry-title a:hover, .entry-meta span a:hover, .entry-meta span:hover{ color: ". esc_attr( $news_vibrant_lite_theme_color ) ."}\n";

    $output_css .= ".navigation .nav-links a,.bttn,button,input[type='button'],input[type='reset'],input[type='submit'],.widget_search .search-submit,#top-footer .widget-title,.nv-archive-more .nv-button:hover{ border-color: ". esc_attr( $news_vibrant_lite_theme_color ) ."}\n";

    $output_css .= ".comment-list .comment-body,.nv-header-search-wrapper .search-form-main,.comments-link:hover a::after{ border-top-color: ". esc_attr( $news_vibrant_lite_theme_color ) ."}\n";

    $output_css .= ".nv-header-search-wrapper .search-form-main:before{ border-bottom-color: ". esc_attr( $news_vibrant_lite_theme_color ) ."}\n";

    $output_css .= ".nv-block-title,.widget-title,.page-header .page-title,.nv-related-title{ border-left-color: ". esc_attr( $news_vibrant_lite_theme_color ) ."}\n";
    
    $output_css .= ".nv-block-title::after,.widget-title:after,.page-header .page-title:after,.nv-related-title:after{ background:". esc_attr( $news_vibrant_lite_theme_color ) ."}\n";
    
    $output_css .= ".home .nv-home-icon a, .nv-home-icon a:hover,.nv-block-title, .widget-title, .page-header .page-title, .nv-related-title,#site-navigation ul li:hover > a, #site-navigation ul li.current-menu-item > a,#site-navigation ul li.current_page_item > a, #site-navigation ul li.current-menu-ancestor > a,.nv-block-title a{ color:". esc_attr( $news_vibrant_lite_theme_color ) ." !important}\n";
    
    if ( $news_vibrant_site_title_option === true ) {
        $output_css .=".site-title a, .site-description {
            color:". esc_attr( $news_vibrant_site_title_color ) .";
        }\n";
    } else {
        $output_css .=".site-title, .site-description {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px);
        }\n";
    }
        
    $refine_output_css = news_vibrant_css_strip_whitespace( $output_css );

    wp_add_inline_style( 'news-vibrant-lite', $refine_output_css );
    
}
