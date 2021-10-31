<?php
/**
* Author bio box
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="freshwp-author-bio">
            <div class="freshwp-author-bio-top">
            <div class="freshwp-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </div>
            <div class="freshwp-author-bio-text">
                <h4>'.__( 'Author: ', 'freshwp' ).'<span>'. get_the_author_link() .'</span></h4>'. get_the_author_meta('description',get_query_var('author') ) .'
            </div>
            </div>
            </div>
        ';
    }
    return $content;
}