<?php
/************************************************************************
* Meta Boxes
*************************************************************************/
$prefix = 'its_';
$args = array();
$args['none'] = __('Attach Parallax', 'activism');
$test_select = new WP_Query( array( 'post_type' => 'parallax-sections', 'posts_per_page' => -1, 'order' => 'ASC' ));
if($test_select->have_posts()):  while($test_select->have_posts()) : $test_select->the_post();
$args[get_the_ID()] =  get_the_title();
 endwhile;
endif;

$args2 = array();
$args2['default'] = __('Use Default', 'activism');
$args2['none'] = __('None', 'activism');
$test_select = new WP_Query( array( 'post_type' => 'page-sections', 'posts_per_page' => -1, 'order' => 'ASC' ));
if($test_select->have_posts()):  while($test_select->have_posts()) : $test_select->the_post();

$args2[get_the_ID()] =  get_the_title();

 endwhile;
    endif;

$parallax_args = array();
$parallax_args['default'] = __('Use Default', 'activism');
$parallax_args['none'] = __('None', 'activism');

$parallax_ops = $parallax_args + $args;

$rt_itstheme_section_option_meta = array(
'id' => 'page-section-meta',
'title' => __('Section Customize Options','activism'),
'page' => 'page-sections',
'context' => 'normal',
'priority' => 'high',
'fields' => array(
     

array(
'name' => __('Attach Parallax Section', 'activism'),
 'desc' => __('If you want parallax section that you created to be attached to this page section.', 'activism'),
'id' => $prefix.'parallax_attach',
'type' => 'select-custom',
'std' => '',
'options' => $args,
),
 



)
);



add_action('admin_menu', 'add_section_meta_boxes');
function add_section_meta_boxes()
{
global  $rt_itstheme_section_option_meta;
add_meta_box($rt_itstheme_section_option_meta['id'], $rt_itstheme_section_option_meta['title'], 'show_section_options', $rt_itstheme_section_option_meta['page'], $rt_itstheme_section_option_meta['context'], $rt_itstheme_section_option_meta['priority']);
}

function show_section_options(){
global $rt_itstheme_section_option_meta, $post;
echo '<input type="hidden" name="meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';

echo '<table class="form-table">';

foreach ($rt_itstheme_section_option_meta['fields'] as $field) {
$meta = get_post_meta($post->ID, $field['id'], true);
switch ($field['type']) {
case 'select-custom':
echo '<tr>',
'<th style="width:20%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" color:#000; margin: 0; ">' . $field['desc'] . '</span></label></th>',
'<td>';
echo'<select name="' . $field['id'] . '">';
foreach ($field['options'] as $key => $option) {
 echo'<option';
if ($meta == $key) {
 echo ' selected="selected"';
}
echo' value="'.$key.'">' . $option . '</option>';
}
echo'</select>';


}

}

echo '</table>';
}

add_action('save_post', 'section_save_options');

function section_save_options($post_id)
{
global $rt_itstheme_section_option_meta,$post;
$stylenew = '';
if (isset($_POST['meta_box_nonce']) && !wp_verify_nonce($_POST['meta_box_nonce'], basename(__FILE__))) {
return $post_id;
    }

if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
return $post_id;
}
if (defined('DOING_AJAX') && DOING_AJAX)
 return;
if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
if (!current_user_can('edit_page', $post_id)) {
 return $post_id;
}
} elseif (!current_user_can('edit_post', $post_id)) {
return $post_id;
    }

 foreach ($rt_itstheme_section_option_meta['fields'] as $field) {
$old = get_post_meta($post_id, $field['id'], true);
if (isset($_POST[$field['id']])) {
$stylenew = $_POST[$field['id']];
$stylenew;
}
 if ($stylenew && $stylenew != $old) {
update_post_meta($post_id, $field['id'], $stylenew);

} elseif ('' == $stylenew && $old) {
delete_post_meta($post_id, $field['id'], $old);
}
    }



}




// for parallax section


