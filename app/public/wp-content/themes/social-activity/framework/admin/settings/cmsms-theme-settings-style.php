<?php
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version 	1.2.3
 * 
 * Admin Panel Appearance
 * Created by CMSMasters
 * 
 */


function cmsms_options_style_tabs() {
	$cmsms_option = cmsms_get_global_options();
	
	$tabs = array();
	
	$tabs['logo'] = esc_attr__('Logo', 'social-activity');
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'social-activity');
	}
	
	$tabs['header'] = esc_attr__('Header', 'social-activity');
	$tabs['content'] = esc_attr__('Content', 'social-activity');
	$tabs['footer'] = esc_attr__('Footer', 'social-activity');
	$tabs['icon'] = esc_attr__('Social Icons', 'social-activity');
	
	return $tabs;
}


function cmsms_options_style_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'logo':
		$sections = array();
		
		$sections['logo_section'] = esc_attr__('Logo Options', 'social-activity');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'social-activity');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'social-activity');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'social-activity');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'social-activity');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'social-activity');
		
		break;
	}
	
	return $sections;
} 


function cmsms_options_style_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'logo':
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_type', 
			'title' => __('Logo Type', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				__('Image', 'social-activity') . '|image', 
				__('Text', 'social-activity') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url', 
			'title' => __('Logo Image', 'social-activity'), 
			'desc' => __('Choose your website logo image.', 'social-activity'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url_retina', 
			'title' => __('Retina Logo Image', 'social-activity'), 
			'desc' => __('Choose logo image for retina displays.', 'social-activity'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title', 
			'title' => __('Logo Title', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : CMSMS_FULLNAME), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle', 
			'title' => __('Logo Subtitle', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_custom_color', 
			'title' => __('Custom Text Colors', 'social-activity'), 
			'desc' => __('enable', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title_color', 
			'title' => __('Logo Title Color', 'social-activity'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle_color', 
			'title' => __('Logo Subtitle Color', 'social-activity'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_favicon', 
			'title' => __('Favicon', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_favicon_url', 
			'title' => __('Favicon URL', 'social-activity'), 
			'desc' => __('Choose your website favicon image url.', 'social-activity'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/favicon.ico', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_col', 
			'title' => __('Background Color', 'social-activity'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#d2dce3' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img_enable', 
			'title' => __('Background Image Visibility', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img', 
			'title' => __('Background Image', 'social-activity'), 
			'desc' => __('Choose your custom website background image url.', 'social-activity'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/bg.jpg', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_rep', 
			'title' => __('Background Repeat', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'repeat-x', 
			'choices' => array( 
				__('No Repeat', 'social-activity') . '|no-repeat', 
				__('Repeat Horizontally', 'social-activity') . '|repeat-x', 
				__('Repeat Vertically', 'social-activity') . '|repeat-y', 
				__('Repeat', 'social-activity') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_pos', 
			'title' => __('Background Position', 'social-activity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				__('Top Left', 'social-activity') . '|top left', 
				__('Top Center', 'social-activity') . '|top center', 
				__('Top Right', 'social-activity') . '|top right', 
				__('Center Left', 'social-activity') . '|center left', 
				__('Center Center', 'social-activity') . '|center center', 
				__('Center Right', 'social-activity') . '|center right', 
				__('Bottom Left', 'social-activity') . '|bottom left', 
				__('Bottom Center', 'social-activity') . '|bottom center', 
				__('Bottom Right', 'social-activity') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_att', 
			'title' => __('Background Attachment', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'social-activity') . '|scroll', 
				__('Fixed', 'social-activity') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_size', 
			'title' => __('Background Size', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'auto', 
			'choices' => array( 
				__('Auto', 'social-activity') . '|auto', 
				__('Cover', 'social-activity') . '|cover', 
				__('Contain', 'social-activity') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_fixed_header', 
			'title' => __('Fixed Header', 'social-activity'), 
			'desc' => __('enable', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line', 
			'title' => __('Top Line', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_height', 
			'title' => __('Top Height', 'social-activity'), 
			'desc' => __('pixels', 'social-activity'), 
			'type' => 'number', 
			'std' => '35', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_short_info', 
			'title' => __('Top Short Info', 'social-activity'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'social-activity') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_add_cont', 
			'title' => __('Top Additional Content', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				__('None', 'social-activity') . '|none', 
				__('Top Line Social Icons', 'social-activity') . '|social', 
				__('Top Line Navigation', 'social-activity') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_styles', 
			'title' => __('Header Styles', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'l_nav', 
			'choices' => array( 
				__('Default Style', 'social-activity') . '|default', 
				__('Compact Style Left Navigation', 'social-activity') . '|l_nav', 
				__('Compact Style Right Navigation', 'social-activity') . '|r_nav', 
				__('Compact Style Center Navigation', 'social-activity') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_mid_height', 
			'title' => __('Header Middle Height', 'social-activity'), 
			'desc' => __('pixels', 'social-activity'), 
			'type' => 'number', 
			'std' => '100', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_bot_height', 
			'title' => __('Header Bottom Height', 'social-activity'), 
			'desc' => __('pixels', 'social-activity'), 
			'type' => 'number', 
			'std' => '45', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_search', 
			'title' => __('Header Search', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_add_cont', 
			'title' => __('Header Additional Content', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cust_html', 
			'choices' => array( 
				__('None', 'social-activity') . '|none', 
				__('Header Social Icons', 'social-activity') . '|social', 
				__('Header Custom HTML', 'social-activity') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_add_cont_cust_html', 
			'title' => __('Header Custom HTML', 'social-activity'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'social-activity') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_layout', 
			'title' => __('Layout Type by Default', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'social-activity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'social-activity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'social-activity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_alignment', 
			'title' => __('Heading Alignment by Default', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'left', 
			'choices' => array( 
				__('Left', 'social-activity') . '|left', 
				__('Right', 'social-activity') . '|right', 
				__('Center', 'social-activity') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_scheme', 
			'title' => __('Heading Custom Color Scheme by Default', 'social-activity'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image_enable', 
			'title' => __('Heading Background Image Visibility by Default', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image', 
			'title' => __('Heading Background Image by Default', 'social-activity'), 
			'desc' => __('Choose your custom heading background image by default.', 'social-activity'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_repeat', 
			'title' => __('Heading Background Repeat by Default', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				__('No Repeat', 'social-activity') . '|no-repeat', 
				__('Repeat Horizontally', 'social-activity') . '|repeat-x', 
				__('Repeat Vertically', 'social-activity') . '|repeat-y', 
				__('Repeat', 'social-activity') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_attachment', 
			'title' => __('Heading Background Attachment by Default', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'social-activity') . '|scroll', 
				__('Fixed', 'social-activity') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_size', 
			'title' => __('Heading Background Size by Default', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				__('Auto', 'social-activity') . '|auto', 
				__('Cover', 'social-activity') . '|cover', 
				__('Contain', 'social-activity') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_color', 
			'title' => __('Heading Background Color Overlay by Default', 'social-activity'), 
			'desc' => __('color transparency (percentage)', 'social-activity'),  
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_height', 
			'title' => __('Heading Height by Default', 'social-activity'), 
			'desc' => __('pixels', 'social-activity'), 
			'type' => 'number', 
			'std' => '70', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_breadcrumbs', 
			'title' => __('Breadcrumbs Visibility by Default', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_breadcrumbs_alignment', 
			'title' => __('Breadcrumbs Alignment by Default', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'right', 
			'choices' => array( 
				__('Left', 'social-activity') . '|left', 
				__('Right', 'social-activity') . '|right', 
				__('Center', 'social-activity') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_scheme', 
			'title' => __('Bottom Custom Color Scheme', 'social-activity'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar', 
			'title' => __('Bottom Sidebar Visibility by Default', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar_layout', 
			'title' => __('Bottom Sidebar Layout by Default', 'social-activity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '131313', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_scheme', 
			'title' => __('Footer Custom Color Scheme', 'social-activity'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_type', 
			'title' => __('Footer Type', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				__('Default', 'social-activity') . '|default', 
				__('Small', 'social-activity') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_additional_content', 
			'title' => __('Footer Additional Content', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				__('None', 'social-activity') . '|none', 
				__('Footer Navigation', 'social-activity') . '|nav', 
				__('Social Icons', 'social-activity') . '|social', 
				__('Custom HTML', 'social-activity') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_fixed_footer', 
			'title' => __('Fixed Footer', 'social-activity'), 
			'desc' => __('enable', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_height', 
			'title' => __('Footer Height', 'social-activity'), 
			'desc' => __('pixels', 'social-activity'), 
			'type' => 'number', 
			'std' => '450', 
			'min' => '200' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo', 
			'title' => __('Footer Logo', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo_url', 
			'title' => __('Footer Logo', 'social-activity'), 
			'desc' => __('Choose your website footer logo image.', 'social-activity'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo_url_retina', 
			'title' => __('Footer Logo for Retina', 'social-activity'), 
			'desc' => __('Choose your website footer logo image for retina.', 'social-activity'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_nav', 
			'title' => __('Footer Navigation', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_social', 
			'title' => __('Footer Social Icons', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_html', 
			'title' => __('Footer Custom HTML', 'social-activity'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'social-activity') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_copyright', 
			'title' => __('Copyright Text', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => CMSMS_FULLNAME . ' &copy; 2017 | ' . __('All Rights Reserved', 'social-activity'), 
			'class' => 'nohtml' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => CMSMS_SHORTNAME . '_social_icons', 
			'title' => __('Social Icons', 'social-activity'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsms-icon-twitter-circled|#|' . __('Twitter', 'social-activity') . '|true', 
				'cmsms-icon-facebook-circled|#|' . __('Facebook', 'social-activity') . '|true', 
				'cmsms-icon-gplus-circled|#|' . __('Google+', 'social-activity') . '|true', 
				'cmsms-icon-vimeo-circled|#|' . __('Vimeo', 'social-activity') . '|true', 
				'cmsms-icon-skype-circled|#|' . __('Skype', 'social-activity') . '|true' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

