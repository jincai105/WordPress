<?php
/**
 * Loads the child theme textdomain.
 */
function optimal_child_theme_setup() {
    load_child_theme_textdomain( 'optimal');
}
add_action( 'after_setup_theme', 'optimal_child_theme_setup' );

function optimal_child_enqueue_styles() {
    $parent_style = 'optimal-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'optimal-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'optimal_child_enqueue_styles',99);

/**
 * Loads the child theme scripts
 */
function optimal_scripts() {  
    wp_enqueue_style( 'optimal-googlefonts', 'https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,800|Poppins:100,300,400,500,600,700,800');
}  
add_action('wp_enqueue_scripts', 'optimal_scripts');