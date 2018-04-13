<?php
/*
Plugin Name: Rt-activismtheme-functions
Plugin URI: http://themeforest.net/user/rayoflightt
Description: Shortcodes and custom post types for Activism - Premium WordPress Theme
Version: 2.2
Author: Jelena (rayoflightthemes.com)
Author http://themeforest.net/user/rayoflightt
License: http://themeforest.net/
*/
/********************************************************
* Custom Post Types
*********************************************************/
add_action('init', 'rt_activismtheme_one_page_section'); 

function rt_activismtheme_one_page_section()  {  
  $labels = array(  
    'name' => __('Page Sections', 'activism'),  
    'singular_name' => __('Page Sections', 'activism'),  
    'add_new' => __('Add New Section', 'activism'),  
    'add_new_item' => __('Add New Section', 'activism'),  
    'edit_item' => __('Edit section', 'activism'),  
    'new_item' => __('New section', 'activism'),  
    'view_item' => __('View section', 'activism'),  
    'search_items' => __('Search sections', 'activism'),  
    'not_found' =>  __('No sections found', 'activism'),  
    'not_found_in_trash' => __('No sections found in Trash', 'activism'),  
    'parent_item_colon' => '' 
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => false,  
    'show_ui' => true,  
    'query_var' => true,
    'rewrite' => true,  
    'capability_type' => 'post',
    'show_in_nav_menus' => true,  	 
    'hierarchical' => false, 
    'exclude_from_search' => true,	 
    'menu_position' => 2, 
    'supports' => array( 'title', 'editor')  
  );  
  register_post_type('page-sections',$args);  
} 



add_action('init', 'rt_activismtheme_one_page_parallax');  

function rt_activismtheme_one_page_parallax()  {  
  $labels = array(  
    'name' => __('Parallax Sections', 'activism'),  
    'singular_name' => __('Parallax Sections', 'activism'),  
    'add_new' => __('Add New Parallax', 'activism'),  
    'add_new_item' => __('Add New Parallax', 'activism'),  
    'edit_item' => __('Edit parallax', 'activism'),  
    'new_item' => __('New parallax', 'activism'),  
    'view_item' => __('View parallax', 'activism'),  
    'search_items' => __('Search parallax', 'activism'),  
    'not_found' =>  __('No parallax found', 'activism'),  
    'not_found_in_trash' => __('No parallax found in Trash', 'activism'),  
    'parent_item_colon' => ''  
  );  
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => false,  
    'show_ui' => true,  
    'query_var' => true,  
    'rewrite' => true,  
    'capability_type' => 'post', 
    'show_in_nav_menus' => false,    
    'hierarchical' => false, 
    'exclude_from_search' => true,   
    'menu_position' => 3,  
    'supports' => array('title', 'editor')  
  );  
  register_post_type('parallax-sections',$args);  
} 


add_action('init', 'rt_activismtheme_testimonials');  

