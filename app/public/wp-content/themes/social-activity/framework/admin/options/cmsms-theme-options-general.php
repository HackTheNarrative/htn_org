<?php 
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version 	1.2.3
 * 
 * Post, Page, Project & Profile General Options
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_global_bg_col = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_col']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_col'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_col'] : '#fefefe';
$cmsms_global_bg_img_enable = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'] == 1) ? 'true' : 'false') : 'true';
$cmsms_global_bg_img = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_img']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_img'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_img'] : '';
$cmsms_global_bg_rep = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_rep']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'] : 'repeat';
$cmsms_global_bg_pos = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_pos']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'] : 'top center';
$cmsms_global_bg_att = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_att']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_att'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_att'] : 'scroll';
$cmsms_global_bg_size = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_size']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_size'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_size'] : 'auto';


$cmsms_global_heading_alignment = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_alignment']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_alignment'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_alignment'] : 'left';
$cmsms_global_heading_scheme = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_scheme']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'] : 'first';
$cmsms_global_heading_bg_img_enable = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] == 1) ? 'true' : 'false') : 'true';
$cmsms_global_heading_bg_img = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'] : '';
$cmsms_global_heading_bg_rep = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'] : 'repeat';
$cmsms_global_heading_bg_att = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'] : 'scroll';
$cmsms_global_heading_bg_size = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'] : 'cover';
$cmsms_global_heading_bg_color = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'] : '';
$cmsms_global_heading_bg_color_opacity = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color_opacity']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color_opacity'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color_opacity'] : '';
$cmsms_global_heading_height = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_height']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_height'] : '';


