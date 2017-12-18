<?php
/**
 * @package Preferential
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php 
        $featuredimage = get_theme_mod( 'featured_image', 'big' );
            switch ($featuredimage) {
                case "wide" :                
                    get_template_part( 'partials/blogfull' );               
            break;				
                case "big" :                
                    get_template_part( 'partials/blogbig' );               
            break;
        } 		
    ?>
        	
	<?php 
        $excon = get_theme_mod( 'excerpt_content', 'content' );
        $excerpt = get_theme_mod( 'excerpt_limit', '50' );
             switch ($excon) {
                case "content" :
                    the_content(__('Continue Reading...', 'preferential-lite'));
                break;
                case "excerpt" : 
                    echo '<p>' . preferentiallite_excerpt($excerpt) . '</p>' ;
                    echo '<p class="more-link"><a href="' . get_permalink() . '">' . __('Continue Reading...', 'preferential-lite') . '</a>' ;
                break;
        }
    ?>   
		
</div><!-- .entry-content -->

	<footer class="summary-entry-meta">
		<?php preferentiallite_multi_pages(); ?>
        <?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
		<?php edit_post_link( __( 'Edit', 'preferential-lite' ), '<span class="edit-link">', '</span>' ); ?>
        <?php } ?>
    </footer><!-- .entry-meta -->
    
</article><!-- #post-## -->

<div class="article-separator"></div>