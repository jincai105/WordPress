<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Preferential
 */
 
 
/** 
 * A way to stop the WP editor from stripping out empty div containers
 */ 
function preferentiallite_change_mce_options( $init ) {
$init['extended_valid_elements'] = 'div[*]';
return $init;
}
add_filter('tiny_mce_before_init', 'preferentiallite_change_mce_options');


/**
 * Move the More Link outside the default content paragraph.
 * Easier to customize
 */
function preferentiallite_new_more_link($link) {
		$link = '<p class="more-link">'.$link.'</p>';
		return $link;
	}
add_filter('the_content_more_link', 'preferentiallite_new_more_link');	

/**
 * Special excerpt length per instance ie showcase column excerpts
 * Thanks to http://bavotasan.com/2009/limiting-the-number-of-words-in-your-excerpt-or-content-in-wordpress/
 */ 
function preferentiallite_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 * @param array $args Configuration arguments.
 * @return array
 */
function preferentiallite_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'preferentiallite_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 * @param array $classes Classes for the body element.
 * @return array
 */
function preferentiallite_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'preferentiallite_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function preferentiallite_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() ) {
		return $title;
	}

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'preferential-lite' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'preferentiallite_wp_title', 10, 2 );



/* Prevent page scroll after clicking read more */
function preferentiallite_remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'preferentiallite_remove_more_link_scroll' );


	
/* Customize the comments form using Bootstrap 3 */		
add_filter( 'comment_form_default_fields', 'preferentiallite_comment_form_fields' );
function preferentiallite_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name', 'preferential-lite' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'preferential-lite' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'preferential-lite' ) . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',
    );
    
    return $fields;
}	
	
add_filter( 'comment_form_defaults', 'preferentiallite_comment_form' );
function preferentiallite_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
             
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    return $args;
}	
	

/**
 * Remove the annoying default 10px WP adds to caption images.
 * Many thanks to http://diywpblog.com/ for this solution.
 *
 */

add_filter('img_caption_shortcode', 'preferentiallite_img_caption_filter',10,3);

function preferentiallite_img_caption_filter($val, $attr, $content = null)
{
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'aligncenter',
		'width'	=> '',
		'caption' => ''
	), $attr));
	
	if ( 1 > (int) $width || empty($caption) )
		return $val;

	$capid = '';
	if ( $id ) {
		$id = esc_attr($id);
		$capid = 'id="figcaption_'. $id . '" ';
		$id = 'id="' . $id . '" aria-labelledby="figcaption_' . $id . '" ';
	}

	return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: '
	. (int) $width . 'px">' . do_shortcode( $content ) . '<figcaption ' . $capid 
	. 'class="wp-caption-text">' . $caption . '</figcaption></figure>';
}


/**
 * Remove the annoying default inline style in the page content for the WP Gallery.
 * Special thanks to: http://wpengineer.com/2352/remove-inline-style-of-wordpress-gallery-shortcode/
 */
add_filter( 'use_default_gallery_style', '__return_false' );


/**
 * Extends the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a featured image.
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
	function preferentiallite_post_classes( $classes ) {
		if ( ! post_password_required() && has_post_thumbnail() )
			$classes[] = 'has-featured-image';
	
		return $classes;
	}
	add_filter( 'post_class', 'preferentiallite_post_classes' );	
	