<?php
/**
* FreshWP_Customize_Static_Text_Control class
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

class FreshWP_Customize_Static_Text_Control extends WP_Customize_Control {
    public $type = 'freshwp-static-text';

    public function __construct( $manager, $id, $args = array() ) {
        parent::__construct( $manager, $id, $args );
    }

    protected function render_content() {
        if ( ! empty( $this->label ) ) :
            ?><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><?php
        endif;

        if ( ! empty( $this->description ) ) :
            ?><div class="description customize-control-description"><?php

        echo wp_kses_post( $this->description );

            ?></div><?php
        endif;

    }
}