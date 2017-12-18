<?php

/**
 * Social bar group
 * @package Preferential
 * @since 1.0.0
 */
?>

<?php if( get_theme_mod( 'hide_social' ) == '') { ?>
	<div id="socialbar">
		<?php $options = get_theme_mods();						
		echo '<div id="social-icons">';										
		if (!empty($options['twitter_uid'])) echo '<a title="Twitter" href="' . $options['twitter_uid'] . '" target="_blank"><div id="twitter" class="icomoon icon-twitter"></div></a>';
		if (!empty($options['facebook_uid'])) echo '<a title="Facebook" href="' . $options['facebook_uid'] . '" target="_blank"><div id="facebook" class="icomoon icon-facebook"></div></a>';
		if (!empty($options['google_uid'])) echo '<a title="Google+" href="' . $options['google_uid'] . '" target="_blank"><div id="google" class="icomoon icon-google-plus"></div></a>';			
		if (!empty($options['linkedin_uid'])) echo '<a title="Linkedin" href="' . $options['linkedin_uid'] . '" target="_blank"><div id="linkedin" class="icomoon icon-linkedin"></div></a>';
		if (!empty($options['pinterest_uid'])) echo '<a title="Pinterest" href="' . $options['pinterest_uid'] . '" target="_blank"><div id="pinterest" class="icomoon icon-pinterest"></div></a>';
		if (!empty($options['flickr_uid'])) echo '<a title="Flickr" href="' . $options['flickr_uid'] . '" target="_blank"><div id="flickr" class="icomoon icon-flickr"></div></a>';
		if (!empty($options['youtube_uid'])) echo '<a title="Youtube" href="' . $options['youtube_uid'] . '" target="_blank"><div id="youtube" class="icomoon icon-youtube"></div></a>';
		if (!empty($options['vimeo_uid'])) echo '<a title="Vimeo" href="' . $options['vimeo_uid'] . '" target="_blank"><div id="vimeo" class="icomoon icon-vimeo"></div></a>';		
		if (!empty($options['instagram_uid'])) echo '<a title="Instagram" href="' . $options['instagram_uid'] . '" target="_blank"><div id="instagram" class="icomoon icon-instagram"></div></a>';		
		if (!empty($options['reddit_uid'])) echo '<a title="Reddit" href="' . $options['reddit_uid'] . '" target="_blank"><div id="reddit" class="icomoon icon-reddit"></div></a>';
		if (!empty($options['picassa_uid'])) echo '<a title="picassa" href="' . $options['picassa_uid'] . '" target="_blank"><div id="picassa" class="icomoon icon-picassa"></div></a>';
		if (!empty($options['stumbleupon_uid'])) echo '<a title="stumbleupon" href="' . $options['stumbleupon_uid'] . '" target="_blank"><div id="stumbleupon" class="icomoon icon-stumbleupon"></div></a>';	
		if (!empty($options['wp_uid'])) echo '<a title="WordPress" href="' . $options['wp_uid'] . '" target="_blank"><div id="wordpress" class="icomoon icon-wordpress"></div></a>';	
		if (!empty($options['github_uid'])) echo '<a title="Github" href="' . $options['github_uid'] . '" target="_blank"><div id="github" class="icomoon icon-github"></div></a>';
		if (!empty($options['dribbble_uid'])) echo '<a title="Dribbble" href="' . $options['dribbble_uid'] . '" target="_blank"><div id="dribbble" class="icomoon icon-dribbble"></div></a>';
		if (!empty($options['tumblr_uid'])) echo '<a title="Tumblr" href="' . $options['tumblr_uid'] . '" target="_blank"><div id="Tumblr" class="icomoon icon-tumblr"></div></a>';		
		if (!empty($options['rss_uid'])) echo '<a title="rss" href="' . $options['rss_uid'] . '" target="_blank"><div id="rss" class="icomoon icon-feed"></div></a>';	
		
		if (!empty($options['email_uid'])) echo '<a title="Email" href="' . $options['email_uid'] . '"><div id="email" class="icomoon icon-envelope"></div></a>';		 
		echo '</div>'		
		?>	
       
	</div>
<?php } ?>