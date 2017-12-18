<?php
/**
 * Footer sidebar at the bottom of the page
 *
 * @package Preferential
 * @since 1.0.0
 */


if ( ! is_active_sidebar( 'footer' ) ) {
	return;
}
?>

<div class="pref-footer-content">
	<?php dynamic_sidebar( 'footer' ); ?>
</div>