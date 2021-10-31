<?php
/**
* The file for displaying the sidebars.
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div class='freshwp-sidebar-one-wrapper' id='freshwp-sidebar-one-wrapper' itemscope='itemscope' itemtype='http://schema.org/WPSideBar' role='complementary'>
<div class='theiaStickySidebar'>
<div class='freshwp-sidebar-one-wrapper-inside clearfix'>
<div class='freshwp-sidebar-content' id='freshwp-left-sidebar'>
<?php dynamic_sidebar( 'freshwp-left-sidebar' ); ?>
</div>
</div>
</div>
</div>

<div class='freshwp-sidebar-two-wrapper' id='freshwp-sidebar-two-wrapper' itemscope='itemscope' itemtype='http://schema.org/WPSideBar' role='complementary'>
<div class='theiaStickySidebar'>
<div class='freshwp-sidebar-two-wrapper-inside clearfix'>
<div class='freshwp-sidebar-content' id='freshwp-right-sidebar'>
<?php dynamic_sidebar( 'freshwp-right-sidebar' ); ?>
</div>
</div>
</div>
</div>