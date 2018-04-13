<?php
/** Team Block **/

if(!class_exists('AQ_Team_Block')) {
class AQ_Team_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('Team block', 'activism'),
        'size' => 'span12',
    );

    parent::__construct('aq_team_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array();

    // set default values 
    $instance = wp_parse_args($instance, $defaults);

    // import each array key as variable with defined values
    extract($instance);	

?>

<div class="description">   
         <?php _e('This block output all team members', 'activism'); ?><br/>       
</div>



<?php
}

function block($instance) {
			extract($instance);
			
			echo   

		   do_shortcode("[team]");
					
	}
}
}