<?php
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version		1.2.3
 * 
 * Search Form Template
 * Created by CMSMasters
 * 
 */
?>

<div class="search_bar_wrap">
	<form method="get" action="<?php echo home_url(); ?>">
		<p>
			<input name="s" placeholder="<?php esc_attr_e('enter keywords', 'social-activity'); ?>" value="" type="text" />
			<button type="submit" class="cmsms-icon-search-2"></button>
		</p>
	</form>
</div>

