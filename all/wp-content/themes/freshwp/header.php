<?php
/**
* The header for FreshWP theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="freshwp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div class='freshwp-wrapper'>

<div class='freshwp-header-outer-container'>
<div class='freshwp-container'>
<div class="freshwp-header-container" id="freshwp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="clearfix" id="freshwp-head-content">

<?php if ( get_header_image() ) : ?>
<div class="freshwp-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="freshwp-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="freshwp-header-img"/>
</a>
</div>
<?php endif; ?>

<?php if ( !(freshwp_get_option('hide_header_content')) ) { ?>
<div class="freshwp-header-inside clearfix">
<div id="freshwp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="freshwp-logo-image-link">
        <img src="<?php echo esc_url( freshwp_custom_logo() ); ?>" alt="" class="freshwp-logo-image"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="freshwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="freshwp-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div><!--/#freshwp-logo -->

<div id="freshwp-header-banner">
<?php dynamic_sidebar( 'freshwp-header-banner' ); ?>
</div><!--/#freshwp-header-banner -->
</div>
<?php } ?>

</div><!--/#freshwp-head-content -->
</div><!--/#freshwp-header -->
</div>
</div>


<div class='freshwp-menu-outer-container'>
<div class='freshwp-container'>
<nav class="freshwp-nav-primary" id="freshwp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-primary-navigation', 'menu_class' => 'menu freshwp-nav-menu menu-primary', 'fallback_cb' => 'freshwp_fallback_menu', ) ); ?>
</nav>
</div>
</div>