<?php 
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version		1.2.3
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function cmsms_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'social-activity');
	$tabs['export'] = esc_attr__('Export', 'social-activity');
	
	
	return $tabs;
}


function cmsms_options_demo_sections() {
	$tab = cmsms_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'social-activity');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'social-activity');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsms_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => CMSMS_SHORTNAME . '_demo_import', 
			'title' => __('Theme Settings', 'social-activity'), 
			'desc' => __("Enter your theme settings data here and click 'Import' button", 'social-activity'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => CMSMS_SHORTNAME . '_demo_export', 
			'title' => __('Theme Settings', 'social-activity'), 
			'desc' => __("Click here to export your theme settings data to the file", 'social-activity'), 
			'type' => 'button', 
			'std' => __('Export Theme Settings', 'social-activity'), 
			'class' => 'cmsms-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

