<?php
/**
 * Preferential Theme Customizer
 *
 * @package Preferential
 */

/**
 * Lets create a customizable theme and begin with some pre-setup
 */ 
 
add_action('customize_register', 'preferentiallite_theme_customize');
function preferentiallite_theme_customize($wp_customize) {
	$wp_customize->remove_section( 'colors');
	
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function preferentiallite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'preferentiallite_customize_register' );

/**
     *  Pro Page Note
     */
    class preferentiallite_note extends WP_Customize_Control {
        public function render_content() {
            echo __( 'This feature is available in the <a href="http://styledthemes.com/preferential" title="premium version" target="_blank">Premium version</a>.', 'preferential-lite' );

        }
    }



/**
 * Lets add a logo to our Title and Tagline group
 */
	// Setting group for selecting logo title
	$wp_customize->add_setting( 'logo_style', array(
		'default' => 'text',
		'sanitize_callback' => 'preferentiallite_sanitize_logo_style',
	) );
			
	$wp_customize->add_control( 'logo_style', array(
    'label'   => __( 'Logo Style', 'preferential-lite' ),
    'section' => 'title_tagline',
	'priority' => 10,
    'type'    => 'radio',
        'choices' => array(
            'custom' => __( 'Your Logo', 'preferential-lite' ),
            'logotext' => __( 'Logo with Title and Tagline', 'preferential-lite' ),
			'text' => __( 'Text Title', 'preferential-lite' ),
        ),
    ));
	
// Setting group for uploading logo
    $wp_customize->add_setting('my_logo', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
		'sanitize_callback' => 'preferentiallite_sanitize_upload',
    ));
	
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'my_logo', array(
        'label'    => __('Your Logo', 'preferential-lite'),
        'section'  => 'title_tagline',
        'settings' => 'my_logo',
		'priority' => 11,
    ))); 
// site title colour
	$wp_customize->add_setting( 'sitetitle', array(
		'default'        => '#565656',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sitetitle', array(
		'label'   => __( 'Site Title Colour', 'preferential-lite' ),
		'section' => 'title_tagline',
		'settings'   => 'sitetitle',
		'priority' => 12,			
	) ) );
// tagline colour
	$wp_customize->add_setting( 'tagline', array(
		'default'        => '#378B92',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tagline', array(
		'label'   => __( 'Tagline Colour', 'preferential-lite' ),
		'section' => 'title_tagline',
		'settings'   => 'tagline',
		'priority' => 13,			
	) ) );
// logo title margin
	$wp_customize->add_setting( 'logomargin', array(
		'default'        => '30px 0 30px 0',
		'sanitize_callback' => 'preferentiallite_sanitize_text',
	) );
	$wp_customize->add_control( 'logomargin', array(
		'settings' => 'logomargin',
		'label'    => __( 'Logo Margins', 'preferential-lite' ),
		'section'  => 'title_tagline',
		'type'     => 'text',
		'priority'       => 14,
	) );


/**
 * This is a section called Basic Settings
 * For miscellaneous options
 */

	$wp_customize->add_section( 'basic_settings', array(
		'title'          => __( 'Basic Settings', 'preferential-lite' ),
		'priority'       => 25,
	) );
	
// Setting for page width
	$wp_customize->add_setting( 'page_width', array(
		'default' => 'box1400',
		'sanitize_callback' => 'preferentiallite_sanitize_pagewidth',
	) );
// Control for page width	
	$wp_customize->add_control( 'page_width', array(
    'label'   => __( 'Page Width', 'preferential-lite' ),
    'section' => 'basic_settings',
    'type'    => 'radio',
        'choices' => array(
            'box1400' => __( 'Default Width 1400px', 'preferential-lite' ),
            'box1200' => __( 'Smaller Width 1200px', 'preferential-lite' ),
        ),
	'priority'       => 1,	
    ));	
	
	
