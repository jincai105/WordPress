<?php
/**
 * Post Format Aside
 * @package Preferential
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



<div class="row">

	<?php if ( has_post_thumbnail()) : ?>
        <div class="col-md-3">  
           <div class="post-thumbnail">
               <?php the_post_thumbnail(); ?>
           </div>      
        </div>
        <div class="col-md-9">
    <?php else : ?>
        <div class="col-md-12">
    <?php endif; ?>
    
	<?php if ( is_single() ) : 
		the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header>' ); 
		endif;	?>
        
       
    <div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'preferential-lite' ) ); ?>
	</div>
    
        
    <footer>
    <div class="entry-meta">
      <?php preferentiallite_posted_on(); ?>
    </div>
    <?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
		<?php edit_post_link( __( 'Edit', 'preferential-lite' ), '<span class="edit-link">', '</span>' ); ?>
    <?php } ?>
    <img class="img-responsive" src="<?php echo get_template_directory_uri() ; ?>/images/post-shadow.png" alt="shadow"/>  	  
    </footer>       
    
  </div>
</div>
			
	
</article>

<div class="article-separator"></div>