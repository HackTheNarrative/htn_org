<?php
/** Headlinebox Block **/

if(!class_exists('AQ_Main_Headline_Block')) {
class AQ_Main_Headline_Block extends AQ_Block {

function __construct() {

    $block_options = array (
        'name' => __('Main Headline', 'activism'),
        'size' => 'span12',
    );

    parent::__construct('aq_main_headline_block', $block_options);

}
function form($instance) {

    // default key/values array
    $defaults = array(
        'title' => '', 
	'categories' => ''
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

		<p class="description half last">
			<label for="">
				Left or centered header<br/>
				<?php 
				$my_options = array (
                'text-center' => 'Centered',
                'text-left' => 'Left'
               
                 );
                 echo aq_field_select('categories', $block_id, $my_options, $categories);
				 ?>
			</label>
		</p>

<?php
}

function block($instance) {
			extract($instance);
			
			echo 
			'<div class="mainheadlinewrapper startAnimation animated" data-animate="fadeInUp">'.
            '<div class="mainheadline '.($categories).'">'.
			'<h2>'.($title).'</h2>'.
			'</div>'.
            '</div>';
			
		    }
					
	}
}