// Top page height
	$wp_customize->add_setting( 'top_height', array(
		'default'        => '435px',
		'sanitize_callback' => 'preferentiallite_sanitize_number',
	) );
	$wp_customize->add_control( 'top_height', array(
		'settings' => 'top_height',
		'label'    => __( 'Top Area Height', 'preferential-lite' ),
		'section'  => 'basic_settings',
		'type'     => 'text',
		'priority'       => 1,
	) );
			
// Setting for blog layout
	$wp_customize->add_setting( 'blog_layout', array(
		'default' => 'blogright',
		'sanitize_callback' => 'preferentiallite_sanitize_blogstyle',
	) );
// Control for blog layout	
	$wp_customize->add_control( 'blog_layout', array(
    'label'   => __( 'Blog Layout', 'preferential-lite' ),
    'section' => 'basic_settings',
	'priority' => 2,
    'type'    => 'radio',
        'choices' => array(
            'blogright' => __( 'Blog with Right Sidebar', 'preferential-lite' ),
			'blogleft' => __( 'Blog with Left Sidebar', 'preferential-lite' ),
			'blogleftright' => __( 'Blog with Left &amp; Right Sidebar', 'preferential-lite' ),
			'blogfull' => __( 'Blog Full Width &amp; no Sidebars', 'preferential-lite' ),
        ),
    ));	
	
// hide featured image on single
	$wp_customize->add_setting( 'hide_featured', array(
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_featured', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Full Post Featured Image', 'preferential-lite' ),
        'section' => 'basic_settings',
		'priority' => 5,
    ) );

// Setting for content or excerpt
	$wp_customize->add_setting( 'excerpt_content', array(
		'default' => 'content',
		'sanitize_callback' => 'preferentiallite_sanitize_excerpt',
	) );
// Control for Content or excerpt
	$wp_customize->add_control( 'excerpt_content', array(
    'label'   => __( 'Content or Excerpt', 'preferential-lite' ),
    'section' => 'basic_settings',
    'type'    => 'radio',
        'choices' => array(
            'content' => __( 'Content', 'preferential-lite' ),
            'excerpt' => __( 'Excerpt', 'preferential-lite' ),	
        ),
	'priority'       => 6,
    ));

// Setting group for a excerpt
	$wp_customize->add_setting( 'excerpt_limit', array(
		'default'        => '50',
		'sanitize_callback' => 'preferentiallite_sanitize_text',
	) );
	$wp_customize->add_control( 'excerpt_limit', array(
		'settings' => 'excerpt_limit',
		'label'    => __( 'Excerpt Length', 'preferential-lite' ),
		'section'  => 'basic_settings',
		'type'     => 'text',
		'priority'       => 7,
	) );

// hide post meta info
	$wp_customize->add_setting( 'hide_postmeta', array(
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_postmeta', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Post Meta Info', 'preferential-lite' ),
        'section' => 'basic_settings',
		'priority' => 8,
    ) );
// hide single footer meta
	$wp_customize->add_setting( 'hide_postinfo', array(
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_postinfo', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Post Footer Info', 'preferential-lite' ),
        'section' => 'basic_settings',
		'priority' => 9,
    ) );	
// hide single post nav
	$wp_customize->add_setting( 'hide_postnav', array(
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_postnav', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Post Navigation', 'preferential-lite' ),
        'section' => 'basic_settings',
		'priority' => 10,
    ) );	
// hide post edit links
	$wp_customize->add_setting( 'hide_edit', array(
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_edit', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Edit Links', 'preferential-lite' ),
        'section' => 'basic_settings',
		'priority' => 11,
    ) );	
	
// hide page titles
	$wp_customize->add_setting( 'hide_title', array(
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	));
	$wp_customize->add_control( 'hide_title', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide Page Titles', 'preferential-lite' ),
        'section' => 'basic_settings',
		'priority' => 12,
    ) );

