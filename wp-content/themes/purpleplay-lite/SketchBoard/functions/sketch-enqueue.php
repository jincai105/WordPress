<?php

/************************************************
*
*  enquque css and javascript
*
************************************************/

//enqueue admin jquery 
function purpleplay_lite_backscript_enqueqe() {
	if( is_admin() ) {
		wp_enqueue_style('purpleplay-lite-admin-style',get_template_directory_uri().'/SketchBoard/functions/css/sketch.admin.css');
	}
}
add_action('init', 'purpleplay_lite_backscript_enqueqe');


//enqueue admin css
function purpleplay_lite_theme_stylesheet(){

	global $wp_version;

	$skt_version = NULL;
	$theme = wp_get_theme();
	$skt_version = $theme['Version'];
	
	wp_enqueue_script( 'comment-reply' );

	wp_enqueue_style( 'purpleplay-lite-reset', get_template_directory_uri().'/css/reset.css', false, $skt_version );
	wp_enqueue_style( 'purpleplay-lite-typography', get_template_directory_uri().'/css/typography.css', false, $skt_version );
	wp_enqueue_style( 'purpleplay-lite-style', get_stylesheet_uri(), false, $skt_version );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', false, $skt_version );

	wp_enqueue_script('hoverIntent');
	wp_enqueue_script('superfish',get_template_directory_uri().'/js/superfish.js',array('jquery'),'1.0' );
	wp_enqueue_script('skt_custom_slide',get_template_directory_uri().'/js/custom.js',array('jquery'),'1.0' );

	wp_enqueue_style( 'superfish', get_template_directory_uri().'/css/superfish.css', false, $theme->Version);
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', false, $theme->Version);
	wp_enqueue_style( 'google-font-open-sans','//fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic', false, $theme->Version);

}

add_action('wp_enqueue_scripts', 'purpleplay_lite_theme_stylesheet');

function purpleplay_lite_head_stylesheet(){
	if(!is_admin()) {
		require_once(get_template_directory().'/includes/purple-play-custom-css.php');
	}
}
add_action('wp_head', 'purpleplay_lite_head_stylesheet');