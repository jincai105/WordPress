<?php
/**
 * Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package Preferential Lite
 */

function preferentiallite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'preferentiallite_custom_header_args', array(
		'random-default'         => false,
		'flex-width'    		 => true,
		'width'                  => 2560,
		'flex-height'            => true,
		'height'                 => 450,	
		'uploads'       		 => true,
		'header-text'            => false,
		'admin-preview-callback' => 'preferentiallite_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'preferentiallite_custom_header_setup' );

if ( ! function_exists( 'preferentiallite_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see preferentiallite_custom_header_setup().
 */
function preferentiallite_admin_header_image() {
	
?>
	<div id="headimg">
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="...">
		<?php endif; ?>
	</div>
<?php
}
endif; // preferentiallite_admin_header_image