// Setting group for a Copyright
	$wp_customize->add_setting( 'copyright', array(
		'default'        => 'Your Name',
		'sanitize_callback' => 'preferentiallite_sanitize_text',
	) );

	$wp_customize->add_control( 'copyright', array(
		'settings' => 'copyright',
		'label'    => __( 'Your Copyright Name', 'preferential-lite' ),
		'section'  => 'basic_settings',		
		'type'     => 'text',
		'priority' => 13,
	) );	


/**
 * Create a section called Colours
 */

	$wp_customize->add_section( 'colours', array(
		'title'          => __( 'Colours', 'preferential-lite' ),
		'priority'       => 30,
	) );

// Top area background
	$wp_customize->add_setting( 'top_bg', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bg', array(
		'label'   => __( 'Top Half Background', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'top_bg',
		'priority' => 2,			
	) ) );
// Announcement background
	$wp_customize->add_setting( 'announcement_bg', array(
		'default'        => '#595a67',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'announcement_bg', array(
		'label'   => __( 'Page Top Border', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'announcement_bg',
		'priority' => 3,			
	) ) );
// Top area bottom border
	$wp_customize->add_setting( 'top_bottomborder', array(
		'default'        => '#a2a2a2',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bottomborder', array(
		'label'   => __( 'Top Half Bottom Border', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'top_bottomborder',
		'priority' => 4,			
	) ) );
// main content background
	$wp_customize->add_setting( 'content_bg', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_bg', array(
		'label'   => __( 'Content Background', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'content_bg',
		'priority' => 5,			
	) ) );
// Bottom group background
	$wp_customize->add_setting( 'bottom_bg', array(
		'default'        => '#5f8cb4',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_bg', array(
		'label'   => __( 'Bottom Widget Group Background', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'bottom_bg',
		'priority' => 6,			
	) ) );
	

	
