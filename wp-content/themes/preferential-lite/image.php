<?php
/**
 * The template for displaying image attachments
 * @package Preferential
 * @since 1.0.0
 */

// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();

get_header();
?>

<section id="cir-content-area" role="main">
    <div class="container">
        <div class="row">    
			<div class="col-md-12">

	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
	?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="entry-meta"></div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="entry-attachment">
						<div class="attachment">
							<?php preferentiallite_the_attached_image(); ?>
						</div><!-- .attachment -->

						<?php if ( has_excerpt() ) : ?>
						<div class="entry-caption">
							<?php the_excerpt(); ?>
						</div><!-- .entry-caption -->
						<?php endif; ?>
					</div><!-- .entry-attachment -->

					<?php
						the_content();
						
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'preferential-lite' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<nav id="image-navigation" class="navigation image-navigation">
				<div class="image-nav-links">
				<?php preferentiallite_attachment_nav(); ?>
		</div><!-- .nav-links -->
			</nav><!-- #image-navigation -->

			<?php //comments_template(); ?>

		<?php endwhile; // end of the loop. ?>
        
			</div>
		</div>
	</div><!-- #content -->
</section><!-- #primary -->

<?php
get_footer();
