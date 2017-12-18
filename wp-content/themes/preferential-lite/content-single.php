<?php
/**
 * @package Preferential
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if( get_theme_mod( 'hide_postmeta' ) == '') { ?>
        <div class="entry-meta">			 
                <?php preferentiallite_posted_on(); ?>            
		</div><!-- .entry-meta -->
        <?php } ?>
	</header><!-- .entry-header -->
<div class="entry-content clearfix">

<?php if( get_theme_mod( 'hide_featured' ) == '') { ?>
		<?php // do not show featured image if post is paged
    	$paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : false;
       	if ( $paged === false ):        
        	the_post_thumbnail();     
    	endif; ?>
<?php } ?>
	
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

	<footer class="entry-meta">
    
    <?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
		<?php edit_post_link( __( 'Edit This Post', 'preferential-lite' ), '<div class="edit-link">', '</div>' ); ?>
        <?php } ?>
        	
    <?php if( get_theme_mod( 'hide_postinfo' ) == '') { ?>	
			<?php the_tags(__('<span class="meta-tagged">Tagged with:<span class="entry-meta-value">', 'preferential-lite') . ' ', ', ', '</span></span><br />'); ?> 
			<?php printf(__('<span class="meta-posted">Posted in:<span class="entry-meta-value"> %s', 'preferential-lite'), get_the_category_list(', ')); ?></span></span> <br />
            <?php printf( __( '<span class="meta-author">Articles by: %s', 'preferential-lite' ), '<span class="vcard entry-meta-value"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span></span>' ); ?><br />
            <span class="meta-date"><?php _e('Published: ', 'preferential-lite');?> <span class="entry-meta-value"><?php the_time(get_option('date_format')); ?></span></span>    <?php } ?>
			<?php preferentiallite_multi_pages(); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
