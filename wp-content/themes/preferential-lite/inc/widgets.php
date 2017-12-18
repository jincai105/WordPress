<?php 

/**
 * Theme Widget positions
 * @package Preferential
 * @since 1.0.0
 */

 
/**
 * Registers our main widget area and the front page widget areas.
 */
 
function preferentiallite_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Blog Right Sidebar', 'preferential-lite' ),
		'id' => 'blogright',
		'description' => __( 'This is the right sidebar column that appears on the blog but not the pages.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Blog Left Sidebar', 'preferential-lite' ),
		'id' => 'blogleft',
		'description' => __( 'This is the left sidebar column that appears on the blog but not the pages.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Page Right Sidebar', 'preferential-lite' ),
		'id' => 'pageright',
		'description' => __( 'This is the right sidebar column that appears on pages, but not part of the blog', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Left Sidebar', 'preferential-lite' ),
		'id' => 'pageleft',
		'description' => __( 'This is the left sidebar column that appears on pages, but not part of the blog', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Banner', 'preferential-lite' ),
		'id' => 'banner',
		'description' => __( 'This is a full width showcase banner for images or media sliders that can display on your pages.', 'preferential-lite' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );		
	register_sidebar( array(
		'name' => __( 'Top 1', 'preferential-lite' ),
		'id' => 'top1',
		'description' => __( 'This is the 1st top widget position located just below the banner area.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Top 2', 'preferential-lite' ),
		'id' => 'top2',
		'description' => __( 'This is the 2nd top widget position located just below the banner area.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Top 3', 'preferential-lite' ),
		'id' => 'top3',
		'description' => __( 'This is the 3rd top widget position located just below the banner area.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Top 4', 'preferential-lite' ),
		'id' => 'top4',
		'description' => __( 'This is the 4th top widget position located just below the banner area.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Bottom 1', 'preferential-lite' ),
		'id' => 'bottom1',
		'description' => __( 'This is the first bottom widget position located in a coloured background area just above the footer.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 2', 'preferential-lite' ),
		'id' => 'bottom2',
		'description' => __( 'This is the second bottom widget position located in a coloured background area just above the footer.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 3', 'preferential-lite' ),
		'id' => 'bottom3',
		'description' => __( 'This is the third bottom widget position located in a coloured background area just above the footer.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 4', 'preferential-lite' ),
		'id' => 'bottom4',
		'description' => __( 'This is the fourth bottom widget position located in a coloured background area just above the footer.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Call to Action', 'preferential-lite' ),
		'id' => 'cta',
		'description' => __( 'This is a call to action which is normally used to make a message stand out just above the main content.', 'preferential-lite' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	register_sidebar( array(
		'name' => __( 'Bottom Banner', 'preferential-lite' ),
		'id' => 'bottombanner',
		'description' => __( 'This is a a full width widget position below the main content and above the Bottom widgets', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widgetinner">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="barouter"><div class="barinner"></div></div>',
	) );		
	register_sidebar( array(
		'name' => __( 'Footer', 'preferential-lite' ),
		'id' => 'footer',
		'description' => __( 'This is a footer widget position at the very bottom of the page and outside the content container.', 'preferential-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-heading">',
		'after_title' => '</h4>',
	) );	

}
add_action( 'widgets_init', 'preferentiallite_widgets_init' );

/**
 * Count the number of widgets to enable resizable widgets
 */

// lets setup the inset top group 
function preferentiallite_topgroup() {
	$count = 0;
	if ( is_active_sidebar( 'top1' ) )
		$count++;
	if ( is_active_sidebar( 'top2' ) )
		$count++;
	if ( is_active_sidebar( 'top3' ) )
		$count++;		
	if ( is_active_sidebar( 'top4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-md-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-4 col-md-4';
			break;
		case '4':
			$class = 'col-xs-12 col-sm-6 col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

// lets setup the bottom group 
function preferentiallite_bottomgroup() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-md-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-4 col-md-4';
			break;
		case '4':
			$class = 'col-xs-12 col-sm-6 col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}