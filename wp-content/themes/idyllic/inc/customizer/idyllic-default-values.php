<?php
if(!function_exists('idyllic_get_option_defaults_values')):
	/******************** IDYLLIC DEFAULT OPTION VALUES ******************************************/
	function idyllic_get_option_defaults_values() {
		global $idyllic_default_values;
		$idyllic_default_values = array(
			'idyllic_responsive'	=> 'on',
			'idyllic_design_layout' => 'full-width-layout',
			'idyllic_sidebar_layout_options' => 'right',
			'idyllic_blog_layout' => 'large_image_display',
			'idyllic_search_custom_header' => 0,
			'idyllic_side_menu'	=> 0,
			'idyllic-img-upload-footer-image' => '',
			'idyllic_header_display'=> 'header_text',
			'idyllic_categories'	=> array(),
			'idyllic_scroll'	=> 0,
			'idyllic_secondary_text' => '',
			'idyllic_secondary_url' => '',
			'idyllic_tag_text' => esc_html__('Continue Reading','idyllic'),
			'idyllic_excerpt_length'	=> '50',
			'idyllic_reset_all' => 0,
			'idyllic_stick_menu'	=>0,
			'idyllic_wow_effect' => 0,
			'idyllic_logo_high_resolution'	=> 0,
			'idyllic_blog_post_image' => 'on',
			'idyllic_search_text' => esc_html__('Search &hellip;','idyllic'),
			'idyllic_blog_content_layout'	=> 'excerptblog_display',
			'idyllic_header_design_layout'	=> '',
			'idyllic_entry_meta_single' => 'show',
			'idyllic_entry_meta_blog' => 'show-meta',
			'idyllic_footer_column_section'	=>'4',
			'idyllic_disable_main_menu' => 0,
			/* Slider Settings */
			'idyllic_slider_button' => 0,
			'idyllic_slider_type'	=> 'default_slider',
			'idyllic_slider_design_layout'	=> 'layer-slider',
			'idyllic_slider_animation_option'	=> 'animation-bottom',
			'idyllic_slider_link' =>0,
			'idyllic_enable_slider' => 'frontpage',
			'idyllic_category_slider' =>array(),
			'idyllic_category_slider_number'	=> '6',
			/* Layer Slider */
			'idyllic_animation_effect' => 'slide',
			'idyllic_slideshowSpeed' => '5',
			'idyllic_animationSpeed' => '7',
			'idyllic_slider_content_bg_color' => 'off',
			'idyllic_display_page_single_featured_image'=>0,
			'idyllic_fullwidth_feature_single_post'	=>0,
			/* Frontpage Idyllic About Us */
			'idyllic_disable_about_us'	=> 1,
			'idyllic_about_us_remove_link' =>0,
			'idyllic_about_us'	=> '',
			'idyllic_about_title'	=> '',
			'idyllic_about_description'	=> '',
			'idyllic-img-upload-aboutus-bg-image'	=>'',
			'idyllic-about-flip-content'	=>0,
			/* Front page feature */
			'idyllic_disable_features'	=> 1,
			'idyllic_frontpage_feature_design' => '',
			'idyllic_disable_features_image'	=> 0,
			'idyllic_total_features'	=> '4',
			'idyllic_features_title'	=> '',
			'idyllic_features_description'	=> '',
			'idyllic_frontpage_position'=>'default',
			/* Fact Figure Box */
			'idyllic_disable_fact_figure_box'	=> 1,
			'idyllic_disable_fact_figure_number_count'	=> 0,
			'idyllic_fact_figure_box'	=> '',
			'idyllic_fact_figure_box_title'	=> '',
			'idyllic_fact_figure_box_description'	=> '',
			'idyllic-img-fact-fig-box-bg-image'	=>'',
			'idyllic_img_fact_fig_boxlink'	=>'',
			/* Portfolio Box */
			'idyllic_disable_portfolio_box'	=> 1,
			'idyllic_total_portfolio_box'	=> '8',
			'idyllic_portfolio_title'	=> '',
			'idyllic_portfolio_description' =>'',
			'idyllic_portfolio_fullwidth_layout' =>0,
			'idyllic_portfolio_noborder_layout' =>0,
			'idyllic_portfolio_show_title_layout' =>0,
			'idyllic_portfolio_category_list' =>array(),
			/* Latest from Blog*/
			'idyllic_disable_latest_blog'	=> 1,
			'idyllic_total_latest_from_blog'	=> '4',
			'idyllic_latest_blog_title'	=> '',
			'idyllic_latest_blog_description' =>'',
			'idyllic_display_blog_category' =>'blog',
			'idyllic_display_blog_design_layout' =>'',
			'idyllic_latest_from_blog_category_list' =>array(),
			/* Our Testimonial */
			'idyllic_disable_our_testimonial'	=> 1,
			'idyllic_total_our_testimonial'	=> '3',
			'idyllic-testimonial-bg-image'	=>'',
			'idyllic_testimonial_title'	=> '',
			'idyllic_testimonial_description' =>'',
			/* Our Team Member */
			'idyllic_disable_team_member'	=> 1,
			'idyllic_our_team_remove_link' =>0,
			'idyllic_team_member_design_layout' =>'',
			'idyllic_total_team_member'	=> '6',
			'idyllic_team_member_title'	=> '',
			'idyllic_team_member_description'	=> '',
			/*Social Icons */
			'idyllic_top_social_icons' =>0,
			'idyllic_side_menu_social_icons' =>0,
			'idyllic_buttom_social_icons'	=>0,
			);
		return apply_filters( 'idyllic_get_option_defaults_values', $idyllic_default_values );
	}
endif;