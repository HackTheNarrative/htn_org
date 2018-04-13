<?php 
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version 	1.2.3
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_general_tabs() {
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'social-activity');
	$tabs['sidebar'] = esc_attr__('Sidebars', 'social-activity');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'social-activity');
	$tabs['error'] = esc_attr__('404', 'social-activity');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'social-activity');
	$tabs['code'] = esc_attr__('Custom Codes', 'social-activity');
	
	if (class_exists('Cmsms_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'social-activity');
	}
	
	return $tabs;
}


function cmsms_options_general_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'social-activity');
		
		break;
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'social-activity');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'social-activity');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'social-activity');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'social-activity');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'social-activity');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'social-activity');
		
		break;
	}
	
	return $sections;	
} 


function cmsms_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_theme_layout', 
			'title' => __('Theme Layout', 'social-activity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'boxed', 
			'choices' => array( 
				__('Liquid', 'social-activity') . '|liquid', 
				__('Boxed', 'social-activity') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_responsive', 
			'title' => __('Responsive Layout', 'social-activity'), 
			'desc' => __('enable', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_retina', 
			'title' => __('High Resolution', 'social-activity'), 
			'desc' => __('enable', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload', 
			'title' => __('Ajax Preloader', 'social-activity'), 
			'desc' => __('enable', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_bg', 
			'title' => __('Preloader Background Color', 'social-activity'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_color', 
			'title' => __('Preloader Bar Color', 'social-activity'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#dadada' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_effect', 
			'title' => __('Preloader Animation Effect', 'social-activity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'grow', 
			'choices' => array( 
				__('Grow', 'social-activity') . '|grow', 
				__('Fade', 'social-activity') . '|fade', 
				__('Minimal', 'social-activity') . '|minimal', 
				__('Flash', 'social-activity') . '|flash', 
				__('Barber Shop', 'social-activity') . '|barber-shop', 
				__('Mac OSX', 'social-activity') . '|mac-osx', 
				__('Fill Left', 'social-activity') . '|fill-left', 
				__('Flat Top', 'social-activity') . '|flat-top', 
				__('Big Counter', 'social-activity') . '|big-counter', 
				__('Corner Indicator', 'social-activity') . '|corner-indicator', 
				__('Bounce', 'social-activity') . '|bounce', 
				__('Loading Bar', 'social-activity') . '|loading-bar', 
				__('Center Circle', 'social-activity') . '|center-circle', 
				__('Center Atom', 'social-activity') . '|center-atom', 
				__('Center Radar', 'social-activity') . '|center-radar', 
				__('Center Simple', 'social-activity') . '|center-simple' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_percentage', 
			'title' => __('Preloader Percentage', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => CMSMS_SHORTNAME . '_sidebar', 
			'title' => __('Custom Sidebars', 'social-activity'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_nav', 
			'title' => __('Website Pages', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_categs', 
			'title' => __('Blog Archives by Categories', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_tags', 
			'title' => __('Blog Archives by Tags', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_month', 
			'title' => __('Blog Archives by Month', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_categs', 
			'title' => __('Portfolio Archives by Categories', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_tags', 
			'title' => __('Portfolio Archives by Tags', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_color', 
			'title' => __('Background Color', 'social-activity'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#3d3d3d|100' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_image', 
			'title' => __('Background Image', 'social-activity'), 
			'desc' => __('Choose your custom error page background image.', 'social-activity'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_search', 
			'title' => __('Search Line', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_button', 
			'title' => __('Sitemap Button', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_link', 
			'title' => __('Sitemap Page URL', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_skin', 
			'title' => __('Skin', 'social-activity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				__('Dark', 'social-activity') . '|dark', 
				__('Light', 'social-activity') . '|light', 
				__('Mac', 'social-activity') . '|mac', 
				__('Metro Black', 'social-activity') . '|metro-black', 
				__('Metro White', 'social-activity') . '|metro-white', 
				__('Parade', 'social-activity') . '|parade', 
				__('Smooth', 'social-activity') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_path', 
			'title' => __('Path', 'social-activity'), 
			'desc' => __('Sets path for switching windows', 'social-activity'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				__('Vertical', 'social-activity') . '|vertical', 
				__('Horizontal', 'social-activity') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_infinite', 
			'title' => __('Infinite', 'social-activity'), 
			'desc' => __('Sets the ability to infinite the group', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_aspect_ratio', 
			'title' => __('Keep Aspect Ratio', 'social-activity'), 
			'desc' => __('Sets the resizing method used to keep aspect ratio within the viewport', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_mobile_optimizer', 
			'title' => __('Mobile Optimizer', 'social-activity'), 
			'desc' => __('Make lightboxes optimized for giving better experience with mobile devices', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_max_scale', 
			'title' => __('Max Scale', 'social-activity'), 
			'desc' => __('Sets the maximum viewport scale of the content', 'social-activity'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_min_scale', 
			'title' => __('Min Scale', 'social-activity'), 
			'desc' => __('Sets the minimum viewport scale of the content', 'social-activity'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_inner_toolbar', 
			'title' => __('Inner Toolbar', 'social-activity'), 
			'desc' => __('Bring buttons into windows, or let them be over the overlay', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_smart_recognition', 
			'title' => __('Smart Recognition', 'social-activity'), 
			'desc' => __('Sets content auto recognize from web pages', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_one_slide', 
			'title' => __('Fullscreen One Slide', 'social-activity'), 
			'desc' => __('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_viewport', 
			'title' => __('Fullscreen Viewport', 'social-activity'), 
			'desc' => __('Sets the resizing method used to fit content within the fullscreen mode', 'social-activity'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				__('Center', 'social-activity') . '|center', 
				__('Fit', 'social-activity') . '|fit', 
				__('Fill', 'social-activity') . '|fill', 
				__('Stretch', 'social-activity') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_toolbar', 
			'title' => __('Toolbar Controls', 'social-activity'), 
			'desc' => __('Sets buttons be available or not', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_arrows', 
			'title' => __('Arrow Controls', 'social-activity'), 
			'desc' => __('Enable the arrow buttons', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_fullscreen', 
			'title' => __('Fullscreen Controls', 'social-activity'), 
			'desc' => __('Sets the fullscreen button', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_thumbnail', 
			'title' => __('Thumbnails Controls', 'social-activity'), 
			'desc' => __('Sets the thumbnail navigation', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_keyboard', 
			'title' => __('Keyboard Controls', 'social-activity'), 
			'desc' => __('Sets the keyboard navigation', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_mousewheel', 
			'title' => __('Mouse Wheel Controls', 'social-activity'), 
			'desc' => __('Sets the mousewheel navigation', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_swipe', 
			'title' => __('Swipe Controls', 'social-activity'), 
			'desc' => __('Sets the swipe navigation', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_slideshow', 
			'title' => __('Slideshow Controls', 'social-activity'), 
			'desc' => __('Enable the slideshow feature and button', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_google_analytics', 
			'title' => __('Google Analytics', 'social-activity'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_css', 
			'title' => __('Custom CSS', 'social-activity'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_js', 
			'title' => __('Custom JavaScript', 'social-activity'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_gmap_api_key', 
			'title' => __('Google Maps API key', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_key', 
			'title' => __('Twitter API key', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_secret', 
			'title' => __('Twitter API secret', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token', 
			'title' => __('Twitter Access token', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token_secret', 
			'title' => __('Twitter Access token secret', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_public_key', 
			'title' => __('reCAPTCHA Public Key', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_private_key', 
			'title' => __('reCAPTCHA Private Key', 'social-activity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

