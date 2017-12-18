<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Preferential
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Right Column', 'preferential-lite' ); ?></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum sem quis tellus cursus iaculis. Nullam mollis malesuada pharetra. Nullam blandit vulputate odio sed tincidunt. Phasellus et faucibus orci. Integer euismod et purus vitae ullamcorper.</p>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
