<?php
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version 	1.2.3
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


// Current Theme Constants
if (!defined('CMSMS_SHORTNAME')) {
	define('CMSMS_SHORTNAME', 'social-activity');
}

if (!defined('CMSMS_FULLNAME')) {
	define('CMSMS_FULLNAME', 'Social Activity');
}



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('cmsms_system_fonts_list')) {
	function cmsms_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('cmsms_google_fonts_list')) {
	function cmsms_google_fonts_list() {
		$fonts = array( 
			'' => __('None', 'social-activity'), 
			'Bitter:400,700,400italic' => 'Bitter', 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsms_font_weight_list')) {
	function cmsms_font_weight_list() {
		$list = array( 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsms_font_style_list')) {
	function cmsms_font_style_list() {
		$list = array( 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('cmsms_text_transform_list')) {
	function cmsms_text_transform_list() {
		$list = array( 
			'none' => 'none', 
			'uppercase' => 'uppercase', 
			'lowercase' => 'lowercase', 
			'capitalize' => 'capitalize', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('cmsms_text_decoration_list')) {
	function cmsms_text_decoration_list() {
		$list = array( 
			'none' => 'none', 
			'underline' => 'underline', 
			'overline' => 'overline', 
			'line-through' => 'line-through', 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('cmsms_custom_color_schemes_list')) {
	function cmsms_custom_color_schemes_list() {
		$list = array( 
			'first' => __('Custom 1', 'social-activity'), 
			'second' => __('Custom 2', 'social-activity'), 
			'third' => __('Custom 3', 'social-activity'), 
			'fourth' => __('Custom 4', 'social-activity'), 
			'fifth' => __('Custom 5', 'social-activity'), 
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Theme Image Thumbnails Size
if (!function_exists('cmsms_image_thumbnail_list')) {
	function cmsms_image_thumbnail_list() {
		$list = array( 
			'small-thumb' => array( 
				'width' => 		55, 
				'height' => 	55, 
				'crop' => 		true 
			), 
			'square-thumb' => array( 
				'width' => 		250, 
				'height' => 	250, 
				'crop' => 		true, 
				'title' => 		__('Square', 'social-activity') 
			), 
			'blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	390, 
				'crop' => 		true, 
				'title' => 		__('Masonry Blog', 'social-activity') 
			), 
			'project-thumb' => array( 
				'width' => 		580, 
				'height' => 	460, 
				'crop' => 		true, 
				'title' => 		__('Project', 'social-activity') 
			), 
			'project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		__('Masonry Project', 'social-activity') 
			), 
			'post-thumbnail' => array( 
				'width' => 		820, 
				'height' => 	490, 
				'crop' => 		true, 
				'title' => 		__('Featured', 'social-activity') 
			), 
			'masonry-thumb' => array( 
				'width' => 		820, 
				'height' => 	9999, 
				'title' => 		__('Masonry', 'social-activity') 
			), 
			'full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	700, 
				'crop' => 		true, 
				'title' => 		__('Full', 'social-activity') 
			), 
			'project-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	920, 
				'crop' => 		true, 
				'title' => 		__('Project Full', 'social-activity') 
			), 
			'full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		__('Masonry Full', 'social-activity') 
			) 
		);
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('cmsms_all_color_schemes_list')) {
	function cmsms_all_color_schemes_list() {
		$list = array( 
			'default' => 		__('Default', 'social-activity'), 
			'header' => 		__('Header', 'social-activity'), 
			'header_top' => 	__('Header Top', 'social-activity'), 
			'header_bottom' => 	__('Header Bottom', 'social-activity'), 
			'footer' => 		__('Footer', 'social-activity') 
		);
		
		
		$out = array_merge($list, cmsms_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsms_color_schemes_list')) {
	function cmsms_color_schemes_list() {
		$list = cmsms_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['header_top']);
		
		unset($list['header_bottom']);
		
		
		$out = array_merge($list, cmsms_custom_color_schemes_list());
		
		
		return $out;
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('cmsms_color_schemes_defaults')) {
	function cmsms_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#747e86|100', 
				'link' => 		'#b83d46|100', 
				'hover' => 		'#bac0c6|100', 
				'heading' => 	'#3c576e|100', 
				'bg' => 		'#ffffff|100', 
				'alternate' => 	'#f8fafb|100', 
				'border' => 	'#dbdee1|100' 
			), 
			'header' => array( // Header color scheme
				'color' => 				'#747e86|100', 
				'link' => 				'#3c576e|100', 
				'hover' => 				'#ffffff|100', 
				'subtitle' => 			'#3c576e|100', 
				'bg' => 				'#ffffff|100', 
				'hover_bg' => 			'#b83d46|100', 
				'border' => 			'#ebebeb|100', 
				'dropdown_link' => 		'#9e9e9e|100', 
				'dropdown_hover' => 	'#3d3d3d|100', 
				'dropdown_subtitle' => 	'#9e9e9e|100', 
				'dropdown_bg' => 		'#ffffff|100', 
				'dropdown_hover_bg' => 	'#fbfbfb|100', 
				'dropdown_border' => 	'#ebebeb|100' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 				'#ffffff|100', 
				'link' => 				'#ffffff|100', 
				'hover' => 				'#3c576e|100', 
				'bg' => 				'#879cae|100', 
				'border' => 			'#ffffff|100', 
				'dropdown_link' => 		'#838383|100', 
				'dropdown_hover' => 	'#ffffff|100', 
				'dropdown_bg' => 		'#3d3d3d|100', 
				'dropdown_border' => 	'#333333|100' 
			), 
			'header_bottom' => array( // Header Bottom color scheme
				'color' => 				'#ffffff|100', 
				'link' => 				'#ffffff|100', 
				'hover' => 				'#ffffff|100', 
				'subtitle' => 			'#3c576e|100', 
				'bg' => 				'#b83d46|100', 
				'hover_bg' => 			'#a0353d|100', 
				'border' => 			'#ffffff|10', 
				'dropdown_link' => 		'#9e9e9e|100', 
				'dropdown_hover' => 	'#3d3d3d|100', 
				'dropdown_subtitle' => 	'#9e9e9e|100', 
				'dropdown_bg' => 		'#ffffff|100', 
				'dropdown_hover_bg' => 	'#fbfbfb|100', 
				'dropdown_border' => 	'#ebebeb|100' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#768895|100', 
				'link' => 		'#768895|100', 
				'hover' => 		'#dd5d66|100', 
				'heading' => 	'#ffffff|100', 
				'bg' => 		'#3c576e|100', 
				'alternate' => 	'#414141|100', 
				'border' => 	'#5a5a5a|100' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#ffffff|60', 
				'link' => 		'#ffffff|100', 
				'hover' => 		'#d6515a|100', 
				'heading' => 	'#ffffff|100', 
				'bg' => 		'#ffffff|100', 
				'alternate' => 	'#ffffff|100', 
				'border' => 	'#ffffff|100' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#ffffff|100', 
				'link' => 		'#ffffff|100', 
				'hover' => 		'#3d3d3d|100', 
				'heading' => 	'#ffffff|100', 
				'bg' => 		'#3c576e|100', 
				'alternate' => 	'#fbfbfb|100', 
				'border' => 	'#ebebeb|100' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#ffffff|50', 
				'link' => 		'#ffffff|100', 
				'hover' => 		'#000000|100', 
				'heading' => 	'#ffffff|70', 
				'bg' => 		'#585a73|100', 
				'alternate' => 	'#ffffff|12', 
				'border' => 	'#ffffff|25' 
			), 
			'fourth' => array( // custom color scheme 4
				'color' => 		'#ffffff|65', 
				'link' => 		'#ffffff|100', 
				'hover' => 		'#ffffff|10', 
				'heading' => 	'#ffffff|100', 
				'bg' => 		'#ffffff|20', 
				'alternate' => 	'#ffffff|15', 
				'border' => 	'#ffffff|25' 
			), 
			'fifth' => array( // custom color scheme 5
				'color' => 		'#747e86|100', 
				'link' => 		'#b83d46|100', 
				'hover' => 		'#bac0c6|100', 
				'heading' => 	'#3c576e|100', 
				'bg' => 		'#ffffff|100', 
				'alternate' => 	'#f8fafb|100', 
				'border' => 	'#dbdee1|100' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
if (!defined('CMSMS_FRAMEWORK')) {
	define('CMSMS_FRAMEWORK', get_template_directory() . '/framework');
}

if (!defined('CMSMS_ADMIN')) {
	define('CMSMS_ADMIN', CMSMS_FRAMEWORK . '/admin');
}

if (!defined('CMSMS_SETTINGS')) {
	define('CMSMS_SETTINGS', CMSMS_ADMIN . '/settings');
}

if (!defined('CMSMS_OPTIONS')) {
	define('CMSMS_OPTIONS', CMSMS_ADMIN . '/options');
}

if (!defined('CMSMS_ADMIN_INC')) {
	define('CMSMS_ADMIN_INC', CMSMS_ADMIN . '/inc');
}

if (!defined('CMSMS_CLASS')) {
	define('CMSMS_CLASS', CMSMS_FRAMEWORK . '/class');
}

if (!defined('CMSMS_FUNCTION')) {
	define('CMSMS_FUNCTION', CMSMS_FRAMEWORK . '/function');
}



// Load Framework Parts
require_once(CMSMS_CLASS . '/Browser.php');

require_once(CMSMS_SETTINGS . '/cmsms-theme-settings.php');

require_once(CMSMS_OPTIONS . '/cmsms-theme-options.php');

require_once(CMSMS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMS_CLASS . '/twitteroauth.php');

require_once(CMSMS_CLASS . '/widgets.php');

require_once(CMSMS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMS_FUNCTION . '/likes.php');

require_once(CMSMS_FUNCTION . '/pagination.php');

require_once(CMSMS_FUNCTION . '/single-comment.php');

require_once(CMSMS_FUNCTION . '/theme-functions.php');

require_once(CMSMS_FUNCTION . '/theme-fonts.php');

require_once(CMSMS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMS_FUNCTION . '/template-functions.php');

require_once(CMSMS_FUNCTION . '/template-functions-post.php');

require_once(CMSMS_FUNCTION . '/template-functions-project.php');

require_once(CMSMS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMS_FUNCTION . '/template-functions-widgets.php');


// Woocommerce functions
if (class_exists('woocommerce')) {
	require_once(get_template_directory() . '/woocommerce/cmsms-woo-functions.php');
}


// Events functions
if (class_exists('Tribe__Events__Main')) {
	require_once(get_template_directory() . '/tribe-events/cmsms-events-functions.php');
}



// Load Theme Local File
if (!function_exists('cmsms_load_theme_textdomain')) {
	function cmsms_load_theme_textdomain() {
		$locale = get_locale();
		
		
		load_theme_textdomain('social-activity', CMSMS_FRAMEWORK . '/languages');
		
		
		$locale_file = CMSMS_FRAMEWORK . '/languages/' . $locale . '.php';
		
		
		if (is_readable($locale_file)) {
			require_once($locale_file);
		}
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'cmsms_load_theme_textdomain')) {
	add_action('after_setup_theme', 'cmsms_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('cmsms_theme_activation')) {
	function cmsms_theme_activation() {
		if (get_option('cmsms_active_theme') != CMSMS_SHORTNAME) {
			add_option('cmsms_active_theme', CMSMS_SHORTNAME, '', 'yes');
			
			
			cmsms_add_global_options();
			
			
			cmsms_add_global_icons();
			
			
			flush_rewrite_rules();
			
			
			wp_redirect(admin_url('admin.php?page=cmsms-settings&upgraded=true'));
		}
	}
}

add_action('after_switch_theme', 'cmsms_theme_activation');

// Framework Deactivation
if (!function_exists('cmsms_theme_deactivation')) {
	function cmsms_theme_deactivation() {
		delete_option('cmsms_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'cmsms_theme_deactivation')) {
	add_action('switch_theme', 'cmsms_theme_deactivation');
}