// image border colour
	$wp_customize->add_setting( 'imgcaptionbg', array(
		'default'        => '#e8e8e8',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'imgcaptionbg', array(
		'label'   => __( 'Image Caption Background', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'imgcaptionbg',
		'priority' => 8,			
	) ) );	
// image caption colour
	$wp_customize->add_setting( 'captiontext', array(
		'default'        => '#333333',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'captiontext', array(
		'label'   => __( 'Image Caption Colour', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'captiontext',
		'priority' => 9,			
	) ) );	
	
// Call to Action background
	$wp_customize->add_setting( 'cta_bg', array(
		'default'        => '#9eb25b',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_bg', array(
		'label'   => __( 'Call to Action Background', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'cta_bg',
		'priority' => 10,			
	) ) );			
// Call to Action bottom border
	$wp_customize->add_setting( 'cta_border', array(
		'default'        => '#cbd5a6',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_border', array(
		'label'   => __( 'Call to Action Bottom Border', 'preferential-lite' ),
		'section' => 'colours',
		'settings'   => 'cta_border',
		'priority' => 11,			
	) ) );	
	
	
	$wp_customize->add_section( 'sticky_menu', array(
		'title'          => __( 'Sticky Menu', 'preferential-lite' ),
		'priority'       => 25,
	) );

	$wp_customize->add_setting( 'preferentiallite_sticky_menu', array(
            'sanitize_callback' =>  'preferentiallite_sanitize_text'
        ) );
	 $wp_customize->add_control( new preferentiallite_note ( $wp_customize,'preferentiallite_sticky_menu', array(
            'section'  => 'sticky_menu'
     ) ) );
	
	// Setting for page width
		$wp_customize->add_setting( 'sticky_menu', array(
			'default' => '1',
			'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
		) );
	// Control for page width	
		$wp_customize->add_control( 'sticky_menu', array(
		'label'   => __( 'Sticky Menu', 'preferential-lite' ),
		'section' => 'sticky_menu',
		'type'    => 'checkbox',
		'priority'       => 2,	
		));	
		
/**
 * Create a section called Typography
 */
	$wp_customize->add_section( 'typography', array(
		'title'          => __( 'Typography', 'preferential-lite' ),
		'priority'       => 34,
	) );	
	
// text colour
	$wp_customize->add_setting( 'main_txt', array(
		'default'        => '#666666',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_txt', array(
		'label'   => __( 'Main Text Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'main_txt',
		'priority' => 2,			
	) ) );	
	
// main content link colour
	$wp_customize->add_setting( 'link_colour', array(
		'default'        => '#3199e3',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_colour', array(
		'label'   => __( 'Link Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'link_colour',
		'priority' => 3,			
	) ) );	
// main content link colour mouseover
	$wp_customize->add_setting( 'link_colourhover', array(
		'default'        => '#e4a92c',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_colourhover', array(
		'label'   => __( 'Link Hover Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'link_colourhover',
		'priority' => 4,			
	) ) );	
// headings colour 
	$wp_customize->add_setting( 'heading_colour', array(
		'default'        => '#222222',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_colour', array(
		'label'   => __( 'Headings Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'heading_colour',
		'priority' => 5,			
	) ) );	
// Sidebar widget list borders 
	$wp_customize->add_setting( 'widgetx_listborder', array(
		'default'        => '#dadada',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'widgetx_listborder', array(
		'label'   => __( 'Widget List Borders', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'widgetx_listborder',
		'priority' => 6,			
	) ) );

// Bottom headings colour
	$wp_customize->add_setting( 'bottom_text', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_text', array(
		'label'   => __( 'Bottom Headings &amp; Text Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'bottom_text',
		'priority' => 7,			
	) ) );
// Bottom link colour
	$wp_customize->add_setting( 'bottom_links', array(
		'default'        => '#d0e9f9',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_links', array(
		'label'   => __( 'Bottom Links', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'bottom_links',
		'priority' => 8,			
	) ) );
// Bottom link colour mouseover
	$wp_customize->add_setting( 'bottom_linkshover', array(
		'default'        => '#f3e2bd',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_linkshover', array(
		'label'   => __( 'Bottom Links Hover', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'bottom_linkshover',
		'priority' => 9,			
	) ) );		
// Bottom list border colour
	$wp_customize->add_setting( 'bottom_listborder', array(
		'default'        => '#8baecd',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_listborder', array(
		'label'   => __( 'Bottom List Borders', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'bottom_listborder',
		'priority' => 10,			
	) ) );
// Social row text colour
	$wp_customize->add_setting( 'social_text', array(
		'default'        => '#9BA2A7',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_text', array(
		'label'   => __( 'Social Row Text Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'social_text',
		'priority' => 11,			
	) ) );	
// social text links
	$wp_customize->add_setting( 'social_textlink', array(
		'default'        => '#cbcdcf',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_textlink', array(
		'label'   => __( 'Social Area Text Links', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'social_textlink',
		'priority' => 12,			
	) ) );	

// Footer text colour
	$wp_customize->add_setting( 'footer_text', array(
		'default'        => '#696969',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'   => __( 'Footer Text Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'footer_text',
		'priority' => 13,			
	) ) );
// Footer link colour
	$wp_customize->add_setting( 'footer_links', array(
		'default'        => '#b99116',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_links', array(
		'label'   => __( 'Footer Link Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'footer_links',
		'priority' => 14,			
	) ) );
		
// call to action link
	$wp_customize->add_setting( 'cta_link', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_link', array(
		'label'   => __( 'Call To Action Link Colour', 'preferential-lite' ),
		'section' => 'typography',
		'settings'   => 'cta_link',
		'priority' => 17,			
	) ) );	
			
	
/**
 * Create a section called Banner
 */
	$wp_customize->add_section( 'banner', array(
		'title'          => __( 'Banner', 'preferential-lite' ),
		'priority'       => 35,
	) );

