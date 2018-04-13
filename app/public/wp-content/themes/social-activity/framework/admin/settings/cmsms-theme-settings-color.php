<?php 
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version 	1.2.3
 * 
 * Admin Panel Colors Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_color_tabs() {
	$tabs = array();
	
	
	foreach (cmsms_all_color_schemes_list() as $key => $value) {
		$tabs[$key] = $value;
	}
	
	
	return $tabs;
}



function cmsms_options_color_sections() {
	$tab = cmsms_get_the_tab();
	
	
	$schemes = cmsms_all_color_schemes_list();
	
	
	$sections = array();
	
	
	$sections[$tab . '_section'] = $schemes[$tab] . ' ' . __('Color Scheme Options', 'social-activity');
	
	
	return $sections;
} 



function cmsms_options_color_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	
	$defaults = cmsms_color_schemes_defaults();
	
	
	$options = array();
	
	
	if ($tab == 'header' || $tab == 'header_bottom') { // Header & Header Bottom
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Text Font Color', 'social-activity'), 
			'desc' => __('Font color for header text', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Font Color', 'social-activity'), 
			'desc' => __('Font color for header headings, links, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Rollover Font Color', 'social-activity'), 
			'desc' => __('Font color for header links rollovers, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_subtitle', 
			'title' => __('Subtitle Font Color', 'social-activity'), 
			'desc' => __('Font color for navigation subtitle, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Background Color', 'social-activity'), 
			'desc' => __('Header block background color', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover_bg', 
			'title' => __('Rollover Background Color', 'social-activity'), 
			'desc' => __('Background color for main navigation top level links rollovers and some other elements', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
			'title' => __('Border Color', 'social-activity'), 
			'desc' => __('Color for borders in header block', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => __('Dropdown Links Color', 'social-activity'), 
			'desc' => __('Links color for header main navigation dropdown', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => __('Dropdown Rollover Font Color', 'social-activity'), 
			'desc' => __('Font color for header links rollovers in main navigation dropdown, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_subtitle', 
			'title' => __('Dropdown Subtitle Font Color', 'social-activity'), 
			'desc' => __('Font color for navigation dropdown subtitle, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => __('Dropdown Background Color', 'social-activity'), 
			'desc' => __('Header block background color for main navigation dropdown', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_hover_bg', 
			'title' => __('Dropdown Rollover Background Color', 'social-activity'), 
			'desc' => __('Background color for main navigation dropdown links rollovers and some other elements', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => __('Dropdown Border Color', 'social-activity'), 
			'desc' => __('Color for borders for main navigation dropdown in header block ', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_shadow', 
			'title' => __('Dropdown Shadow', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_shadow_opacity', 
			'title' => __('Dropdown Shadow Opacity', 'social-activity'), 
			'desc' => '', 
			'type' => 'number', 
			'std' => '2', 
			'min' => '0', 
			'max' => '100' 
		);
	} elseif ($tab == 'header_top') { // Header Top
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Content Font Color', 'social-activity'), 
			'desc' => __('Font color for header top main content, headings, links, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Font Color', 'social-activity'), 
			'desc' => __('Font color for header top headings, links, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Rollover Font Color', 'social-activity'), 
			'desc' => __('Font color for header top links rollovers, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Background Color', 'social-activity'), 
			'desc' => __('Header top block background color', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
			'title' => __('Border Color', 'social-activity'), 
			'desc' => __('Color for borders in header top block', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => __('Dropdown Links Color', 'social-activity'), 
			'desc' => __('Links color for header top main navigation dropdown', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => __('Dropdown Rollover Font Color', 'social-activity'), 
			'desc' => __('Font color for header top links rollovers in main navigation dropdown, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => __('Dropdown Background Color', 'social-activity'), 
			'desc' => __('Header top block background color for main navigation dropdown', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => __('Dropdown Border Color', 'social-activity'), 
			'desc' => __('Color for borders for main navigation dropdown in header top block ', 'social-activity'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_shadow', 
			'title' => __('Dropdown Shadow', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_shadow_opacity', 
			'title' => __('Dropdown Shadow Opacity', 'social-activity'), 
			'desc' => '', 
			'type' => 'number', 
			'std' => '80', 
			'min' => '0', 
			'max' => '100' 
		);
	} else { // Other
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Main Content Font Color', 'social-activity'), 
			'desc' => __('Font color for main content', 'social-activity'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['color'] : $defaults['default']['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Color', 'social-activity'), 
			'desc' => __('Color for links and some other elements (e.g. buttons, icon boxes, ets.)', 'social-activity'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['link'] : $defaults['default']['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Highlight Color', 'social-activity'), 
			'desc' => __('Color for links rollovers, etc', 'social-activity'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['hover'] : $defaults['default']['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_heading', 
			'title' => __('Headings Color', 'social-activity'), 
			'desc' => __('Color for headings and some other elements', 'social-activity'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['heading'] : $defaults['default']['heading'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Main Background Color', 'social-activity'), 
			'desc' => __('Main background color for some elements (e.g. tabs, toggles, ets.)', 'social-activity'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['bg'] : $defaults['default']['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_alternate', 
			'title' => __('Alternate Background Color', 'social-activity'), 
			'desc' => __('Alternate background color for some elements (e.g. quotes, form fields, ets.)', 'social-activity'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['alternate'] : $defaults['default']['alternate'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
			'title' => __('Borders Color', 'social-activity'), 
			'desc' => __('Color for borders (e.g. dividers, form fields, ets.)', 'social-activity'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['border'] : $defaults['default']['border'] 
		);
	}
	
	
	return $options;	
}

