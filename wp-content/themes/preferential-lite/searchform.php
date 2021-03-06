<?php
/**
 * The template for displaying search forms in Preferential
 * @package Preferential
 * @since 1.0.0
 */
?>


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'preferential-lite' ); ?></span>
<div class="input-group">
      <input type="text" class="form-control" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
      <span class="input-group-btn">
        <button class="btn btn-grey" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'preferential-lite' ); ?>"><?php _e( 'Go!', 'preferential-lite' ); ?></button>
      </span>
    </div><!-- /input-group -->
</form>    