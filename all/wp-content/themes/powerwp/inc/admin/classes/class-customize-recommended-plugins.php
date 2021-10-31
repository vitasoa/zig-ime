<?php
class PowerWP_Customize_Recommended_Plugins extends WP_Customize_Control {
    public $type = 'tdna-recommended-wpplugins';
    
    public function render_content() {
        $plugins = array(
        'wp-pagenavi' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=wp-pagenavi' ) ),
            'text'  => __( 'WP-PageNavi', 'powerwp' ),
            'desc'  => __( 'WP-PageNavi plugin helps to display numbered page navigation of this theme. Just install and activate the plugin.', 'powerwp' ),
            ),
        'regenerate-thumbnails' => array( 
            'link'  => esc_url( admin_url('plugin-install.php?tab=plugin-information&plugin=regenerate-thumbnails' ) ),
            'text'  => __( 'Regenerate Thumbnails', 'powerwp' ),
            'desc'  => __( 'Regenerate Thumbnails plugin helps you to regenerate your thumbnails to match with this theme. Install and activate the plugin. From the left hand navigation menu, click Tools &gt; Regen. Thumbnails. On the next screen, click Regenerate All Thumbnails.', 'powerwp' ),
            ),
        );
        foreach ( $plugins as $plugin) {
            echo '<p>'.esc_html($plugin['desc']).'</p>';
            echo '<p class="powerwp-recommended-wpplugins-box"><i class="fa fa-wordpress" aria-hidden="true"></i> <a class="powerwp-recommended-wpplugins-box-link" href="' . esc_url($plugin['link']) .'" target="_blank">' . esc_attr($plugin['text']) .' </a></p>';
        }
    }
}