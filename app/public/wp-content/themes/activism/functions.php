<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once(trailingslashit( get_template_directory() ) . 'class-tgm-plugin-activation.php');
add_action( 'tgmpa_register', 'rt_activism_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function rt_activism_register_required_plugins() {
/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a theme
		array(
			'name'     				=> 'Rt activismtheme functions', // The plugin name
			'slug'     				=> 'rt-activismtheme-functions', // The plugin slug (typically the folder name)
			'source'   				=> get_template_directory() . '/plugins/rt-activismtheme-functions.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
      'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		
    array(
			'name'     				=> 'Slider Revolution', // The plugin name
			'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
			'source'   				=> get_template_directory() . '/plugins/revslider.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
      'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		
		array(
			'name'     				=> 'Aqua page builder (updated)', // The plugin name
			'slug'     				=> 'page-builder', // The plugin slug (typically the folder name)
			'source'   				=> get_template_directory() . '/plugins/page-builder.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
      'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
                

		// This is an example of how to include a plugin from the WordPress Plugin Repository

		  array(
			'name' 		=> 'the-events-calendar',
			'slug' 		=> 'the-events-calendar',
			'required' 	=> false,
		),
                
    array(
			'name' 		=> 'contact-form-7',
			'slug' 		=> 'contact-form-7',
			'required' 	=> true,
		),
    array(
			'name' 		=> 'wordpress-easy-paypal-payment-or-donation-accept-plugin',
			'slug' 		=> 'wordpress-easy-paypal-payment-or-donation-accept-plugin',
			'required' 	=> false,
		),

    array(
			'name' 		=> 'font-awesome-more-icons',
			'slug' 		=> 'font-awesome-more-icons',
			'required' 	=> false,
		), 

    array(
			'name' 		=> esc_html__('WooCommerce', 'activism'),
			'slug' 		=> 'woocommerce',
			'required' 	=> false,
		),
    
    
	);

	// Change this to your theme text domain, used for internationalising strings
	$activism = 'tgmpa';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	);

	tgmpa( $plugins, $config );
}


/**********************************************************
* include metabox 
***********************************************************/

require_once (trailingslashit( get_template_directory() ) . 'meta-box/meta-box.php');
include (trailingslashit( get_template_directory() ) . 'assets/php/config-meta-boxes.php');
include (trailingslashit( get_template_directory() ) . 'assets/php/meta-boxes.php');
include (trailingslashit( get_template_directory() ) . 'assets/php/custom-styles.php');


/**********************************************************
* language support
***********************************************************/

function rt_activism_load_theme_textdomain() {
  load_theme_textdomain( 'activism', get_template_directory().'/languages' );
}
add_action( 'after_setup_theme', 'rt_activism_load_theme_textdomain' );


/**********************************************************
* woocommerce support
***********************************************************/
add_action( 'after_setup_theme', 'rt_activism_woocommerce_support' );
function rt_activism_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


/**********************************************************
* google fonts support
***********************************************************/

function rt_activism_fonts() {
$protocol = is_ssl() ? 'https' : 'http';
wp_enqueue_style( 'rt_activism-opensans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,700" );
}

add_action( 'wp_enqueue_scripts', 'rt_activism_fonts' );


/**********************************************************
* title tag support
***********************************************************/
add_theme_support( 'title-tag' );


/**********************************************************
* menu
***********************************************************/

register_nav_menu( 'primary-menu', __( 'Primary Menu', 'activism' ) );
register_nav_menu( 'header-menu', __( 'Header Menu', 'activism' ) );

function rt_activism_default_menu() {
    include (trailingslashit( get_template_directory() ) . 'nav-fallback.php' );
}


/**********************************************************
* support for shortcodes in excerpt 
***********************************************************/
add_filter('the_excerpt', 'do_shortcode');


/**********************************************************
* post width
***********************************************************/
if ( ! isset( $content_width ) ) $content_width = 900;


/******************************************************
* rss
*******************************************************/
add_theme_support( 'automatic-feed-links' );


/******************************************************
* enable image support
*******************************************************/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails', array( 'product', 'post', 'page','postsecond', 'homeblog', 'team', 'tribe_events' ) );      
}

if ( function_exists( 'add_image_size' ) ) { 

//one third - onethirdimage class for homepage blog
add_image_size( 'onethird-large', 351, 351, true ); 
add_image_size( 'onethird-medium', 440, 440, true); 
add_image_size( 'onethird-small', 210, 210, true ); 
add_image_size( 'onethird-thumb', 280, 280, true ); 

//one forth - oneforthimage class for team
add_image_size( 'oneforth-large', 254, 9999 ); 
add_image_size( 'oneforth-medium', 210, 9999); 
add_image_size( 'oneforth-small', 330, 9999 ); 
add_image_size( 'oneforth-thumb', 250, 9999 ); 

}

/************************************************************************
* Scripts and styles 
*************************************************************************/

/***function for jqery scripts***/


function rt_activism_scripts() {

wp_enqueue_style( 'style', get_stylesheet_uri() );

/** add/remove style.less file **/
if ( 'on' == get_theme_mod( 'stylelessfile' ))
  wp_enqueue_style( 'rt_activism_styleless', get_stylesheet_directory_uri() . '/style.less'  );
else;

if ( is_singular() ) wp_enqueue_script( "comment-reply" );

wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/js/masonry.js', array('jquery'), '1.0.0', true, '1.0.0', true );
wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/sticky.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/assets/js/colorbox.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'bx', get_template_directory_uri() . '/assets/js/bxslider.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'rt_activism_scripts' );


/************************************************************************
* customize theme
*************************************************************************/

function rt_activism_customize_register( $wp_customize ) {


//ADD STYLE.LESS FILE 
 $wp_customize->add_setting( 'stylelessfile' , array(
  'default'     => 'off',
  'transport'   => 'refresh',
  'sanitize_callback' => 'rt_activism_sanitize_radio',
) );
$wp_customize->add_control( 'stylelessfile', array(
  'label'        => esc_html__( 'Add style.less file', 'activism' ),
  'section'    => 'rt_stylelessfile_section',
  'settings'   => 'stylelessfile',
  'type'   => 'radio',
  'choices'    => array(
    'off' => __('style.less file removed from theme - default', 'activism' ),
    'on' => __('add style.less file in theme if wp-less plugin is activated and you want to make custom changes in style.less file', 'activism' )  
 ),
 ));
$wp_customize->add_section( 'rt_stylelessfile_section' , array(
  'title'      => esc_html__( 'Add style.less file', 'activism' ),  
) );


//customize copyright details
$wp_customize->add_setting( 'copyright_details' , array(
    'default'     => 'your copyright details',
    'transport'   => 'refresh',
    'sanitize_callback' => 'example_sanitize_text',
) );

$wp_customize->add_section( 'activism_copyright' , array(
    'title'      => __( 'Copyright Details', 'activism' ),
   
) );


$wp_customize->add_control( 'copyright_details', array(
	'label'        => __( 'Copyright', 'activism' ),
	'section'    => 'activism_copyright',
	'settings'   => 'copyright_details',
 ));


//customize logo
$wp_customize->add_setting( 'logo', array(
    'transport'   => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_section( 'activism_logo_section' , array(
    'title'       => __( 'Logo', 'activism' ),
    'priority'    => 30,
    'description' => __('Upload a logo to replace the default site name and description in the header', 'activism' ),
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
    'label'    => __( 'Logo', 'activism' ),
    'section'  => 'activism_logo_section',
    'settings' => 'logo',
) ) );

}

add_action( 'customize_register', 'rt_activism_customize_register' );


function example_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function rt_activism_sanitize_radio( $input ) {
  $valid = array(
    'off' => __('style.less file removed from theme - default', 'activism' ),
    'on' => __('add style.less file in theme if wp-less plugin is activated and you want to make custom changes in style.less file', 'activism' )  

  );
  if ( array_key_exists( $input, $valid ) ) {
    return $input;
  } else {
    return '';
  }
}

/************************************************************************
* Admin scripts and styles
*************************************************************************/


function rt_activism_register_admin_scripts() {
wp_enqueue_script( 'metaupload', get_template_directory_uri() . '/admin/assets/js/meta-box-upload.js' );
}

add_action( 'admin_enqueue_scripts', 'rt_activism_register_admin_scripts' );




/****************************************************************
* Sidebars and widget areas
*****************************************************************/


function rt_activism_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Blog Sidebar', 'activism' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears in posts and pages', 'activism' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer First', 'activism' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears in footer. For icons.', 'activism' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Second', 'activism' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears in footer', 'activism' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Third', 'activism' ),
		'id' => 'sidebar-4',
		'description' => __( 'Appears in footer', 'activism' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Forth', 'activism' ),
		'id' => 'sidebar-5',
		'description' => __( 'Appears in footer', 'activism' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Header First', 'activism' ),
		'id' => 'sidebar-6',
		'description' => __( 'Appears in header', 'activism' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Header Second', 'activism' ),
		'id' => 'sidebar-7',
		'description' => __( 'Appears in header', 'activism' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'rt_activism_widgets_init' );

/************************************************************************
* page/post navigation
*************************************************************************/


add_filter( 'wp_nav_menu_objects', 'nav_links' );
function nav_links( $abcs ) {
foreach  ($abcs as $abc ) {
if('custom' == $abc->type && !is_page()){
if( 1 == preg_match('/^#([^\/]+)$/', $abc->url )){
$abc->url = home_url( '/' ).$abc->url;
}

}
	
}

return $abcs;   
}


/************************************************************************
* for aqua pagebuilder plugin
*************************************************************************/


require_once('page-builder/page-builder.php');


/************************************************************************
* for excerpt in pages
*************************************************************************/
add_action( 'init', 'rt_activism_add_excerpts_to_pages' );
  function rt_activism_add_excerpts_to_pages() {
  add_post_type_support( 'page', 'excerpt' );
}
