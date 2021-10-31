<?php
if ( ! function_exists( 'powerwp_wp_pagenavi' ) ) :
function powerwp_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;

if ( ! function_exists( 'powerwp_posts_navigation' ) ) :
function powerwp_posts_navigation() {
    if ( function_exists( 'wp_pagenavi' ) ) {
        powerwp_wp_pagenavi();
    } else {
        the_posts_navigation(array('prev_text' => __( '&larr; Older posts', 'powerwp' ), 'next_text' => __( 'Newer posts &rarr;', 'powerwp' )));
    }
}
endif;