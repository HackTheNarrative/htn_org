<?php
/** Headlinebox Block **/

if(!class_exists('AQ_Headlinebox_Block')) {
class AQ_Headlinebox_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('Headline box', 'activism'),
        'size' => 'span12',
    );

    parent::__construct('aq_headlinebox_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array(
        'title' => '', 
        'subtitle' => '',
    );

    // set default values (if not yet defined)
    $instance = wp_parse_args($instance, $defaults);

    // import each array key as variable with defined values
    extract($instance);	

?>


<p class="description">
    <label for="<?php echo $this->get_field_id('title') ?>">
         <?php _e('Title', 'activism'); ?><br/>  
        <?php echo aq_field_input('title', $block_id, $title) ?>
    </label>
</p>

<p class="description">
    <label for="<?php echo $this->get_field_id('subtitle') ?>">
         <?php _e('Subtitle', 'activism'); ?><br/>  
        <?php echo aq_field_input('subtitle', $block_id, $subtitle) ?>
    </label>
</p>

<?php
}

function block($instance) {
			extract($instance);	
			echo 
			'<div class="undersliderwrapper startAnimation animated" data-animate="fadeInUp">'.
			'<h3>'.($title).'</h3>'.
			'<h4>'.($subtitle).'</h4>'.
			'</div>';
                       
	
			
		    }
		
	
			
	}
}