<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Preferential
 */
?>

<div id="pref-bottom" style="background-color: <?php echo get_theme_mod( 'bottom_bg', '#5f8cb4' ); ?>; color:<?php echo get_theme_mod( 'bottom_text', '#ffffff' ); ?>;" role="complementary">   
    	<?php get_sidebar( 'bottom' ); ?>
</div>

<div id="pref-social" style="background-color: <?php echo get_theme_mod( 'social_bg', '#2c3946' ); ?>; border-color: <?php echo get_theme_mod( 'social_border', '#000000' ); ?>; color: <?php echo get_theme_mod( 'social_text', '#9BA2A7' ); ?>;">
	<?php get_template_part( 'partials/social-bar' ); ?>
</div>
 
 
</div><!-- #pref-outerbox -->

  <div id="pref-footer" style="color: <?php echo get_theme_mod( 'footer_text', '#696969' ); ?>;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
        
			<?php get_sidebar( 'footer' ); ?>
        
            <div id="pref-footer-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'fallback_cb' => false, 'depth' => 1,'container' => false, 'menu_id' => 'footer-menu' ) ); ?>
            </div>
        
            <div class="pref-copyright">
              <?php esc_attr_e('Copyright &copy;', 'preferential-lite'); ?> 
              <?php echo date_i18n( date('Y') ); ?> <?php echo get_theme_mod( 'copyright', 'Your Name' ); ?>.&nbsp;<?php esc_attr_e('All rights reserved.', 'preferential-lite'); ?>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  
</div><!-- #pref-top -->




  
<?php wp_footer(); ?>

</body>
</html>
