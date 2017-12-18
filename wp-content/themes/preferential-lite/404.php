<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Preferential
 */

get_header(); ?>

<div id="pref-main-section">
    <div class="container">
        <div class="row">    
			<div class="col-md-12">
            
       		  <div class="entry-content error-content">
				
                	<header class="page-header">
                        <h1 class="heading1"><?php _e( 'Page Not Found', 'preferential-lite' ); ?></h1>
                        <h2 class="heading2"><?php _e( 'Well this does not look good.<br />It appears this page is missing or was removed.', 'preferential-lite' ); ?></h2>						
					</header>
			
					<p><?php _e( 'If what you were looking for is not found, you may want to try searching with keywords relevant to what you were looking for.', 'preferential-lite' ); ?></p>
                 <div class="input-group-box">
                    <?php get_search_form(); ?>
                </div>
			    </div>
                                
			</div>
    	</div><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>