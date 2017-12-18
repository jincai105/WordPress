	<header class="entry-header">
    
    		<?php if ( is_sticky() ) : ?>
                <span class="featured-post sticky">
                    <?php _e( 'Featured', 'preferential-lite' ); ?>
                </span>
			<?php endif; ?>
            
		<h1 class="entry-title">           
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled', 'preferential-lite'); ?> </a>
        </h1>
        <?php if( get_theme_mod( 'hide_postmeta' ) == '') { ?>
		<?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                			 
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
		<?php endif; ?>
		<?php } ?>
	</header><!-- .entry-header -->

<div class="entry-content clearfix">
	<?php the_post_thumbnail(); ?>