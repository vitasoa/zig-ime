<?php
/**
* Customizer Options
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_customizer_css() {
    ?>
    <style type="text/css">
    <?php if ( freshwp_get_option('hide_header_content') ) { ?>#freshwp-head-content{padding:0;min-height:auto;} .freshwp-header-image{margin:0;}<?php } ?>
    </style>
    <?php
}
add_action( 'wp_head', 'freshwp_customizer_css' );

// Header styles
if ( ! function_exists( 'freshwp_header_style' ) ) :
function freshwp_header_style() {
    $header_text_color = get_header_textcolor();
    if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) { return; }
    ?>
    <style type="text/css">
    <?php if ( ! display_header_text() ) : ?>
        .freshwp-site-title, .freshwp-site-description {position: absolute;clip: rect(1px, 1px, 1px, 1px);}
    <?php else : ?>
        .freshwp-site-title, .freshwp-site-title a, .freshwp-site-description {color: #<?php echo esc_attr( $header_text_color ); ?>;}
    <?php endif; ?>
    </style>
    <?php
}
endif;