// Banner bottom border
	$wp_customize->add_setting( 'banner_border', array(
		'default'        => '#cde4ec',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'banner_border', array(
		'label'   => __( 'Banner Border', 'preferential-lite' ),
		'section' => 'banner',
		'settings'   => 'banner_border',
		'priority' => 1,			
	) ) );
// Banner padding
	$wp_customize->add_setting( 'banner_pad', array(
		'default'        => '0 0 0 0',
		'sanitize_callback' => 'preferentiallite_sanitize_text',
	) );
	$wp_customize->add_control( 'banner_pad', array(
		'settings' => 'banner_pad',
		'label'    => __( 'Banner Padding', 'preferential-lite' ),
		'section'  => 'banner',
		'type'     => 'text',
		'priority'       => 2,
	) );
	// Control for hiding the default featured image
	$wp_customize->add_setting( 'hide_default_banner', array(	
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	) ) ;
	
// Control for hiding the default featured image
	$wp_customize->add_control( 'hide_default_banner', array(
        'label' => __( 'Hide Default Banner Image', 'preferential-lite' ),
		'type' => 'checkbox',
		'section' => 'banner',
		'priority' => 3,
    ) );
    // setting to hide from banner image
    $wp_customize->add_setting( 'show_banner_on_pages', array(	
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	) ) ;
	
// Control for hiding the default featured image
	$wp_customize->add_control( 'show_banner_on_pages', array(
        'label' => __( 'Show Banner On All Inner Pages', 'preferential-lite' ),
		'type' => 'checkbox',
		'section' => 'banner',
		'priority' => 4,
    ) );


	
/**
 * This is a custom section called Social Networking
 * which contains settings for social networking icons and links
 */
	$wp_customize->add_section( 'social_networking', array(
		'title'          => __( 'Social Networking', 'preferential-lite' ),
		'priority'       => 50,
	) );


	
// Setting for hiding the social bar	
	$wp_customize->add_setting( 'hide_social', array(	
	'sanitize_callback' => 'preferentiallite_sanitize_checkbox',
	) ) ;
	
// Control for hiding the social bar	
	$wp_customize->add_control( 'hide_social', array(
        'label' => __( 'Hide Social Bar', 'preferential-lite' ),
		'type' => 'checkbox',
		'section' => 'social_networking',
		'priority' => 1,
    ) );

	
// Setting group for Twitter
	$wp_customize->add_setting( 'twitter_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'twitter_uid', array(
		'settings' => 'twitter_uid',
		'label'    => __( 'Twitter', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 2,
	) );	
	
// Setting group for Facebook
	$wp_customize->add_setting( 'facebook_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'facebook_uid', array(
		'settings' => 'facebook_uid',
		'label'    => __( 'Facebook', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 3,
	) );	
	
// Setting group for Google+
	$wp_customize->add_setting( 'google_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'google_uid', array(
		'settings' => 'google_uid',
		'label'    => __( 'Google+', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 4,
	) );	
	
// Setting group for Linkedin
	$wp_customize->add_setting( 'linkedin_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'linkedin_uid', array(
		'settings' => 'linkedin_uid',
		'label'    => __( 'Linkedin', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 5,
	) );	
	
// Setting group for Pinterest
	$wp_customize->add_setting( 'pinterest_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'pinterest_uid', array(
		'settings' => 'pinterest_uid',
		'label'    => __( 'Pinterest', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 6,
	) );

// Setting group for Flickr
	$wp_customize->add_setting( 'flickr_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'flickr_uid', array(
		'settings' => 'flickr_uid',
		'label'    => __( 'Flickr', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 7,
	) );
// Setting group for Youtube
	$wp_customize->add_setting( 'youtube_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'youtube_uid', array(
		'settings' => 'youtube_uid',
		'label'    => __( 'Youtube', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 8,
	) );	
// Setting group for Vimeo
	$wp_customize->add_setting( 'vimeo_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'vimeo_uid', array(
		'settings' => 'vimeo_uid',
		'label'    => __( 'Vimeo', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 9,
	) );
