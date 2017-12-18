<?php
/**
 *
   Template Name: Page Full Width
 *
 * Description: A page template without the left or right columns
 * @package Preferential
 * @since 1.0.0
 */

get_header(); ?>


<div id="pref-main-section">
	<div role="main">
    
    <?php get_sidebar( 'top' ); ?>
        
        <div class="container">     
            <div class="row">
                
			<div class="col-md-12">
            
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

    	</div><!-- #main -->
	</div><!-- #primary -->    
    
    <?php get_sidebar( 'bottombanner' ); ?>
    
	</div>
</div>

<?php
get_footer();