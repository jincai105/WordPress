<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Preferential
 */

get_header(); ?>

<div id="primary" class="content-area">
	<section role="main">
        <div class="container">     
            <div class="row">
                <div class="col-md-12">
					<?php if ( have_posts() ) : ?>
            
                        <header class="page-header">
                            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'preferential-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        </header><!-- .page-header -->
            
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
            
                            <?php get_template_part( 'content', 'search' ); ?>
            
                        <?php endwhile; ?>
            
                        <?php preferentiallite_paging_nav(); ?>
            
                    <?php else : ?>
            
                        <?php get_template_part( 'content', 'none' ); ?>
            
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>
    

<?php get_footer(); ?>
