<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PowerWP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="powerwp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- <div class='powerwp-body-cover'></div> -->
<div class='powerwp-wrapper'>

<div class='powerwp-container'>
<div class="powerwp-container" id="powerwp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="clearfix" id="powerwp-head-content">

<?php if ( get_header_image() ) : ?>
<div class="powerwp-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="powerwp-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="powerwp-header-img"/>
</a>
</div>
<?php endif; ?>

<div class="powerwp-header-inside clearfix">
<div id="powerwp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="powerwp-logo-image-link">
        <img src="<?php echo esc_url( powerwp_custom_logo() ); ?>" alt="" class="powerwp-logo-image"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="powerwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="powerwp-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div><!--/#powerwp-logo -->

<div id="powerwp-header-banner">
<?php dynamic_sidebar( 'powerwp-header-banner' ); ?>
</div><!--/#powerwp-header-banner -->
</div>

</div><!--/#powerwp-head-content -->
</div><!--/#powerwp-header -->
</div>


<div class='powerwp-container'>
<nav class="powerwp-nav-primary" id="powerwp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-primary-navigation', 'menu_class' => 'menu powerwp-nav-menu menu-primary', 'fallback_cb' => 'powerwp_fallback_menu', ) ); ?>
</nav>
</div>