// Setting group for Instagram
	$wp_customize->add_setting( 'instagram_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'instagram_uid', array(
		'settings' => 'instagram_uid',
		'label'    => __( 'Instagram', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 10,
	) );	
	
	
// Setting group for Reddit
	$wp_customize->add_setting( 'reddit_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'reddit_uid', array(
		'settings' => 'reddit_uid',
		'label'    => __( 'Reddit', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 11,
	) );	
// Setting group for Picassa
	$wp_customize->add_setting( 'picassa_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'picassa_uid', array(
		'settings' => 'picassa_uid',
		'label'    => __( 'Picassa', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 12,
	) );	
// Setting group for Stumbleupon
	$wp_customize->add_setting( 'stumbleupon_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'stumbleupon_uid', array(
		'settings' => 'stumbleupon_uid',
		'label'    => __( 'Stubmleupon', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 13,
	) );	
// Setting group for WordPress
	$wp_customize->add_setting( 'wp_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'wp_uid', array(
		'settings' => 'wp_uid',
		'label'    => __( 'WordPress', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 14,
	) );
// Setting group forgithub
	$wp_customize->add_setting( 'github_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'github_uid', array(
		'settings' => 'github_uid',
		'label'    => __( 'Github', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 15,
	) );	
// Setting group dribbble
	$wp_customize->add_setting( 'dribbble_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'dribbble_uid', array(
		'settings' => 'dribbble_uid',
		'label'    => __( 'Dribbble', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 16,
	) );	
// Setting group tumbler
	$wp_customize->add_setting( 'tumblr_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'tumblr_uid', array(
		'settings' => 'tumblr_uid',
		'label'    => __( 'Tumblr', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 17,
	) );				
// Setting group for rss
	$wp_customize->add_setting( 'rss_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'rss_uid', array(
		'settings' => 'rss_uid',
		'label'    => __( 'RSS', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 18,
	) );
// Setting group for email
	$wp_customize->add_setting( 'email_uid', array(
		'default'        => '',
		'sanitize_callback' => 'preferentiallite_sanitize_url',
	) );

	$wp_customize->add_control( 'email_uid', array(
		'settings' => 'email_uid',
		'label'    => __( 'Email', 'preferential-lite' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 19,
	) );	
	
	// Social icon colour
	$wp_customize->add_setting( 'social_colour', array(
		'default'        => '#9ba2a7',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_colour', array(
		'label'   => __( 'Social Icon Colour', 'preferential-lite' ),
		'section' => 'social_networking',
		'settings'   => 'social_colour',
		'priority' => 20,			
	) ) );

	// Social icon colour on hover
	$wp_customize->add_setting( 'social_hover', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hover', array(
		'label'   => __( 'Social Icon Hover', 'preferential-lite' ),
		'section' => 'social_networking',
		'settings'   => 'social_hover',
		'priority' => 21,			
	) ) );
	
	// Social icon background
	$wp_customize->add_setting( 'social_bg', array(
		'default'        => '#394e63',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_bg', array(
		'label'   => __( 'Social Icon Background', 'preferential-lite' ),
		'section' => 'social_networking',
		'settings'   => 'social_bg',
		'priority' => 22,			
	) ) );		
	// Social row border colour
	$wp_customize->add_setting( 'social_border', array(
		'default'        => '#000000',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_border', array(
		'label'   => __( 'Social Row Bottom Border', 'preferential-lite' ),
		'section' => 'social_networking',
		'settings'   => 'social_border',
		'priority' => 23,			
	) ) );	



















/**
 * This is a section for the navigation
 * Everything for your site menu
 */
// Main Menu background
	$wp_customize->add_setting( 'menu_bg', array(
		'default'        => '#6ea2cf',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_bg', array(
		'label'   => __( 'Menu Container Background', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'menu_bg',
		'priority' => 11,			
	) ) );
