<?php 
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version		1.2.3
 * 
 * Admin Panel Post, Project & Profile Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'social-activity');
	
	if (class_exists('Cmsms_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'social-activity');
	}
	
	if (class_exists('Cmsms_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'social-activity');
	}
	
	
	return $tabs;
}


function cmsms_options_single_sections() {
	$tab = cmsms_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'social-activity');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'social-activity');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'social-activity');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsms_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_layout', 
			'title' => __('Layout Type', 'social-activity'), 
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
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_title', 
			'title' => __('Post Title', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_date', 
			'title' => __('Post Date', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_cat', 
			'title' => __('Post Categories', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author', 
			'title' => __('Post Author', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_comment', 
			'title' => __('Post Comments', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_tag', 
			'title' => __('Post Tags', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_like', 
			'title' => __('Post Likes', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_nav_box', 
			'title' => __('Posts Navigation Box', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_share_box', 
			'title' => __('Sharing Box', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author_box', 
			'title' => __('About Author Box', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_more_posts_box', 
			'title' => __('More Posts Box', 'social-activity'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'social-activity') . '|related', 
				__('Show Popular Tab', 'social-activity') . '|popular', 
				__('Show Recent Tab', 'social-activity') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_r_p_l_number', 
			'title' => __('Related, Popular & Latest Posts Boxes Items Number', 'social-activity'), 
			'desc' => __('posts', 'social-activity'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_title', 
			'title' => __('Project Title', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_details_title', 
			'title' => __('Project Details Title', 'social-activity'), 
			'desc' => __('Enter a project details block title', 'social-activity'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_date', 
			'title' => __('Project Date', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_cat', 
			'title' => __('Project Categories', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_author', 
			'title' => __('Project Author', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_comment', 
			'title' => __('Project Comments', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_tag', 
			'title' => __('Project Tags', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_like', 
			'title' => __('Project Likes', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_link', 
			'title' => __('Project Link', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_share_box', 
			'title' => __('Sharing Box', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_nav_box', 
			'title' => __('Projects Navigation Box', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_author_box', 
			'title' => __('About Author Box', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_more_projects_box', 
			'title' => __('More Projects Box', 'social-activity'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'social-activity') . '|related', 
				__('Show Popular Tab', 'social-activity') . '|popular', 
				__('Show Recent Tab', 'social-activity') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_r_p_l_number', 
			'title' => __('Related, Popular & Latest Projects Boxes Items Number', 'social-activity'), 
			'desc' => __('projects', 'social-activity'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_slug', 
			'title' => __('Project Slug', 'social-activity'), 
			'desc' => __('Enter a page slug that should be used for your projects single item', 'social-activity'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_title', 
			'title' => __('Profile Title', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_details_title', 
			'title' => __('Profile Details Title', 'social-activity'), 
			'desc' => __('Enter a profile details block title', 'social-activity'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_cat', 
			'title' => __('Profile Categories', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_comment', 
			'title' => __('Profile Comments', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_nav_box', 
			'title' => __('Profiles Navigation Box', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_share_box', 
			'title' => __('Sharing Box', 'social-activity'), 
			'desc' => __('show', 'social-activity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_slug', 
			'title' => __('Profile Slug', 'social-activity'), 
			'desc' => __('Enter a page slug that should be used for your profiles single item', 'social-activity'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