$cmsms_global_breadcrumbs = (isset($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs']) && $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] == 1) ? 'true' : 'false') : 'true';
$cmsms_global_breadcrumbs_alignment = (isset($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs_alignment']) && $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs_alignment'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs_alignment'] : 'right';


$custom_general_meta_fields = array( 
	array( 
		'id'	=> 'cmsms_bg', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Background', 'social-activity'), 
		'desc'	=> __('Use Default', 'social-activity'), 
		'id'	=> 'cmsms_bg_default', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> __('Background Color', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_col', 
		'type'	=> 'color', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_col 
	), 
	array( 
		'label'	=> __('Background Image Visibility', 'social-activity'), 
		'desc'	=> __('Show', 'social-activity'), 
		'id'	=> 'cmsms_bg_img_enable', 
		'type'	=> 'checkbox', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_img_enable 
	), 
	array( 
		'label'	=> __('Background Image', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_img', 
		'type'	=> 'image', 
		'hide'	=> 'true', 
		'cancel' => '', 
		'std'	=> $cmsms_global_bg_img, 
		'frame' => 'select', 
		'multiple' => false 
	), 
	array( 
		'label'	=> __('Background Repeat', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_rep', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_rep, 
		'options' => array( 
			'no-repeat' => array( 
				'label' => __('No Repeat', 'social-activity'), 
				'value'	=> 'no-repeat' 
			), 
			'repeat-x' => array( 
				'label' => __('Repeat Horizontally', 'social-activity'), 
				'value'	=> 'repeat-x' 
			), 
			'repeat-y' => array( 
				'label' => __('Repeat Vertically', 'social-activity'), 
				'value'	=> 'repeat-y' 
			), 
			'repeat' => array( 
				'label' => __('Repeat', 'social-activity'), 
				'value'	=> 'repeat' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Background Position', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_pos', 
		'type'	=> 'select', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_pos, 
		'options' => array( 
			'top left' => array( 
				'label' => __('Top Left', 'social-activity'), 
				'value'	=> 'top left' 
			), 
			'top center' => array( 
				'label' => __('Top Center', 'social-activity'), 
				'value'	=> 'top center' 
			), 
			'top right' => array( 
				'label' => __('Top Right', 'social-activity'), 
				'value'	=> 'top right' 
			), 
			'center left' => array( 
				'label' => __('Center Left', 'social-activity'), 
				'value'	=> 'center left' 
			), 
			'center center' => array( 
				'label' => __('Center Center', 'social-activity'), 
				'value'	=> 'center center' 
			), 
			'center right' => array( 
				'label' => __('Center Right', 'social-activity'), 
				'value'	=> 'center right' 
			), 
			'bottom left' => array( 
				'label' => __('Bottom Left', 'social-activity'), 
				'value'	=> 'bottom left' 
			), 
			'bottom center' => array( 
				'label' => __('Bottom Center', 'social-activity'), 
				'value'	=> 'bottom center' 
			), 
			'bottom right' => array( 
				'label' => __('Bottom Right', 'social-activity'), 
				'value'	=> 'bottom right' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Background Attachment', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_att', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_att, 
		'options' => array( 
			'scroll' => array( 
				'label' => __('Scroll', 'social-activity'), 
				'value'	=> 'scroll' 
			), 
			'fixed' => array( 
				'label' => __('Fixed', 'social-activity'), 
				'value'	=> 'fixed' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Background Size', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bg_size', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_bg_size, 
		'options' => array( 
			'auto' => array( 
				'label' => __('Auto', 'social-activity'), 
				'value'	=> 'auto' 
			), 
			'cover' => array( 
				'label' => __('Cover', 'social-activity'), 
				'value'	=> 'cover' 
			), 
			'contain' => array( 
				'label' => __('Contain', 'social-activity'), 
				'value'	=> 'contain' 
			)
		) 
	), 
	array( 
		'id'	=> 'cmsms_bg', 
		'type'	=> 'tab_finish' 
	), 
	array( 
		'id'	=> 'cmsms_heading', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Heading', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading', 
		'type'	=> 'radio', 
		'hide'	=> '', 
		'std'	=> 'disabled', 
		'options' => array( 
			'default' => array( 
				'label' => __('Default', 'social-activity'), 
				'value'	=> 'default' 
			), 
			'custom' => array( 
				'label' => __('Custom', 'social-activity'), 
				'value'	=> 'custom' 
			), 
			'disabled' => array( 
				'label' => __('Disabled', 'social-activity'), 
				'value'	=> 'disabled' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Heading Title', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_title', 
		'type'	=> 'text_long', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Heading Subtitle', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_subtitle', 
		'type'	=> 'textarea', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Heading Icon', 'social-activity'), 
		'desc'	=> __('Choose your custom icon for this heading', 'social-activity'), 
		'id'	=> 'cmsms_heading_icon', 
		'type'	=> 'icon', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Heading Alignment', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_alignment', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_alignment, 
		'options' => array( 
			'left' => array( 
				'label' => __('Left', 'social-activity'), 
				'value'	=> 'left' 
			), 
			'right' => array( 
				'label' => __('Right', 'social-activity'), 
				'value'	=> 'right' 
			), 
			'center' => array( 
				'label' => __('Center', 'social-activity'), 
				'value'	=> 'center' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Heading Color Scheme', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_scheme', 
		'type'	=> 'select_scheme', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_scheme 
	), 
	array( 
		'label'	=> __('Heading Background Image Visibility', 'social-activity'), 
		'desc'	=> __('Show', 'social-activity'), 
		'id'	=> 'cmsms_heading_bg_img_enable', 
		'type'	=> 'checkbox', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_bg_img_enable 
	), 
	array( 
		'label'	=> __('Heading Background Image', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_img', 
		'type'	=> 'image', 
		'hide'	=> 'true', 
		'cancel' => '', 
		'std'	=> $cmsms_global_heading_bg_img, 
		'frame' => 'select', 
		'multiple' => false 
	), 
	array( 
		'label'	=> __('Heading Background Repeat', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_rep', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_bg_rep, 
		'options' => array( 
			'no-repeat' => array( 
				'label' => __('No Repeat', 'social-activity'), 
				'value'	=> 'no-repeat' 
			), 
			'repeat-x' => array( 
				'label' => __('Repeat Horizontally', 'social-activity'), 
				'value'	=> 'repeat-x' 
			), 
			'repeat-y' => array( 
				'label' => __('Repeat Vertically', 'social-activity'), 
				'value'	=> 'repeat-y' 
			), 
			'repeat' => array( 
				'label' => __('Repeat', 'social-activity'), 
				'value'	=> 'repeat' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Heading Background Attachment', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_att', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_bg_att, 
		'options' => array( 
			'scroll' => array( 
				'label' => __('Scroll', 'social-activity'), 
				'value'	=> 'scroll' 
			), 
			'fixed' => array( 
				'label' => __('Fixed', 'social-activity'), 
				'value'	=> 'fixed' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Heading Background Size', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_heading_bg_size', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_bg_size, 
		'options' => array( 
			'auto' => array( 
				'label' => __('Auto', 'social-activity'), 
				'value'	=> 'auto' 
			), 
			'cover' => array( 
				'label' => __('Cover', 'social-activity'), 
				'value'	=> 'cover' 
			), 
			'contain' => array( 
				'label' => __('Contain', 'social-activity'), 
				'value'	=> 'contain' 
			)
		) 
	),
	array( 
		'label'	=> __('Heading Background Color Overlay', 'social-activity'), 
		'desc'	=> __('color transparency (percentage)', 'social-activity'), 
		'id'	=> 'cmsms_heading_bg_color', 
		'type'	=> 'rgba', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_bg_color 
	), 
	array( 
		'label'	=> __('Heading Height', 'social-activity'), 
		'desc'	=> __('pixels', 'social-activity'), 
		'id'	=> 'cmsms_heading_height', 
		'type'	=> 'number', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_heading_height, 
		'min' 	=> '0', 
		'max' 	=> '', 
		'step' 	=> '' 
	), 
	array( 
		'label'	=> __('Breadcrumbs', 'social-activity'), 
		'desc'	=> __('Show', 'social-activity'), 
		'id'	=> 'cmsms_breadcrumbs', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_breadcrumbs 
	), 
	array( 
		'label'	=> __('Breadcrumbs Alignment', 'social-activity'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_breadcrumbs_alignment', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> $cmsms_global_breadcrumbs_alignment, 
		'options' => array( 
			'left' => array( 
				'label' => __('Left', 'social-activity'), 
				'value'	=> 'left' 
			), 
			'right' => array( 
				'label' => __('Right', 'social-activity'), 
				'value'	=> 'right' 
			), 
			'center' => array( 
				'label' => __('Center', 'social-activity'), 
				'value'	=> 'center' 
			) 
		) 
	), 
	array( 
		'id'	=> 'cmsms_heading', 
		'type'	=> 'tab_finish' 
	) 
);


$custom_meta_fields = $custom_general_meta_fields;

