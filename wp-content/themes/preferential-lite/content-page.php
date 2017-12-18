<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Preferential
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( get_theme_mod('hide_title') != 1 ) { ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
	<?php } ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'preferential-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="summary-entry-meta">
        <?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
			<?php edit_post_link( __( 'Edit', 'preferential-lite' ), '<span class="edit-link">', '</span>' ); ?>
        <?php } ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