$rt_itstheme_parallax_option_meta = array(
'id' => 'parallax-meta',
'title' => __('Parallax Customize Options', 'activism'),
'page' => 'parallax-sections',
 'context' => 'normal',
'priority' => 'high',
'fields' => array(
array(
'name' => __('Background Image', 'activism'),
'desc' => __('Upload background image for this section.', 'activism'),
 'id' => $prefix.'parallax_image',
"type" => "text",
'std' => ''
 ),
array(
'name' => '',
  'desc' => '',
 'id' => $prefix.'parallax_image_button',
'type' => 'button',
'std' => 'Browse'
),
array(
 'name' => __('Background Repeat Options', 'activism'),
  'desc' => __('Choose background option. Repeating background is default', 'activism'),
    'id' => $prefix.'parallax_repeat',
  'type' => 'select-custom',
'std' => 'none',
  'options' => array(
 'none' => 'Default',
'no-repeat' =>'No Repeat',
 'cover' => 'Cover'
 ),
        ),


    )
);


add_action('admin_menu', 'add_parallax_meta_boxes');
function add_parallax_meta_boxes()
{
global  $rt_itstheme_parallax_option_meta;
add_meta_box($rt_itstheme_parallax_option_meta['id'], $rt_itstheme_parallax_option_meta['title'], 'show_parallax_options', $rt_itstheme_parallax_option_meta['page'], $rt_itstheme_parallax_option_meta['context'], $rt_itstheme_parallax_option_meta['priority']);

}


function show_parallax_options()
{
global $rt_itstheme_parallax_option_meta, $post;
echo '<input type="hidden" name="meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
echo '<table class="form-table">';
foreach ($rt_itstheme_parallax_option_meta['fields'] as $field) {

$meta = get_post_meta($post->ID, $field['id'], true);
 switch ($field['type']) {
case 'text':
echo '<tr>',
'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#000;margin:0;">' . $field['desc'] . '</span></label></th>',
'<td>';
 echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta
: stripslashes(htmlspecialchars(($field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
 break;
case 'button':
echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '" value="Browse" />';
 echo     '</td>',
 '</tr>';
break;
 case 'select':
echo '<tr>',
'<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#999; margin:0;">' . $field['desc'] . '</span></label></th>',
'<td>';
 echo'<select name="' . $field['id'] . '">';
foreach ($field['options'] as $option) {
echo'<option';
if ($meta == $option) {
echo ' selected="selected"';
 }
echo'>' . $option . '</option>';
}
echo'</select>';
break;
case 'select-custom':
echo '<tr>',
 '<th style="width:25%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><span style=" display:block; color:#000; margin:0;">' . $field['desc'] . '</span></label></th>',
'<td>';
echo'<select name="' . $field['id'] . '">';

  foreach ($field['options'] as $key => $option) {

echo'<option';
 if ($meta == $key) {
echo ' selected="selected"';
}
 echo' value="'.$key.'">' . $option . '</option>';

  }
echo'</select>';
    break;

 }

    }

    echo '</table>';
}

add_action('save_post', 'paralaxsave');

function paralaxsave($post_id)
{
global $rt_itstheme_parallax_option_meta;
$stylenew = '';
if (isset($_POST['meta_box_nonce']) && !wp_verify_nonce($_POST['meta_box_nonce'], basename(__FILE__))) {
return $post_id;
}
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
 return $post_id;
}
if (defined('DOING_AJAX') && DOING_AJAX)
 return;

if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
if (!current_user_can('edit_page', $post_id)) {
   return $post_id;
 }
} elseif (!current_user_can('edit_post', $post_id)) {
return $post_id;
}
foreach ($rt_itstheme_parallax_option_meta['fields'] as $field) {
$old = get_post_meta($post_id, $field['id'], true);
if (isset($_POST[$field['id']])) {
 $stylenew = $_POST[$field['id']];
}
if ($stylenew && $stylenew != $old) {
update_post_meta($post_id, $field['id'], $stylenew);
} elseif ('' == $stylenew && $old) {
 delete_post_meta($post_id, $field['id'], $old);
  }
    }



}