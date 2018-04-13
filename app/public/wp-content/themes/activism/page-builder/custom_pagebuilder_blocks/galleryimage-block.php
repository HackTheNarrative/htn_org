<?php
/** Gallery image block **/

if(!class_exists('AQ_Galleryimage_Block')) {
class AQ_Galleryimage_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('Gallery image block', 'activism'),
        'size' => 'span6',
    );

    parent::__construct('aq_galleryimage_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array(
        'title' => '', 
        'text' => '',
		'image' => '', 
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


<p class="description half">
    <label for="<?php echo $this->get_field_id('title') ?>">
         <?php _e('title', 'activism'); ?><br/>
        <?php echo aq_field_input('title', $block_id, $title) ?>
    </label>
</p>

<p class="description half">
    <label for="<?php echo $this->get_field_id('text') ?>">
          <?php _e('text', 'activism'); ?><br/>
        <?php echo aq_field_textarea('text', $block_id, $text) ?>
    </label>
</p>


<?php
}

function block($instance) {
			extract($instance);
			
			echo 
			'<div class="grid1 startAnimation animated" data-animate="fadeInUp">'.
			'<figure class="effect-sadie">'.
			'<img src="'.$image.'" alt="">'.
			'<figcaption>'.
			'<h2>'.($title).'</h2>'.
			'<p>'.($text).'</p>'.
			'<a class="imagepopup" href="'.$image.'">'.'</a>'.
			'</figcaption>'.			
			'</figure>'.
			'</div>';
			
		    }		
				
	}
}