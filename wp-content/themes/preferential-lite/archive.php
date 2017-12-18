<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Preferential
 */

get_header(); ?>

<div id="pref-main-section">
	<div role="main">
    
        <?php get_sidebar( 'top' ); ?>    
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
    
        
                    <header class="page-header clearfix">
                        <h1 class="page-title">
                            <?php
                                if ( is_category() ) :
                                    single_cat_title();
        
                                elseif ( is_tag() ) :
                                    single_tag_title();
        
                                elseif ( is_author() ) :
                                    printf( __( 'Articles by %s', 'preferential-lite' ), '<span class="vcard">' . get_the_author() . '</span>' );
        
                                elseif ( is_day() ) :
                                    printf( __( 'Articles from %s', 'preferential-lite' ), '<span>' . get_the_date() . '</span>' );
        
                                elseif ( is_month() ) :
                                    printf( __( 'Articles from %s', 'preferential-lite' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'preferential-lite' ) ) . '</span>' );
        
                                elseif ( is_year() ) :
                                    printf( __( 'Articles from %s', 'preferential-lite' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'preferential-lite' ) ) . '</span>' );
        
                                elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                                    _e( 'Asides', 'preferential-lite' );
        
                                elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
                                    _e( 'Galleries', 'preferential-lite');
        
                                elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                                    _e( 'Images', 'preferential-lite');
        
                                elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                                    _e( 'Videos', 'preferential-lite' );
        
                                elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                                    _e( 'Quotes', 'preferential-lite' );
        
                                elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                                    _e( 'Links', 'preferential-lite' );
        
                                elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
                                    _e( 'Statuses', 'preferential-lite' );
        
                                elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
                                    _e( 'Audios', 'preferential-lite' );
        
                                elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
                                    _e( 'Chats', 'preferential-lite' );
        
                                else :
                                    _e( 'Archives', 'preferential-lite' );
        
                                endif;
                            ?>
                        </h1>
                    <?php
                        // Show an optional term description.
                        $term_description = term_description();
                        if ( ! empty( $term_description ) ) :
                            printf( '<div class="taxonomy-description">%s</div>', $term_description );
                        endif;
                    ?>
                </header>
    
    
    
                </div>
            </div>
        </div>
    
 <?php $bloglayout = get_theme_mod( 'blog_style', 'blogright' );

	switch ($bloglayout) {
		// Right Column
		case "blogright" :
			echo '<div class="container"><div class="row"><div class="col-md-9"><div id="pref-content" role="main">';
			// get all the posts
				if ( have_posts() ) : while ( have_posts() ) : the_post();				
					// get the article layout
					get_template_part( 'content', get_post_format() );					
				endwhile;
					// get the pagination
					preferentiallite_paging_nav();
				else :
					// if no posts
					get_template_part( 'content', 'none' );					
				endif; 
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
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					preferentiallite_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;				
			echo '</div></div></div></div>';
		break;		
		
		
		// Left and Right Column
		case "blogleftright" :
			echo '<div class="container"><div class="row"><div class="col-md-3"><aside id="pref-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';										
			echo '<div class="col-md-3"><div id="pref-content" role="main">';
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					preferentiallite_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;				
			echo '</div></div><div class="col-md-3"><aside id="pref-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';	
		break;			
	
		
		// Wide Column
		case "blogfull" :
												
			echo '<div class="container"><div class="row"><div class="col-md-12"><div id="pref-content" role="main">';
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					preferentiallite_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;				
			
			echo '</div></div></div></div>';	
		break;	
			
	}
?>   

		<?php get_sidebar( 'bottombanner' ); ?>
    
	</div>
</div>

<?php get_footer(); ?>
