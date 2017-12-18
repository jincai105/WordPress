<?php
/**
 * Post Format Image
 * @package Preferential
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php //preferentiallite_post_thumbnail(); ?>

	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        
		<div class="entry-meta">
			<span class="post-format">
				<span class="icon-forward post-format-icon"></span><a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'image' ) ); ?>"><?php echo get_post_format_string( 'image' ); ?></a>
			</span>

			<?php preferentiallite_posted_on(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'preferential-lite' ), __( '1 Comment', 'preferential-lite' ), __( '% Comments', 'preferential-lite' ) ); ?></span>
			<?php endif; ?>

			
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( __( 'See More...', 'preferential-lite' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'preferential-lite' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->


<div class="article-separator"></div>