<?php
/**
 * Post Format gallery
 * @package Preferential
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<header class="entry-header">
		<h1 class="entry-title"><?php edit_post_link( __( 'Edit', 'preferential-lite' ), '<span class="edit-link">', '</span>' ); ?><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<span class="post-format">
				<span class="icon-forward post-format-icon"></span><a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'gallery' ) ); ?>"><?php echo get_post_format_string( 'gallery' ); ?></a>
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

<div class="divider divider-space"></div>