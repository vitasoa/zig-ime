<?php
/**
* The file for displaying the search form
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<form role="search" method="get" class="freshwp-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'freshwp' ); ?></span>
    <input type="search" class="freshwp-search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'freshwp' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="freshwp-search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'freshwp' ); ?>" />
</form>