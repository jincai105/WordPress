<?php
/**
 *
   Template Name: Page Left &amp; Right Column
 *
 * Description: A page template with equal width columns (left, content, right)
 * @package Preferential
 * @since 1.0.0
 */

get_header(); ?>


<div id="pref-main-section">
	<div role="main">
    
    <?php get_sidebar( 'top' ); ?>
    
        <div class="container">     
            <div class="row">
            
        	<div class="col-md-3">
                <aside id="pref-left" role="complementary">
                    <?php get_sidebar( 'left' ); ?>
                </aside>
            </div>    
			<div class="col-md-6">
            
				<?php while ( have_posts() ) : the_post(); ?>
        
                    <?php get_template_part( 'content', 'page' ); ?>
        
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
        
                <?php endwhile; // end of the loop. ?>
                
			</div> 
        	<div class="col-md-3">
                <aside id="pref-right" role="complementary">
                    <?php get_sidebar( 'right' ); ?>
                </aside>
            </div>                  
    	</div><!-- .row -->
	</div><!-- .container -->
        
    <?php get_sidebar( 'bottombanner' ); ?>
    
</div>
</div>



<?php get_footer(); ?>