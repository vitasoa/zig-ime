<?php
/**
* Posts navigation functions
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'freshwp_wp_pagenavi' ) ) :
function freshwp_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;

if ( ! function_exists( 'freshwp_posts_navigation' ) ) :
function freshwp_posts_navigation() {
    if ( function_exists( 'wp_pagenavi' ) ) {
        freshwp_wp_pagenavi();
    } else {
        the_posts_navigation(array('prev_text' => __( '&larr; Older posts', 'freshwp' ), 'next_text' => __( 'Newer posts &rarr;', 'freshwp' )));
    }
}
endif;