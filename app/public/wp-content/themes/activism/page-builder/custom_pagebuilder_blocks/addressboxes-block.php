<?php
/** Address Boxes Block **/

if(!class_exists('AQ_Addressboxes_Block')) {
class AQ_Addressboxes_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('Address boxes block', 'activism'),
        'size' => 'span6',
    );

    parent::__construct('aq_addressboxes_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array(
	'icon' => '',
        'title' => '', 
        'text' => '',
	'categories' => '',
    );

    // set default values (if not yet defined)
    $instance = wp_parse_args($instance, $defaults);

    // import each array key as variable with defined values
    extract($instance);	

?>

	<p class="description half last">
			<label for="">
 <?php _e('Address, phone or time icon', 'activism'); ?><br/>  
				<?php 
				$my_options = array (
                'fa fa-map-marker' => 'Address',
                'fa fa-phone' => 'Phone',
				 'fa fa-clock-o' => 'Time'
                 );
                 echo aq_field_select('categories', $block_id, $my_options, $categories);
				 ?>
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

           '<div class="address startAnimation animated" data-animate="fadeInUp">'.
		   '<i class="'.($categories).'"></i>'.
           '<ul>'.
           '<li>'.
		   '<h4>'.($title).'</h4>'.
		   '<p>'.($text).'</p>'.
		   '</li>'.
           '</ul>'.			
		   '</div>';
					
	}
}
}