function rt_activismtheme_testimonials()  {  
  $labels = array(  
    'name' => __('Testimonials', 'activism'),  
    'singular_name' => __('Testimonials Sections', 'activism'),  
    'add_new' => __('Add New testimonial', 'activism'),  
    'add_new_item' => __('Add New testimonial', 'activism'),  
    'edit_item' => __('Edit testimonial', 'activism'),  
    'new_item' => __('New testimonial', 'activism'),  
    'view_item' => __('View testimonial', 'activism'),  
    'search_items' => __('Search testimonial', 'activism'),  
    'not_found' =>  __('No testimonial found', 'activism'),  
    'not_found_in_trash' => __('No testimonial found in Trash', 'activism'),  
    'parent_item_colon' => ''  
  );  
  
  $args = array( 
    'publicly_queryable' => false,   
    'labels' => $labels,  
    'public' => true,  
    'show_ui' => true,  
    'query_var' => true,  
    'rewrite' => true,  
    'capability_type' => 'post', 
    'show_in_nav_menus' => false,    
    'hierarchical' => false, 
    'exclude_from_search' => true,   
    'menu_position' => 3,  
    'supports' => array('title', 'editor')  
  );  
  register_post_type('rttestimonials',$args);  
} 


    add_action( 'init', 'rt_activismtheme_register_cpt_team' );
    function rt_activismtheme_register_cpt_team() {
    $labels = array(
    'name' => __( 'team', 'activism' ),
    'singular_name' => __( 'team', 'activism' ),
    'add_new' => __( 'Add New', 'activism' ),
    'add_new_item' => __( 'Add New team', 'activism' ),
    'edit_item' => __( 'Edit team', 'activism' ),
    'new_item' => __( 'New team', 'activism' ),
    'view_item' => __( 'View team', 'activism' ),
    'search_items' => __( 'Search team', 'activism' ),
    'not_found' => __( 'No team found', 'activism' ), 
    'not_found_in_trash' => __( 'No team found in Trash', 'activism' ),
    'parent_item_colon' => __( 'Parent team:', 'activism' ),
    'menu_name' => __( 'Team', 'activism' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'editor', 'thumbnail', 'title', 'excerpt' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array('slug' => 'team','with_front' => false), 
    'capability_type' => 'post'
    );
    register_post_type( 'team', $args );
    }

register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'rtactivismtheme_functions_flush_rewrites' );
function rtactivismtheme_functions_flush_rewrites() {
  register_post_type('page-sections',$args); 
  register_post_type('parallax-sections',$args);  
  register_post_type('rttestimonials',$args);  
  register_post_type('team',$args);   
flush_rewrite_rules();
} 

/**********************************************************
 * Shortcodes  
 *
 ***********************************************************/ 

/******************
 * Events query  [rt_events limit="4" order="DESC"]
 ******************/

function rt_layersactivism_events( $atts, $content = null ){
	
	$atts = extract(shortcode_atts(array(
	'limit' => 4,
	'order' => 'DESC'
   ),$atts));
   
	ob_start();	
	include('php/events.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_events','rt_layersactivism_events');


/******************
 * Events timeline query  [events_timeline limit="" order="" readmore="read more"]
 *
 ******************/

function rt_activismtheme_events( $atts, $content = null ){
	
	$atts = extract(shortcode_atts(array(
	'limit' => 5,
	'order' => 'DESC',
  'readmore' => 'read more'
   ),$atts));
   
	ob_start();	
	include('php/events-timeline.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('events_timeline','rt_activismtheme_events');


/************************************************************************
* home blog section [homeblog category="" limit="" order=""]*
*************************************************************************/

function rt_activismtheme_homeblog( $atts, $content = null ) {

	$atts = extract(shortcode_atts(array(
	'limit' => 100,
	'order' => 'DESC',
    'category' => ''
   ),$atts));
	
	ob_start();	
	include('php/homeblog.php');
	$content = ob_get_clean();
    return $content;

}
add_shortcode('homeblog','rt_activismtheme_homeblog');


/************************************************************************
* testimonials section [activismtheme_testimonials]
*************************************************************************/

function rt_activismtheme_testimonials1( $atts, $content = null ) {

	ob_start();	
	include('php/rttestimonials.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('activismtheme_testimonials','rt_activismtheme_testimonials1');


/************************************************************************
* team  [team limit="" order="" columnsteam=""]*
*************************************************************************/

function rt_activismtheme_team( $atts, $content = null ) {
	
	$atts = extract(shortcode_atts(array(
	'limit' => 100,
	'order' => 'DESC',
	'columnsteam' => 'col-lg-3'
  
   ),$atts));
	

	ob_start();	
	include('php/team.php');
	$content = ob_get_clean();
    return $content;

}
add_shortcode('team','rt_activismtheme_team');



/************************************************************************
* button color [button_color url="" content="" target=""]*
*************************************************************************/

function rt_activismtheme_button_color( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '#',
         'content' => '',
	'target' => '_blank',


	),$atts));

	return "

<div class=\"btn-color startAnimation animated\" data-animate=\"fadeInUp\">
<a href=\"".$url."\" target=\"".$target."\">".$content."</a>
</div>";
}
add_shortcode('button_color','rt_activismtheme_button_color');


/************************************************************************
* button dark [button_dark url="" content="" target=""]*
*************************************************************************/

function rt_activismtheme_button_dark( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '#',
         'content' => '',
	'target' => '_blank'

	),$atts));

	return "

