<?php
/**
 * Call to Action Sidebar
 *
 * @package Preferential
 * @since 1.0.0
 */


if ( ! is_active_sidebar( 'cta' ) ) {
	return;
}
?>

<aside id="pref-cta" style="background-color: <?php echo get_theme_mod( 'cta_bg', '#9eb25b' ); ?>; color: <?php echo get_theme_mod( 'cta_text', '#ebedcf' ); ?>; border-color: <?php echo get_theme_mod( 'cta_border', '#cbd5a6' ); ?>;" role="complementary">
    <div class="container">
        <div class="row">
           	<div class="col-md-12">
           		<?php dynamic_sidebar( 'cta' ); ?>
        	</div>
        </div>
    </div>
</aside>