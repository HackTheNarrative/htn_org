<?php
/** Goals Block **/

if(!class_exists('AQ_Goals_Block')) {
class AQ_Goals_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('Goals One Column', 'activism'),
        'size' => 'span6',
    );

    parent::__construct('aq_goals_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array(
        'title' => '', 
        'text' => '',
	'icon' => '', 
    );

    // set default values (if not yet defined)
    $instance = wp_parse_args($instance, $defaults);

    // import each array key as variable with defined values
    extract($instance);	

?>


<p class="description half">
    <label for="<?php echo $this->get_field_id('title') ?>">
         <?php _e('Title', 'activism'); ?><br/>  
        <?php echo aq_field_input('title', $block_id, $title) ?>
    </label>
</p>

<p class="description half">
    <label for="<?php echo $this->get_field_id('text') ?>">
         <?php _e('Text', 'activism'); ?><br/>  
        <?php echo aq_field_textarea('text', $block_id, $text) ?>
    </label>
</p>

<div class="description half">
    <label for="<?php echo $this->get_field_id('icon') ?>">
        <?php _e('Upload icon', 'activism'); ?><br/>  
        <?php echo aq_field_upload('icon', $block_id, $icon) ?>
    </label>   
</div>


<?php
}

function block($instance) {
			extract($instance);
			
			echo 	
			'<div class="servicecolumnone startAnimation animated" data-animate="fadeInUp">'.
			'<div class="iconwrapper">'.
			'<img src="'.$icon.'" alt="">'.
			'</div>'.
			'<h4>'.($title).'</h4>'.
			'<p>'.($text).'</p>'.
			'</div>';
			
		    }
		
	
			
	}
}