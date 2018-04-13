<?php
/** FAQ Block **/

if(!class_exists('AQ_Faq_Block')) {
class AQ_Faq_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('FAQ block', 'activism'),
        'size' => 'span6',
    );

    parent::__construct('aq_faq_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array(
	 'numberr' => '',
        'title' => '', 
        'text' => '',
    );

    // set default values (if not yet defined)
    $instance = wp_parse_args($instance, $defaults);

    // import each array key as variable with defined values
    extract($instance);	

?>

<p class="description half">
    <label for="<?php echo $this->get_field_id('numberr') ?>">
         <?php _e('Number', 'activism'); ?><br/>  
        <?php echo aq_field_input('numberr', $block_id, $numberr) ?>
    </label>
</p>


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


<?php
}

function block($instance) {
			extract($instance);
			
			echo   

           '<div class="onelist faqblock startAnimation animated" data-animate="fadeInUp">'.
		   '<div class="faqicon">'.
		   '<p>'.($numberr).'</p>'.
           '</div>'.
           '<div class="faqtext">'.
		   '<h4>'.($title).'</h4>'.
		   '<p>'.($text).'</p>'.
		   '</div>'.	
		   '</div>';
			
		    }
					
	}
}