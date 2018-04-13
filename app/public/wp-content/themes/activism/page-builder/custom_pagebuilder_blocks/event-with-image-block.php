<?php
/** Event Block **/

if(!class_exists('AQ_Event_With_Image_Block')) {
class AQ_Event_With_Image_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('One Event Block With Image', 'activism'),
        'size' => 'span6',
    );

    parent::__construct('aq_event_with_image_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array(
        'image' => '', 
        'day' => '', 
	'month' => '', 
        'year' => '',
	'headline' => '', 
	    'place' => '', 
	    'time' => '', 
	    'text' => '', 
	    'link' => '',
	    'url' => '', 
    );	

    // set default values (if not yet defined)
    $instance = wp_parse_args($instance, $defaults);

    // import each array key as variable with defined values
    extract($instance);	

?>

<div class="description">
    <label for="<?php echo $this->get_field_id('image') ?>">
         <?php _e('upload image', 'activism'); ?><br/>
        <?php echo aq_field_upload('image', $block_id, $image) ?>
    </label>   
</div>


<p class="description">
    <label for="<?php echo $this->get_field_id('day') ?>">
         <?php _e('Day(circle)', 'activism'); ?><br/>  
        <?php echo aq_field_input('day', $block_id, $day) ?>
    </label>
</p>

<p class="description">
    <label for="<?php echo $this->get_field_id('month') ?>">
        <?php _e('Month(circle)', 'activism'); ?><br/>  
        <?php echo aq_field_input('month', $block_id, $month) ?>
    </label>
</p>

<p class="description">
    <label for="<?php echo $this->get_field_id('year') ?>">
         <?php _e('Year(circle)', 'activism'); ?><br/>  
        <?php echo aq_field_input('year', $block_id, $year) ?>
    </label>
</p>

<p class="description">
    <label for="<?php echo $this->get_field_id('headline') ?>">
        <?php _e('Headline', 'activism'); ?><br/>  
        <?php echo aq_field_input('headline', $block_id, $headline) ?>
    </label>
</p>
<p class="description">
    <label for="<?php echo $this->get_field_id('text') ?>">
         <?php _e('Text', 'activism'); ?><br/>  
        <?php echo aq_field_textarea('text', $block_id, $text) ?>
    </label>
</p>
<p class="description">
    <label for="<?php echo $this->get_field_id('place') ?>">
         <?php _e('Place', 'activism'); ?><br/>  
        <?php echo aq_field_input('place', $block_id, $place) ?>
    </label>
</p>
<p class="description">
    <label for="<?php echo $this->get_field_id('time') ?>">
        <?php _e('Time', 'activism'); ?><br/>  
        <?php echo aq_field_input('time', $block_id, $time) ?>
    </label>
</p>

<p class="description">
    <label for="<?php echo $this->get_field_id('link') ?>">
         <?php _e('Link text', 'activism'); ?><br/>  
        <?php echo aq_field_input('link', $block_id, $link) ?>
    </label>
</p>
<p class="description">
    <label for="<?php echo $this->get_field_id('url') ?>">
         <?php _e('Link url', 'activism'); ?><br/>  
        <?php echo aq_field_input('url', $block_id, $url) ?>
    </label>
</p>



<?php
}

function block($instance) {
			extract($instance);
			
			echo 	
			'<div class="oneevent startAnimation animated" data-animate="fadeInUp">'.
			'<img src="'.($image).'" alt="">'.
                        '<div class="eventsdate">'.
			'<p class="eventsdateday">'.'<span>'.($day).'</span>'.'</p>'.
			'<p>'.($month).'</p>'.
			'<p>'.($year).'</p>'.		
			'</div>'.
			'<div class="eventstext">'.
			'<h4>'.($headline).'</h4>'.
			'<ul>'.
			'<li>'. __('Place', 'activism'). '<b> '.($place).'</b></li>'.
			'<li>'. __('Time', 'activism'). '<b> '.($time).'</b></li>'.
		        '</ul>'.
			'<p>'.($text).'</p>'.
			'<a class="eventslink" href="'.($url).'">'.($link).'</a>'.
			'</div>'.
			'</div>';
			
		    }
					
	}
}