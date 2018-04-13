<?php
if(class_exists('AQ_Page_Builder')) {

    define('AQPB_CUSTOM_DIR', get_template_directory() . '/page-builder/');
    define('AQPB_CUSTOM_URI', get_template_directory_uri() . '/page-builder/');

   
     aq_unregister_block('AQ_Tabs_Block');
     aq_unregister_block('AQ_Alert_Block');
     aq_unregister_block('AQ_Richtext_Block');
     aq_unregister_block('AQ_Widgets_Block');


    //include the block files
     require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/goals-block.php');
     require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/headlinebox-block.php');
     require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/main-headline-block.php');
     require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/event-block.php');
     require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/event-with-image-block.php');
     require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/arrow-block.php');
     require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/faq-block.php');
     require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/addressboxes-block.php');
  require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/galleryimage-block.php');
  require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/team-block.php');
  require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/homeblog-block.php');
  require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/testimonials-block.php');
  require_once(AQPB_CUSTOM_DIR . 'custom_pagebuilder_blocks/team-block.php');

    //register the blocks
    aq_register_block('AQ_Goals_Block');
    aq_register_block('AQ_Headlinebox_Block');
    aq_register_block('AQ_Main_Headline_Block');
    aq_register_block('AQ_Event_Block');
    aq_register_block('AQ_Event_With_Image_Block');
    aq_register_block('AQ_Arrow_Block');
    aq_register_block('AQ_Faq_Block');
    aq_register_block('AQ_Addressboxes_Block');
    aq_register_block('AQ_Galleryimage_Block');
    aq_register_block('AQ_Team_Block');
  aq_register_block('AQ_Homeblog_Block');
  aq_register_block('AQ_Testimonials_Block');

  aq_register_block('AQ_Team_Block');

}
?>