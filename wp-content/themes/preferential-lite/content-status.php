<?php
/**
 * Post Format Status
 * @package Preferential
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
<div class="col-md-2">
<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'preferentiallite_status_avatar', '100' ) ); ?>
</div>
<div class="col-md-10">

<header class="entry-header">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <?php preferentiallite_posted_on(); ?>            
        </div><!-- .entry-meta --> 
   <?php endif; ?>      
</header>




	<div class="entry-content">
		<?php the_content( __( 'Read Full Status', 'preferential-lite' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'preferential-lite' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
    
		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
        <?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
		<?php edit_post_link( __( 'Edit', 'preferential-lite' ), '<span class="edit-link">', '</span>' ); ?>
        <?php } ?>
	</footer><!-- .entry-meta -->

</div>

</div>

</article><!-- #post -->