<?php
/**
 * Right sidebar column.
 *
 * @package Preferential
 * @since 1.0.0 
 */


if (   ! is_active_sidebar( 'blogright'  )
	&& ! is_active_sidebar( 'pageright' ) 
	)
	return;

if ( is_page() ) {   
	
	dynamic_sidebar( 'pageright' );	

} else {
  
	dynamic_sidebar( 'blogright' );
	
}
?>