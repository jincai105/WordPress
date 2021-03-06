<?php
/**
 * Top sidebar group
 *
 * @package Preferential
 * @since 1.0.0
 */


if (   ! is_active_sidebar( 'top1'  )
	&& ! is_active_sidebar( 'top2' )
	&& ! is_active_sidebar( 'top3'  )
	&& ! is_active_sidebar( 'top4'  )		
		
	)

		return;
	// If we get this far, we have widgets. Let do this.
?>

    <div class="container">
        <div class="row">
			<div id="pref-topgroup" role="complementary" style="background-color: #ffffff; color:<?php echo get_theme_mod( 'toptext', '#565656' ); ?>;">

            <div id="top1" <?php preferentiallite_topgroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'top1' ); ?>
            </div><!-- #top1 -->
       
            <div id="top2" <?php preferentiallite_topgroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'top2' ); ?>
            </div><!-- #top2 -->          
        
            <div id="top3" <?php preferentiallite_topgroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'top3' ); ?>
            </div><!-- #top3 -->
     
            <div id="top4" <?php preferentiallite_topgroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'top4' ); ?>
            </div><!-- #top4 -->
        </div>
    </div>
</div>