// Mobile button
	$wp_customize->add_setting( 'mobile_btn', array(
		'default'        => '#595a67',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_btn', array(
		'label'   => __( 'Mobile Button Background', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'mobile_btn',
		'priority' => 12,			
	) ) );
// Mobile button text
	$wp_customize->add_setting( 'mobile_btntext', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_btntext', array(
		'label'   => __( 'Mobile Button Text', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'mobile_btntext',
		'priority' => 13,			
	) ) );	
// Mobile button hover
	$wp_customize->add_setting( 'mobile_btnhover', array(
		'default'        => '#cde4ec',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_btnhover', array(
		'label'   => __( 'Mobile Button Hover', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'mobile_btnhover',
		'priority' => 14,			
	) ) );
// Mobile button text hover
	$wp_customize->add_setting( 'mobile_btntexthover', array(
		'default'        => '#5c8290',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_btntexthover', array(
		'label'   => __( 'Mobile Button Text Hover', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'mobile_btntexthover',
		'priority' => 15,			
	) ) );
// Mobile toggled menu background
	$wp_customize->add_setting( 'toggled_menubg', array(
		'default'        => '#cde4ec',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'toggled_menubg', array(
		'label'   => __( 'Mobile Menu Background', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'toggled_menubg',
		'priority' => 16,			
	) ) );
// Mobile toggled menu borders
	$wp_customize->add_setting( 'toggled_borders', array(
		'default'        => '#b5ced7',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'toggled_borders', array(
		'label'   => __( 'Mobile Menu Borders', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'toggled_borders',
		'priority' => 17,			
	) ) );
// Mobile toggled link dividers
	$wp_customize->add_setting( 'toggled_linkdividers', array(
		'default'        => '#b4c9d0',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'toggled_linkdividers', array(
		'label'   => __( 'Mobile Link Dividers', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'toggled_linkdividers',
		'priority' => 18,			
	) ) );
// Mobile menu link colour
	$wp_customize->add_setting( 'mobile_link', array(
		'default'        => '#595a67',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_link', array(
		'label'   => __( 'Mobile Menu Link Colour', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'mobile_link',
		'priority' => 19,			
	) ) );
// Mobile links hover and active
	$wp_customize->add_setting( 'mobile_active', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_active', array(
		'label'   => __( 'Mobile Active Link', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'mobile_active',
		'priority' => 20,			
	) ) );
// Mobile links hover and active background
	$wp_customize->add_setting( 'mobile_activebg', array(
		'default'        => '#6ea2cf',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_activebg', array(
		'label'   => __( 'Mobile Active Link Background', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'mobile_activebg',
		'priority' => 21,			
	) ) );

// Main menu link colour
	$wp_customize->add_setting( 'menu_link', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link', array(
		'label'   => __( 'Menu Link', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'menu_link',
		'priority' => 22,			
	) ) );


// Main menu link hover and active colour
	$wp_customize->add_setting( 'menu_active', array(
		'default'        => '#ffdd80',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_active', array(
		'label'   => __( 'Menu Active Link', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'menu_active',
		'priority' => 23,			
	) ) );
// Submenu background
	$wp_customize->add_setting( 'submenu_bg', array(
		'default'        => '#cde4ec',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_bg', array(
		'label'   => __( 'Submenu Background', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'submenu_bg',
		'priority' => 24,			
	) ) );
// Submenu active link background
	$wp_customize->add_setting( 'submenu_activebg', array(
		'default'        => '#6ea2cf',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_activebg', array(
		'label'   => __( 'Submenu Active Background', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'submenu_activebg',
		'priority' => 25,			
	) ) );
// Submenu active link
	$wp_customize->add_setting( 'submenu_activelink', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'preferentiallite_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_activelink', array(
		'label'   => __( 'Submenu Active Link', 'preferential-lite' ),
		'section' => 'nav',
		'settings'   => 'submenu_activelink',
		'priority' => 26,			
	) ) );



} 
// end pre-setup and begin sanitization functions


