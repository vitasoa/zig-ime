<?php
/**
* FreshWP_Customize_Recommended_Plugins class
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

class FreshWP_Customize_Recommended_Plugins extends WP_Customize_Control {
    public $type = 'tdna-recommended-wpplugins';
    
    public function render_content() {
        $plugins = array(
        'wp-pagenavi' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=wp-pagenavi' ) ),
            'text'  => __( 'WP-PageNavi', 'freshwp' ),
            'desc'  => __( 'WP-PageNavi plugin helps to display numbered page navigation of this theme. Just install and activate the plugin.', 'freshwp' ),
            ),
        'regenerate-thumbnails' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=regenerate-thumbnails' ) ),
            'text'  => __( 'Regenerate Thumbnails', 'freshwp' ),
            'desc'  => __( 'Regenerate Thumbnails plugin helps you to regenerate your thumbnails to match with this theme. Install and activate the plugin. From the left hand navigation menu, click Tools &gt; Regen. Thumbnails. On the next screen, click Regenerate All Thumbnails.', 'freshwp' ),
            ),
        );
        foreach ( $plugins as $plugin) {
            echo '<p>'.esc_html($plugin['desc']).'</p>';
            echo '<p style="background:#fff;border:1px solid #ddd;color:#000;padding:10px;font-size:120%;font-style:normal;font-weight:bold;"><i class="fa fa-wordpress" aria-hidden="true"></i> <a style="margin-left:8px;font-weight:bold;color:#000" href="' . esc_url($plugin['link']) .'" target="_blank">' . esc_attr($plugin['text']) .' </a></p>';
        }
    }
}