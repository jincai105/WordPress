<?php
/**
 * Sidebar for the banner area
 *
 * @package Preferential
 * @since 1.0.0
 */

if(! is_active_sidebar( 'banner' ) && is_front_page() && (get_theme_mod ( 'hide_default_banner' ) == '' ) ) { ?>
	<div id="pref-banner" style="border-color: <?php echo get_theme_mod( 'banner_border', '#cde4ec' ); ?>; padding:<?php echo get_theme_mod( 'banner_pad', '0 0 0 0' ); ?>">
	    <div class="textwidget">
	        <img src="<?php echo get_template_directory_uri().'/images/prefential-banner.jpg'; ?>" alt="preferential-lite">
	    </div>
    </div>  <?php   
} elseif (is_front_page() && ( get_theme_mod ( 'show_banner_on_pages' ) == '') ) { ?>
    <div id="pref-banner" style="border-color: <?php echo get_theme_mod( 'banner_border', '#cde4ec' ); ?>; padding:<?php echo get_theme_mod( 'banner_pad', '0 0 0 0' ); ?>">
        <?php   dynamic_sidebar( 'banner' ); 
    echo '</div>';
} elseif (  get_theme_mod( 'show_banner_on_pages' ) != '' ) { ?>
	<div id="pref-banner" style="border-color: <?php echo get_theme_mod( 'banner_border', '#cde4ec' ); ?>; padding:<?php echo get_theme_mod( 'banner_pad', '0 0 0 0' ); ?>">
        <?php   dynamic_sidebar( 'banner' ); 
    echo '</div>';

} else {
	return false;
}

