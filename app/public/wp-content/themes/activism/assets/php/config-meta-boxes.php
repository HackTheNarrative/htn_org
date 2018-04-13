<?php
/**
* Registering meta boxes
*
* All the definitions of meta boxes are listed below with comments.
* Please read them CAREFULLY.
*
* You also should read the changelog to know what has been changed before updating.
*
* For more information, please visit:
* @link http://www.deluxeblogtips.com/meta-box/
*/
add_filter( 'rwmb_meta_boxes', 'activism_register_meta_boxes' );
/**
* Register meta boxes
*
* Remember to change "activism" to actual prefix in your project
*
* @return void
*/
function activism_register_meta_boxes( $meta_boxes )
{
/**
* prefix of meta keys (optional)
* Use underscore (_) at the beginning to make keys hidden
* Alt.: You also can make prefix empty to disable it
*/
// Better has an underscore as last sign
$prefix = 'activism_';
// 1st meta box
$meta_boxes[] = array(
// Meta box id, UNIQUE per meta box. Optional since 4.1.5
'id' => 'standard',
// Meta box title - Will appear at the drag and drop handle bar. Required.
'title' => __( 'Standard Fields', 'activism' ),
// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
'pages' => array( 'page-sections' ),
// Where the meta box appear: normal (default), advanced, side. Optional.
'context' => 'normal',
// Order of meta box: high (default), low. Optional.
'priority' => 'high',
// Auto save: true, false (default). Optional.
'autosave' => true,
// List of meta fields
'fields' => array(

// CHECKBOX
array(
'name' => __( 'Check this for boxed layout', 'activism' ),
'id' => "{$prefix}checkbox",
'type' => 'checkbox',
// Value can be 0 or 1
'std' => 1,
),
// CHECKBOX2
array(
'name' => __( 'Check this for color background', 'activism' ),
'id' => "{$prefix}checkbox2",
'type' => 'checkbox',
// Value can be 0 or 1
'std' => 0,
),
// CHECKBOX3
array(
'name' => __( 'Check/uncheck this for section space (top)', 'activism' ),
'id' => "{$prefix}sectionpadding",
'type' => 'checkbox',
// Value can be 0 or 1
'std' => 1,
),
// CHECKBOX4
array(
'name' => __( 'Check/uncheck this for section space (bottom)', 'activism' ),
'id' => "{$prefix}sectionpadding1",
'type' => 'checkbox',
// Value can be 0 or 1
'std' => 1,
),

),
);

return $meta_boxes;
}