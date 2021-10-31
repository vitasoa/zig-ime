<form role="search" method="get" class="powerwp-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'powerwp' ); ?></span>
    <input type="search" class="powerwp-search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'powerwp' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="powerwp-search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'powerwp' ); ?>" />
</form>