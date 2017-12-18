<?php
/**
 * Post Format video
 * @package Preferential
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
    <?php 
		if ( has_post_thumbnail()) :
			echo '<div class="video-thumbnail">';
				the_post_thumbnail();
			echo '</div>';
		endif; 
	?>
   
   <div class="entry-content"> 
        <header>
        <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled', 'preferential-lite'); ?> </a>
        </h1>  
      <div class="entry-meta">
      <span class="post-format">
				<span class="icon-forward post-format-icon"></span><a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'video' ) ); ?>"><?php echo get_post_format_string( 'video' ); ?></a>
			</span>
                <?php preferentiallite_posted_on(); ?>            
                <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                <span class="comments-link">
                    <?php 
                        echo '<span class="entry-comments">';
                        _e( 'Comments: ', 'preferential-lite' );
                        comments_popup_link( __( 'Leave a comment', 'preferential-lite' ), __( '1 Comment', 'preferential-lite' ), __( '% Comments', 'preferential-lite' ) ); 
                    endif; ?> 
                    </span>
                </span>       
            </div><!-- .entry-meta -->      
	</header>
		<?php the_content(__('See More...', 'preferential-lite')); ?>
       
	</div><!-- .entry-content -->
    
	<footer class="entry-meta"> 
		<?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
            <?php edit_post_link( __( 'Edit', 'preferential-lite' ), '<span class="edit-link">', '</span>' ); ?>
        <?php } ?>
    </footer>
    
</article><!-- #post-## -->

<div class="article-separator"></div>