<?php
// Customizer Options
function powerwp_customizer_css() {
    ?>
    <style type="text/css">
    <?php if ( powerwp_get_option('body_text_color') ) { ?>
    body,button,input,select,textarea{color:<?php echo esc_attr( powerwp_get_option('body_text_color') ); ?>}
    <?php } ?>
    <?php if ( powerwp_get_option('link_color') ) { ?>
    a{color:<?php echo esc_attr( powerwp_get_option('link_color') ); ?>}
    <?php } ?>
    <?php if ( powerwp_get_option('link_hover_color') ) { ?>
    a:hover{color:<?php echo esc_attr( powerwp_get_option('link_hover_color') ); ?>}
    <?php } ?>
    <?php if ( powerwp_get_option('headings_color') ) { ?>
    h1,h2,h3,h4,h5,h6{color:<?php echo esc_attr( powerwp_get_option('headings_color') ); ?>}
    <?php } ?>

    <?php if ( powerwp_get_option('menu_bg_color') ) { ?>
    .powerwp-nav-primary{background:<?php echo esc_attr( powerwp_get_option('menu_bg_color') ); ?>}
    <?php } ?>
    <?php if ( powerwp_get_option('menu_bd_color') ) { ?>
    .powerwp-nav-primary{border:1px solid <?php echo esc_attr( powerwp_get_option('menu_bd_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('menu_color') ) { ?>
    .powerwp-nav-menu a{color:<?php echo esc_attr( powerwp_get_option('menu_color') ); ?>}
    @media only screen and (max-width: 1076px) {
    .powerwp-nav-menu.responsive-menu > .menu-item-has-children:before,.powerwp-nav-menu.responsive-menu > .page_item_has_children:before{color:<?php echo esc_attr( powerwp_get_option('menu_color') ); ?>}
    .powerwp-nav-menu.responsive-menu .menu-open.menu-item-has-children:before,.powerwp-nav-menu.responsive-menu .menu-open.page_item_has_children:before{color:<?php echo esc_attr( powerwp_get_option('menu_color') ); ?>}
    }
    <?php } ?>
    <?php if ( powerwp_get_option('menu_hover_color') ) { ?>
    .powerwp-nav-menu a:hover,.powerwp-nav-menu .current-menu-item > a,.powerwp-nav-menu .sub-menu .current-menu-item > a:hover,.powerwp-nav-menu .current_page_item > a,.powerwp-nav-menu .children .current_page_item > a:hover{color:<?php echo esc_attr( powerwp_get_option('menu_hover_color') ); ?>}
    .powerwp-nav-menu .sub-menu .current-menu-item > a,.powerwp-nav-menu .children .current_page_item > a{color:<?php echo esc_attr( powerwp_get_option('menu_hover_color') ); ?>}
    <?php } ?>
    <?php if ( powerwp_get_option('menu_hover_bg_color') ) { ?>
    .powerwp-nav-menu a:hover,.powerwp-nav-menu .current-menu-item > a,.powerwp-nav-menu .sub-menu .current-menu-item > a:hover,.powerwp-nav-menu .current_page_item > a,.powerwp-nav-menu .children .current_page_item > a:hover{background:<?php echo esc_attr( powerwp_get_option('menu_hover_bg_color') ); ?>}
    <?php } ?>
    <?php if ( powerwp_get_option('submenu_one_bg_color') ) { ?>
    .powerwp-nav-menu .sub-menu,.powerwp-nav-menu .children{background:<?php echo esc_attr( powerwp_get_option('submenu_one_bg_color') ); ?>}
    <?php } ?>
    <?php if ( powerwp_get_option('submenu_one_bd_color') ) { ?>
    .powerwp-nav-menu .sub-menu a,.powerwp-nav-menu .children a{border:1px solid <?php echo esc_attr( powerwp_get_option('submenu_one_bd_color') ); ?>;border-top:none;}
    .powerwp-nav-menu .sub-menu li:first-child a,.powerwp-nav-menu .children li:first-child a{border-top:1px solid <?php echo esc_attr( powerwp_get_option('submenu_one_bd_color') ); ?>;}
    .powerwp-nav-menu > li > a{border-right:1px solid <?php echo esc_attr( powerwp_get_option('submenu_one_bd_color') ); ?>;}
    .powerwp-nav-menu > li:first-child > a {border-left: 0px solid <?php echo esc_attr( powerwp_get_option('submenu_one_bd_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('menu_icon_color') ) { ?>
    .powerwp-responsive-menu-icon::before{color: <?php echo esc_attr( powerwp_get_option('menu_icon_color') ); ?>}
    <?php } ?>


    <?php if ( powerwp_get_option('post_title_color') ) { ?>
    .entry-title,.entry-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?>;}
    .powerwp-featured-post-title,.powerwp-featured-post-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?> !important;}
    .powerwp-full-post-title,.powerwp-full-post-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?> !important;}
    .powerwp-standard-post-title,.powerwp-standard-post-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?> !important;}
    .powerwp-list-post-title,.powerwp-list-post-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?> !important;}
    .powerwp-grid-post-title,.powerwp-grid-post-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?> !important;}
    .powerwp-popular-post .powerwp-popular-post-title,.powerwp-popular-post .powerwp-popular-post-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?> !important;}
    .powerwp-recent-post .powerwp-recent-post-title,.powerwp-recent-post .powerwp-recent-post-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?> !important;}
    .powerwp-random-post .powerwp-random-post-title,.powerwp-random-post .powerwp-random-post-title a{color:<?php echo esc_attr( powerwp_get_option('post_title_color') ); ?> !important;}
    <?php } ?>

    <?php if ( powerwp_get_option('post_title_hover_color') ) { ?>
    .entry-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?>;}
    .powerwp-featured-post-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?> !important;}
    .powerwp-full-post-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?> !important;}
    .powerwp-standard-post-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?> !important;}
    .powerwp-list-post-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?> !important;}
    .powerwp-grid-post-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?> !important;}
    .powerwp-popular-post .powerwp-popular-post-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?> !important;}
    .powerwp-recent-post .powerwp-recent-post-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?> !important;}
    .powerwp-random-post .powerwp-random-post-title a:hover{color:<?php echo esc_attr( powerwp_get_option('post_title_hover_color') ); ?> !important;}
    <?php } ?>

    <?php if ( powerwp_get_option('post_body_link_color') ) { ?>
    .entry-content a{color:<?php echo esc_attr( powerwp_get_option('post_body_link_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('post_body_link_hover_color') ) { ?>
    .entry-content a:hover{color:<?php echo esc_attr( powerwp_get_option('post_body_link_hover_color') ); ?>;}
    <?php } ?>

    <?php if ( powerwp_get_option('postcats_color') ) { ?>
    .powerwp-featured-post-categories a{color:<?php echo esc_attr( powerwp_get_option('postcats_color') ); ?> !important;}
    .powerwp-full-post-categories a{color:<?php echo esc_attr( powerwp_get_option('postcats_color') ); ?> !important;}
    .powerwp-standard-post-categories a{color:<?php echo esc_attr( powerwp_get_option('postcats_color') ); ?> !important;}
    .powerwp-list-post-categories a{color:<?php echo esc_attr( powerwp_get_option('postcats_color') ); ?> !important;}
    .powerwp-grid-post-categories a{color:<?php echo esc_attr( powerwp_get_option('postcats_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('postcats_bg_color') ) { ?>
    .powerwp-featured-post-categories a{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_color') ); ?> !important;}
    .powerwp-full-post-categories a{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_color') ); ?> !important;}
    .powerwp-standard-post-categories a{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_color') ); ?> !important;}
    .powerwp-list-post-categories a{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_color') ); ?> !important;}
    .powerwp-grid-post-categories a{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('postcats_hover_color') ) { ?>
    .powerwp-featured-post-categories a:hover{color:<?php echo esc_attr( powerwp_get_option('postcats_hover_color') ); ?> !important;}
    .powerwp-full-post-categories a:hover{color:<?php echo esc_attr( powerwp_get_option('postcats_hover_color') ); ?> !important;}
    .powerwp-standard-post-categories a:hover{color:<?php echo esc_attr( powerwp_get_option('postcats_hover_color') ); ?> !important;}
    .powerwp-list-post-categories a:hover{color:<?php echo esc_attr( powerwp_get_option('postcats_hover_color') ); ?> !important;}
    .powerwp-grid-post-categories a:hover{color:<?php echo esc_attr( powerwp_get_option('postcats_hover_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('postcats_bg_hover_color') ) { ?>
    .powerwp-featured-post-categories a:hover{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_hover_color') ); ?> !important;}
    .powerwp-full-post-categories a:hover{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_hover_color') ); ?> !important;}
    .powerwp-standard-post-categories a:hover{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_hover_color') ); ?> !important;}
    .powerwp-list-post-categories a:hover{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_hover_color') ); ?> !important;}
    .powerwp-grid-post-categories a:hover{background:<?php echo esc_attr( powerwp_get_option('postcats_bg_hover_color') ); ?> !important;}
    <?php } ?>

    <?php if ( powerwp_get_option('post_meta_color') ) { ?>
    .powerwp-entry-meta-single,.powerwp-entry-meta-single a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?>;}
    .powerwp-featured-post-footer,.powerwp-featured-post-footer a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?> !important;}
    .powerwp-full-post-footer,.powerwp-full-post-footer a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?> !important;}
    .powerwp-standard-post-footer,.powerwp-standard-post-footer a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?> !important;}
    .powerwp-list-post-footer,.powerwp-list-post-footer a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?> !important;}
    .powerwp-grid-post-footer,.powerwp-grid-post-footer a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?> !important;}
    .powerwp-popular-entry-meta,.powerwp-popular-entry-meta a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?> !important;}
    .powerwp-recent-entry-meta,.powerwp-recent-entry-meta a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?> !important;}
    .powerwp-random-entry-meta,.powerwp-random-entry-meta a{color:<?php echo esc_attr( powerwp_get_option('post_meta_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('post_meta_hover_color') ) { ?>
    .powerwp-entry-meta-single a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?>;}
    .powerwp-featured-post-footer a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?> !important;}
    .powerwp-full-post-footer a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?> !important;}
    .powerwp-standard-post-footer a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?> !important;}
    .powerwp-list-post-footer a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?> !important;}
    .powerwp-grid-post-footer a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?> !important;}
    .powerwp-popular-entry-meta a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?> !important;}
    .powerwp-recent-entry-meta a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?> !important;}
    .powerwp-random-entry-meta a:hover{color:<?php echo esc_attr( powerwp_get_option('post_meta_hover_color') ); ?> !important;}
    <?php } ?>

    <?php if ( powerwp_get_option('rmore_color') ) { ?>
    .powerwp-standard-post-read-more a{color:<?php echo esc_attr( powerwp_get_option('rmore_color') ); ?> !important;}
    .powerwp-list-post-read-more a{color:<?php echo esc_attr( powerwp_get_option('rmore_color') ); ?> !important;}
    .powerwp-grid-post-read-more a{color:<?php echo esc_attr( powerwp_get_option('rmore_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('rmore_bg_color') ) { ?>
    .powerwp-standard-post-read-more a{background:<?php echo esc_attr( powerwp_get_option('rmore_bg_color') ); ?> !important;}
    .powerwp-list-post-read-more a{background:<?php echo esc_attr( powerwp_get_option('rmore_bg_color') ); ?> !important;}
    .powerwp-grid-post-read-more a{background:<?php echo esc_attr( powerwp_get_option('rmore_bg_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('rmore_hover_color') ) { ?>
    .powerwp-standard-post-read-more a:hover{color:<?php echo esc_attr( powerwp_get_option('rmore_hover_color') ); ?> !important;}
    .powerwp-list-post-read-more a:hover{color:<?php echo esc_attr( powerwp_get_option('rmore_hover_color') ); ?> !important;}
    .powerwp-grid-post-read-more a:hover{color:<?php echo esc_attr( powerwp_get_option('rmore_hover_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('rmore_bg_hover_color') ) { ?>
    .powerwp-standard-post-read-more a:hover{background:<?php echo esc_attr( powerwp_get_option('rmore_bg_hover_color') ); ?> !important;}
    .powerwp-list-post-read-more a:hover{background:<?php echo esc_attr( powerwp_get_option('rmore_bg_hover_color') ); ?> !important;}
    .powerwp-grid-post-read-more a:hover{background:<?php echo esc_attr( powerwp_get_option('rmore_bg_hover_color') ); ?> !important;}
    <?php } ?>

    <?php if ( powerwp_get_option('sidebar_one_bg_color') ) { ?>
    #powerwp-sidebar-one-wrapper{background:<?php echo esc_attr( powerwp_get_option('sidebar_one_bg_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('sidebar_two_bg_color') ) { ?>
    #powerwp-sidebar-two-wrapper{background:<?php echo esc_attr( powerwp_get_option('sidebar_two_bg_color') ); ?>;}
    <?php } ?>

    <?php if ( powerwp_get_option('sidebar_title_color') ) { ?>
    .powerwp-sidebar-content .powerwp-widget-title, .powerwp-sidebar-content .powerwp-widget-title span, .powerwp-sidebar-content .powerwp-widget-title a, .powerwp-sidebar-content .powerwp-widget-title a:hover{color:<?php echo esc_attr( powerwp_get_option('sidebar_title_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('sidebar_title_bg_color') ) { ?>
    .powerwp-sidebar-content .powerwp-widget-title{border-bottom:2px solid <?php echo esc_attr( powerwp_get_option('sidebar_title_bg_color') ); ?>;}
    .powerwp-sidebar-content .powerwp-widget-title span{background:<?php echo esc_attr( powerwp_get_option('sidebar_title_bg_color') ); ?>;}
    <?php } ?>

    <?php if ( powerwp_get_option('sidebar_text_color') ) { ?>
    .powerwp-sidebar-content,.powerwp-sidebar-content .widget{color:<?php echo esc_attr( powerwp_get_option('sidebar_text_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('sidebar_link_color') ) { ?>
    .powerwp-sidebar-content a{color:<?php echo esc_attr( powerwp_get_option('sidebar_link_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('sidebar_link_hover_color') ) { ?>
    .powerwp-sidebar-content a:hover{color:<?php echo esc_attr( powerwp_get_option('sidebar_link_hover_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('sidebar_list_bd_color') ) { ?>
    powerwp-sidebar-content li{border-bottom:1px dotted <?php echo esc_attr( powerwp_get_option('sidebar_list_bd_color') ); ?>;}
    <?php } ?>

    <?php if ( powerwp_get_option('tag_cloud_color') ) { ?>
    .widget_tag_cloud a{color:<?php echo esc_attr( powerwp_get_option('tag_cloud_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('tag_cloud_bg_color') ) { ?>
    .widget_tag_cloud a{background:<?php echo esc_attr( powerwp_get_option('tag_cloud_bg_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('tag_cloud_hover_color') ) { ?>
    .widget_tag_cloud a:hover{color:<?php echo esc_attr( powerwp_get_option('tag_cloud_hover_color') ); ?> !important;}
    <?php } ?>
    <?php if ( powerwp_get_option('tag_cloud_hover_bg_color') ) { ?>
    .widget_tag_cloud a:hover{background:<?php echo esc_attr( powerwp_get_option('tag_cloud_hover_bg_color') ); ?> !important;}
    <?php } ?>

    <?php if ( powerwp_get_option('social_bg_color') ) { ?>
    .powerwp-social-icons{background:<?php echo esc_attr( powerwp_get_option('social_bg_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('social_bd_color') ) { ?>
    .powerwp-social-icons{border-bottom:1px solid <?php echo esc_attr( powerwp_get_option('social_bd_color') ); ?>;}
    <?php } ?>

    <?php if ( powerwp_get_option('footer_bg_color') ) { ?>
    #powerwp-footer-widgets{background:<?php echo esc_attr( powerwp_get_option('footer_bg_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('footer_bd_color') ) { ?>
    #powerwp-footer-widgets{border-top:4px solid <?php echo esc_attr( powerwp_get_option('footer_bd_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('footer_title_color') ) { ?>
    #powerwp-footer-widgets .powerwp-widget-title,#powerwp-footer-widgets .powerwp-widget-title span,#powerwp-footer-widgets .powerwp-widget-title a,#powerwp-footer-widgets .powerwp-widget-title a:hover{color:<?php echo esc_attr( powerwp_get_option('footer_title_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('footer_title_bg_color') ) { ?>
    #powerwp-footer-widgets .powerwp-widget-title{border-bottom:2px solid <?php echo esc_attr( powerwp_get_option('footer_title_bg_color') ); ?>;}
    #powerwp-footer-widgets .powerwp-widget-title span{background:<?php echo esc_attr( powerwp_get_option('footer_title_bg_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('footer_text_color') ) { ?>
    #powerwp-footer-widgets .widget{color:<?php echo esc_attr( powerwp_get_option('footer_text_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('footer_link_color') ) { ?>
    #powerwp-footer-widgets .widget a{color:<?php echo esc_attr( powerwp_get_option('footer_link_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('footer_link_hover_color') ) { ?>
    #powerwp-footer-widgets .widget a:hover{color:<?php echo esc_attr( powerwp_get_option('footer_link_hover_color') ); ?>;}
    <?php } ?>

    <?php if ( powerwp_get_option('cp_bg_color') ) { ?>
    #powerwp-copyrights,#powerwp-credits{background:<?php echo esc_attr( powerwp_get_option('cp_bg_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('cp_bd_color') ) { ?>
    #powerwp-copyrights{border-top:1px solid <?php echo esc_attr( powerwp_get_option('cp_bd_color') ); ?>;}
    <?php } ?>
    <?php if ( powerwp_get_option('cp_color') ) { ?>
    #powerwp-copyrights,#powerwp-copyrights a,#powerwp-copyrights a:hover,#powerwp-credits,#powerwp-credits a,#powerwp-credits a:hover{color:<?php echo esc_attr( powerwp_get_option('cp_color') ); ?>;}
    <?php } ?>
    </style>
    <?php
}
add_action( 'wp_head', 'powerwp_customizer_css' );

// Header styles
if ( ! function_exists( 'powerwp_header_style' ) ) :
function powerwp_header_style() {
    $header_text_color = get_header_textcolor();
    if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) { return; }
    ?>
    <style type="text/css">
    <?php if ( ! display_header_text() ) : ?>
        .powerwp-site-title, .powerwp-site-description {position: absolute;clip: rect(1px, 1px, 1px, 1px);}
    <?php else : ?>
        .powerwp-site-title, .powerwp-site-title a, .powerwp-site-description {color: #<?php echo esc_attr( $header_text_color ); ?>;}
    <?php endif; ?>
    </style>
    <?php
}
endif;