<?php
/** Homepage Blog Block **/

if(!class_exists('AQ_Homeblog_Block')) {
class AQ_Homeblog_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('Homepage blog block', 'activism'),
        'size' => 'span12',
    );

    parent::__construct('aq_homeblog_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array();

    // set default values (if not yet defined)
    $instance = wp_parse_args($instance, $defaults);

    // import each array key as variable with defined values
    extract($instance);	

?>

<div class="description">   
         <?php _e('This block output all homepage blog posts', 'activism'); ?><br/>       
</div>



<?php
}

function block($instance) {
			extract($instance);
			
			echo   

		   do_shortcode("[homeblog]");
					
	}
}
}