<?php
/**
 * Preferential functions and definitions
 *
 * @package Preferential
 */



if ( ! function_exists( 'preferentiallite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function preferentiallite_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Preferential, use a find and replace
	 * to change 'preferential-lite' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'preferential-lite', get_template_directory() . '/languages' );

	/**
	 * Add callback for custom TinyMCE editor stylesheets. (editor-style.css)
	 * @see http://codex.wordpress.org/Function_Reference/add_editor_style
	 */
	add_editor_style(get_stylesheet_uri());
    /**
	 * This feature enables title tag instead of wp_title() . 
	 * @see https://codex.wordpress.org/Title_Tag
	 */
	add_theme_support( 'title-tag' );
	/**
	 * This feature enables woocommerce support for a theme.
	 * @see http://www.woothemes.com/2013/02/last-call-for-testing-woocommerce-2-0-coming-march-4th/
	 */
	add_theme_support( 'woocommerce' );

	/**
	 * This feature enables post and comment RSS feed links to head.
	 * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * This feature enables post-thumbnail support for a theme.
	 * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */

    global $content_width;
    if ( ! isset( $content_width ) ){
        $content_width = 1140;
    }


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'preferential-lite' ),
		'footer' => __( 'Footer Menu', 'preferential-lite' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'preferentiallite_custom_background_args', array(
		'default-color' => 'DADDDF',
		'default-image' => get_template_directory_uri() . '/images/pagebg.png',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // preferentiallite_setup
add_action( 'after_setup_theme', 'preferentiallite_setup' );

/**
 * Enqueue scripts and styles.
 */
function preferentiallite_scripts() {
	
	wp_enqueue_style( 'preferentiallite-bootstrap', get_template_directory_uri() . '/bootstrap.css', array( ), '3.1.1' );
	wp_enqueue_style( 'preferentiallite-menu', get_template_directory_uri() . '/menu.css', array( ), '1.0.0' );
	wp_enqueue_style( 'preferentiallite-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'preferentiallite-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1', true );
	
	wp_enqueue_script( 'preferentiallite-extras', get_template_directory_uri() . '/js/preferential-extras.js', array( 'jquery' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'preferentiallite_scripts' );


/**
 * Adds customizable styles to your <head>
 */
	function preferentiallite_theme_customize_css()
	{
	?>
	<style type="text/css">
		a, a:visited {color: <?php echo get_theme_mod( 'link_colour', '#3199e3' ); ?>;}
		a:hover {color: <?php echo get_theme_mod( 'link_colourhover', '#e4a92c' ); ?>;}
		h1,h2,h3,h4,h5,.entry-title a {color: <?php echo get_theme_mod( 'heading_colour', '#222222' ); ?>;}
		
		.widget.menu li {border-color: <?php echo get_theme_mod( 'widgetx_listborder', '#dadada' ); ?>;}
		#pref-bottom a {color: <?php echo get_theme_mod( 'bottom_links', '#d0e9f9' ); ?>;}
		#pref-bottom a:hover {color: <?php echo get_theme_mod( 'bottom_linkshover', '#f3e2bd' ); ?>;}	
		#pref-bottom .widget.listlines li {border-color: <?php echo get_theme_mod( 'bottom_listborder', '#8baecd' ); ?>;}
			
		#pref-social a {color: <?php echo get_theme_mod( 'social_textlink', '#cbcdcf' ); ?>;}
		#pref-social a:hover {color: <?php echo get_theme_mod( 'social_text', '#9BA2A7' ); ?>;}
		
		#pref-cta a {color:<?php echo get_theme_mod( 'cta_link', '#ffffff' ); ?>;}
		#pref-cta a:hover {color: <?php echo get_theme_mod( 'cta_text', '#ebedcf' ); ?>;}
		.menu-toggle {background-color: <?php echo get_theme_mod( 'mobile_btn', '#595a67' ); ?>;color: <?php echo get_theme_mod( 'mobile_btntext', '#ffffff' ); ?>;}
		.menu-toggle:active, .menu-toggle:focus, .menu-toggle:hover {background-color: <?php echo get_theme_mod( 'mobile_btnhover', '#cde4ec' ); ?>;
		color: <?php echo get_theme_mod( 'mobile_btntexthover', '#5c8290' ); ?>;}		
		.site-navigation ul.nav-menu {background-color: <?php echo get_theme_mod( 'toggled_menubg', '#cde4ec' ); ?>;
border-color: <?php echo get_theme_mod( 'toggled_borders', '#b5ced7' ); ?>;}
		.site-navigation li {border-top-color: <?php echo get_theme_mod( 'toggled_linkdividers', '#b4c9d0' ); ?>;}
		.site-navigation a {color: <?php echo get_theme_mod( 'mobile_link', '#595a67' ); ?>;}
		.site-navigation a:hover,.site-navigation .current-menu-item > a {color: <?php echo get_theme_mod( 'mobile_active', '#ffffff' ); ?>; 
		background-color: <?php echo get_theme_mod( 'mobile_activebg', '#6ea2cf' ); ?>;}
		#social-icons a {color: <?php echo get_theme_mod( 'social_colour', '#9ba2a7' ); ?>;}
		#social-icons a:hover {color: <?php echo get_theme_mod( 'social_hover', '#ffffff' ); ?>;}
		#socialbar .genericon, #socialbar .icomoon {background-color: <?php echo get_theme_mod( 'social_bg', '#e2e5e7' ); ?>;}
		figcaption.wp-caption-text {background-color: <?php echo get_theme_mod( 'imgcaptionbg', '#e8e8e8' ); ?>;
		color:<?php echo get_theme_mod( 'captiontext', '#333' ); ?>}	
		#pref-footer a {color: <?php echo get_theme_mod( 'footer_links', '#b99116' ); ?>;}
		#pref-footer a:hover {color: <?php echo get_theme_mod( 'footer_text', '#696969' ); ?>;}
					
		#pref-bottom h3 {color: <?php echo get_theme_mod( 'bottom_text', '#ffffff' ); ?>;}
		
	@media screen and (min-width: 783px) {
		.primary-navigation li a, .primary-navigation li.current-menu-item.home a {color: <?php echo get_theme_mod( 'menu_link', '#ffffff' ); ?>;}
		.primary-navigation ul.nav-menu {background-color: transparent;}
		.site-navigation li.current_page_item > a,
		.site-navigation li.current_page_ancestor > a,
		.site-navigation li.current-menu-item > a,
		.site-navigation li.current-menu-ancestor > a,
		.primary-navigation li a:hover, .primary-navigation li.current-menu-item.home a:hover  {color: <?php echo get_theme_mod( 'menu_active', '#ffdd80' ); ?>;}		
		.site-navigation li li.current_page_item > a,
		.site-navigation li li.current_page_ancestor > a,
		.site-navigation li li.current-menu-item > a,
		.site-navigation li li.current-menu-ancestor > a,	
		.primary-navigation li li:hover > a,
		.primary-navigation li li.focus > a,
		.primary-navigation ul ul a:hover,
		.primary-navigation ul ul li.focus > a {background-color: <?php echo get_theme_mod( 'submenu_activebg', '#6ea2cf' ); ?>;
			color: <?php echo get_theme_mod( 'submenu_activelink', '#ffffff' ); ?>;	}
		.primary-navigation ul ul {background-color: <?php echo get_theme_mod( 'submenu_bg', '#cde4ec' ); ?>;}				
	}
		
	</style>
	<?php
	}
	add_action( 'wp_head', 'preferentiallite_theme_customize_css');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load theme widgets.
 */
	require get_template_directory() . '/inc/widgets.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

