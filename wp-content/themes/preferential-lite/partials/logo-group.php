<?php

/**
 * The logo group for the header
 * @package Preferential
 * @since 1.0.0
 */
?>


<div class="container">
  <div class="row">
    <div class="col-md-12">

<?php 
	$logostyle = get_theme_mod( 'logo_style', 'text' );
	 switch ($logostyle) {
		case "custom" : // your own logo ?>
			<div id="pref-logo" style="margin: <?php echo get_theme_mod( 'logomargin', '30px 0 30px 0' ); ?>;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php echo get_option( 'my_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                </a>
			</div>
            			 
		<?php break;
		case "logotext" : // your own logo with text based title and site description ?>
        
            <div id="pref-logo" style="margin: <?php echo get_theme_mod( 'logomargin', '30px 0 30px 0' ); ?>;" >
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img src="<?php echo get_option( 'my_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?> "/>
              </a>           
                <h1 id="pref-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                    rel="home" style="color: <?php echo get_theme_mod( 'sitetitle', '#565656' ); ?>;"><?php bloginfo('name'); ?></a></h1>
                <h2 id="pref-site-tagline" style="color: <?php echo get_theme_mod( 'tagline', '#378B92' ); ?>;"><?php bloginfo('description'); ?></h2>
            </div>
            			
		<?php break;
		case "text" : // text based title and site description ?>
           <div id="pref-logo" style="margin: <?php echo get_theme_mod( 'logomargin', '30px 0 30px 0' ); ?>;" >
            <h1 id="pref-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                rel="home" style="color: <?php echo get_theme_mod( 'sitetitle', '#565656' ); ?>;"><?php bloginfo('name'); ?></a></h1>
			<h2 id="pref-site-tagline" style="color: <?php echo get_theme_mod( 'tagline', '#378B92' ); ?>;"><?php bloginfo('description'); ?></h2>
          </div> 		
		<?php break;
	} 
?>


	</div>
  </div>
</div>