// adds sanitization callback function : colors
function preferentiallite_sanitize_hex_color( $hex_color, $setting ) {
	// Sanitize $input as a hex value without the hash prefix.
	$hex_color = sanitize_hex_color( $hex_color );
	
	// If $input is a valid hex value, return it; otherwise, return the default.
	return ( ( $hex_color != NULL ) ? $hex_color : $setting->default );
}

// adds sanitization callback function : text 
function preferentiallite_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}


// adds sanitization callback function : url
function preferentiallite_sanitize_url( $value) {
	$value = esc_url_raw( $value);
	return $value;
}

// adds sanitization callback function : checkbox
function preferentiallite_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}	

// adds sanitization callback function for the page width : radio
function preferentiallite_sanitize_pagewidth( $input ) {
    $valid = array(
            'box1400' => __( 'Default Width 1400px', 'preferential-lite' ),
            'box1200' => __( 'Smaller Width 1200px', 'preferential-lite' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// adds sanitization callback function for the featured image : radio
function preferentiallite_sanitize_featured_image( $input ) {
    $valid = array(
		'full' => __( 'Full Width Featured Image', 'preferential-lite' ),
		'big' => __( 'Wide Featured Image', 'preferential-lite' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// adds sanitization callback function for the excerpt : radio
function preferentiallite_sanitize_excerpt( $input ) {
    $valid = array(
		'content' => __( 'Content', 'preferential-lite' ),
        'excerpt' => __( 'Excerpt', 'preferential-lite' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// adds sanitization callback function for the layout : radio
function preferentiallite_sanitize_blogstyle( $input ) {
    $valid = array(
		'blogright' => __( 'Blog with Right Sidebar', 'preferential-lite' ),
		'blogleft' => __( 'Blog with Left Sidebar', 'preferential-lite' ),
		'blogleftright' => __( 'Blog with Left &amp; Right Sidebar', 'preferential-lite' ),
		'blogfull' => __( 'Blog Full Width &amp; no Sidebars', 'preferential-lite' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}


// adds sanitization callback function for the logo style : radio
function preferentiallite_sanitize_logo_style( $input ) {
    $valid = array(
            'custom' => __( 'Your Logo', 'preferential-lite' ),
            'logotext' => __( 'Logo with Title and Tagline', 'preferential-lite' ),
			'text' => __( 'Text Title', 'preferential-lite' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// adds sanitization callback function for numeric data : number
function preferentiallite_sanitize_number( $value ) {
    $value = (int) $value; // Force the value into integer type.
    return ( 0 < $value ) ? $value : null;
}

// adds sanitization callback function for uploading : uploader
add_filter( 'preferentiallite_sanitize_image', 'preferentiallite_sanitize_upload' );
add_filter( 'preferentiallite_sanitize_file', 'preferentiallite_sanitize_upload' );

function preferentiallite_sanitize_upload( $input ) {        
        $output = '';        
        $filetype = wp_check_filetype($input);       
        if ( $filetype["ext"] ) {        
                $output = $input;        
        }       
        return $output;
}


/**
 *  Registers
 */
function preferentiallite_registers() {
    wp_register_script( 'preferentiallite_customizer_script', get_template_directory_uri() . '/js/theme-customizer.js', array("jquery"), '20120206', true  );
    wp_enqueue_script( 'preferentiallite_customizer_script' );
    wp_localize_script( 'preferentiallite_customizer_script', 'preferentiallite_buttons', array(
        'pro'       => __( 'View Pro Version', 'preferential-lite' ),
        'review'       => __( 'Rate Us', 'preferential-lite' ),
        'documentation'       => __( 'View Documentation', 'preferential-lite' ),
    ) );
}
add_action( 'customize_controls_enqueue_scripts', 'preferentiallite_registers' );