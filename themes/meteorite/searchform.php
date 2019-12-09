<?php
/**
 * The template for displaying the search form using get_search_form() 
 *
 * @package Meteorite
 */
?>

<form role="search" class="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-table">
		<div class="search-field">
			<input type="text" value="" name="s" class="s" placeholder="<?php _e( 'Search ...', 'meteorite' ); ?>" />
		</div>
		<div class="search-button">
			<button type="submit" class="searchsubmit"><i class="fa fa-search"></i></button>
		</div>
	</div>
</form>
