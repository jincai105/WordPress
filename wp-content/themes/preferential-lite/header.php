<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Preferential
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="color:<?php echo get_theme_mod( 'main_txt', '#666666' ); ?>;">
<div id="pref-top" style="height:<?php echo get_theme_mod( 'top_height', '435' ); ?>px; border-bottom-color: <?php echo get_theme_mod( 'top_bottomborder', '#a2a2a2' ); ?>; background-color: <?php echo get_theme_mod( 'top_bg', '#ffffff' ); ?>; <?php if ( get_header_image() ) : ?>background-image: url(<?php header_image(); ?>);<?php endif; ?>;">

<div id="pref-announcement" style="background-color: <?php echo get_theme_mod( 'announcement_bg', '#595a67' ); ?>;">
	
</div>

<?php get_template_part( 'partials/logo-group' ); ?>  	
  
	<?php $pagewidth = get_theme_mod( 'page_width', 'box1400' );
	 switch ($pagewidth) {
		case "box1400" : 
			echo '<div id="pref-outerbox" style="max-width: 1400px; background-color:';
			echo get_theme_mod( 'content_bg', '#ffffff' ) . ';">';
		 break;
		case "box1200" : 
			echo '<div id="pref-outerbox" style="max-width: 1200px; background-color:';
			echo get_theme_mod( 'content_bg', '#ffffff' ) . ';">';
		break;			
		} 
	?> 
    
      <div id="pref-navbox" style="background-color: <?php echo get_theme_mod( 'menu_bg', '#6ea2cf' ); ?>;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            
<div id="navbar" class="navbar">
				<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Menu', 'preferential-lite' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'preferential-lite' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
			</div><!-- #navbar -->
                
            </div>
          </div>
        </div>
</div>
    
    
  
<?php get_sidebar( 'banner' ); ?> 
<?php get_sidebar( 'cta' ); ?>    
<div id="pref-banner-shadow"><img class="img-responsive" src="<?php echo get_template_directory_uri() ; ?>/images/banner-shadow.png" alt="shadow"/></div>   
    
    
<div id="pref-breadcrumbs" style="color:<?php echo get_theme_mod( 'breadcrumbs_text', '#9ca4a9' ); ?>;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <?php 
	  	if(! is_front_page() && !is_attachment() //&& !is_bbpress()
		) : 
	  		if(function_exists('bcn_display')) {
			bcn_display();
			}
		 endif; 
		?>
    </div>
    </div>
  </div>
</div>

