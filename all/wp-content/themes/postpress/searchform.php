<?php
/**
 * Include the search form in the top nav bar, formatted with Bootstrap styles
 *
 * @package PostPress
 * @subpackage PostPress 1.0.9
 * @since PostPress 1.0.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
	  <label class="sr-only" for="s"><?php esc_html_e( 'Search for&hellip;', 'postpress' ) ?></label>
	  <input type="text" class="form-control" placeholder="<?php esc_attr_e( 'Search for&hellip;', 'postpress' ) ?>" name="s" id="s" value="<?php echo get_search_query(); ?>" >
	  <span class="input-group-btn">
		<button class="btn btn-secondary" type="button"><?php esc_html_e( 'Go!', 'postpress' ) ?></button>
	  </span>
	</div>
</form>