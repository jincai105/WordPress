<?php
/**
 * Post Format Quote
 * @package Preferential
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

<div class="entry-content">
  <div class="row">
  <?php if ( has_post_thumbnail()) : ?>
  <div class="col-md-3">
    <div class="testimonial-thumbnail">
      <?php the_post_thumbnail(); ?>
      </div>
     </div>
    <?php endif; ?>
    <?php if ( has_post_thumbnail()) : ?>
    <div class="col-md-9">
    <?php else : ?>
     <div class="col-md-12">
     <?php endif; ?>
      <header class="entry-header">
        <h1 class="entry-title"><span class="icon-quotes-left"></span><?php the_title(); ?></h1>
        </header>
      <?php the_content( __( 'Read Full Quote...', 'preferential-lite' ) ); ?>
      </div>
  
  </div>
</div><!-- .entry-content -->

</article><!-- #post-## -->

<div class="article-separator"></div>