<div class=\"btn-dark startAnimation animated\" data-animate=\"fadeInUp\">
<a href=\"".$url."\" target=\"".$target."\">".$content."</a>
</div>";
}
add_shortcode('button_dark','rt_activismtheme_button_dark');



/************************************************************************
* button color donation [button_color_donation url="" content="" target=""]*
*************************************************************************/

function rt_activismtheme_button_color_donation( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '#',
         'content' => '',
	'target' => '_blank',

	),$atts));

	return "

<div class=\"wrapper100percent startAnimation animated\" data-animate=\"fadeInUp\">
<div class=\"btn-donation\">
<a href=\"".$url."\" target=\"".$target."\">
<i class=\"fa fa-money\"></i>
".$content."
</a>
</div></div>";
}
add_shortcode('button_color_donation','rt_activismtheme_button_color_donation');



/************************************************************************
* button color arrow [button_color_arrow icon="" url="" content="" target=""]*
*************************************************************************/

function rt_activismtheme_button_color_arrow( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '#',
         'content' => '',
	'target' => '_blank',
	'icon' => 'fa-arrow-right',
	),$atts));

	return "

<div class=\"wrapper100percent startAnimation animated\" data-animate=\"fadeInUp\">
<div class=\"btn-donation\">
<a href=\"".$url."\" target=\"".$target."\">
<i class=\"fa ".$icon."\"></i>
".$content."
</a>
</div></div>";
}
add_shortcode('button_color_arrow','rt_activismtheme_button_color_arrow');




/******** Shortcodes for Bootstrap columns *******/


/************************************************************************
*  text container //[container]content[/container]
*************************************************************************/

function rt_psytheme_container( $atts, $content = null ) {

	return "<div class=\"container\"><div class=\"row\">".do_shortcode($content)."</div></div>";

}
add_shortcode('container','rt_psytheme_container');


/************************************************************************
*  one //
[container][one]content[/one][/container]
*************************************************************************/

function rt_psytheme_one( $atts, $content = null ) {

	return "<div class=\"col-lg-12\">".do_shortcode($content)."</div>";

}
add_shortcode('one','rt_psytheme_one');



/************************************************************************
*  one third //
[container][one_third]content[/one_third][one_third]content[/one_third][one_third]content[/one_third][/container]
*************************************************************************/

function rt_psytheme_one_third( $atts, $content = null ) {

	return "<div class=\"col-lg-4\">".do_shortcode($content)."</div>";

}
add_shortcode('one_third','rt_psytheme_one_third');



/************************************************************************
*  one forth //
[container][one_forth]content[/one_forth][one_forth]content[/one_forth][one_forth]content[/one_forth][/container]
*************************************************************************/

function rt_psytheme_one_forth( $atts, $content = null ) {

	return "<div class=\"col-lg-3\">".do_shortcode($content)."</div>";

}
add_shortcode('one_forth','rt_psytheme_one_forth');



/************************************************************************
*  one half //
[container][one_half]content[/one_half][one_half]content[/one_half][one_half]content[/one_half][/container]
*************************************************************************/

function rt_psytheme_one_half( $atts, $content = null ) {

	return "<div class=\"col-lg-6\">".do_shortcode($content)."</div>";

}
add_shortcode('one_half','rt_psytheme_one_half');



