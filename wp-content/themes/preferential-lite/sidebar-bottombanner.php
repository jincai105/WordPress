<?php
/**
 * Bottom Banner sidebar
 *
 * @package Preferential
 * @since 1.0.0
 */


if ( ! is_active_sidebar( 'bottombanner' ) ) {
	return;
}
?>

<aside id="pref-bottombanner" role="complementary">
    <div class="container">
        <div class="row">
           	<div class="col-md-12">
           		<?php dynamic_sidebar( 'bottombanner' ); ?>
        	</div>
        </div>
    </div>
</aside>