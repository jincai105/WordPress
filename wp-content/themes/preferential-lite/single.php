<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Preferential
 */

get_header(); ?>

<div id="pref-main-section">
<div role="main">

<?php $bloglayout = get_theme_mod( 'blog_layout', 'blogright' );

	switch ($bloglayout) {
		// Right Column
		case "blogright" :
			echo '<div class="container"><div class="row"><div class="col-md-9"><div id="pref-content" role="main">';
			// get the full post
				while ( have_posts() ) : the_post(); 
					get_template_part( 'content', 'single' ); 
					if( get_theme_mod( 'hide_postnav' ) == '') { 
						preferentiallite_post_nav();
					}
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			echo '</div></div><div class="col-md-3"><aside id="pref-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';
		break;
		
		
		// Left Column
		case "blogleft" :
			echo '<div class="container"><div class="row"><div class="col-md-3"><aside id="pref-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';										
			echo '<div class="col-md-9"><div id="pref-content" role="main">';
			// get the full post
				while ( have_posts() ) : the_post(); 
					get_template_part( 'content', 'single' );
					if( get_theme_mod( 'hide_postnav' ) == '') { 
						preferentiallite_post_nav();
					}							
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			echo '</div></div></div></div>';
		break;		
		
		
		// Left and Right Column
		case "blogleftright" :
			echo '<div class="container"><div class="row"><div class="col-md-3"><aside id="pref-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';										
			echo '<div class="col-md-6"><div id="pref-content" role="main">';
			// get the full post
				while ( have_posts() ) : the_post(); 
					get_template_part( 'content', 'single' ); 
					if( get_theme_mod( 'hide_postnav' ) == '') { 
						preferentiallite_post_nav();
					}							
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			echo '</div></div><div class="col-md-3"><aside id="pref-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';	
		break;	
		
		// Wide Column
		case "blogfull" :									
			echo '<div class="container"><div class="row"><div class="col-md-12"><div id="pref-content" role="main">';
			// get the full post
				while ( have_posts() ) : the_post(); 
					get_template_part( 'content', 'single' ); 
					if( get_theme_mod( 'hide_postnav' ) == '') { 
						preferentiallite_post_nav();
					}							
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			echo '</div></div></div></div>';
		break;			
		
	}
?>
	
</div>
</div><!-- #primary -->

<?php get_footer(); ?>