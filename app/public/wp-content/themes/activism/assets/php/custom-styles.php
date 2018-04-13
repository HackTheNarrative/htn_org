<?php
/**
 * Custom Page Section Styles
 */
global $rt_itstheme_data;

function changecustomcss(){

$functionone = '';



	
$functionone .= paralax_css();

				
if(!empty($functionone)){
$customcss ='';
$customcss .="\n<!-- custom page section style -->\n";
$customcss .="<style type=\"text/css\">\n";
$customcss .= $functionone;
$customcss .="\n\n</style>\n<!-- custom page section style end -->\n\n";
echo $customcss;
}




}

add_action('wp_head','changecustomcss'); 
function paralax_css(){
$pagesection = new WP_Query( array( 'post_type' => 'parallax-sections', 'posts_per_page' => -1, 'order' => 'ASC' ) ); 
$customizedcss = '';
$customizedcss .="\n/* paralax css \n== */\n";
if($pagesection->have_posts()): while($pagesection->have_posts()) : $pagesection->the_post();
$parallax_style_image = get_post_meta(get_the_ID(), 'its_parallax_image', TRUE);
$parallax_repeat = get_post_meta(get_the_ID(), 'its_parallax_repeat', TRUE);
$parallax_class = ".".get_post_type()."-".get_the_ID();
$parallax_id = "#".get_post_type()."-".get_the_ID();
if(!empty($parallax_size) && "600px" != $parallax_size){
$customizedcss .= $parallax_class."{\n\t";
$customizedcss .= "height:".$parallax_size.";\n";
}
if(!empty($parallax_style_image) || !empty($parallax_style_color)){
if(!empty($parallax_repeat) && 'none' != $parallax_repeat && 'cover' != $parallax_repeat){
$repeat = $parallax_repeat;
}else{
$repeat = 'repeat';
}
$customizedcss .= $parallax_id."{\n";
if(!empty($parallax_style_image)){
$customizedcss .= "\tbackground:url(\"".$parallax_style_image."\") ".$repeat." 50% -1px fixed transparent;\n";
}

if(!empty($parallax_repeat) && 'cover' == $parallax_repeat){
$customizedcss .= "\tbackground-size: cover !important; \n";
}

if(!empty($parallax_style_color) && empty($parallax_style_image)){
$customizedcss .= "\tbackground-image: none !important; \n";
$customizedcss .= "\tbackground-color:".$parallax_style_color.";\n";
}
$customizedcss .= "}\n";
}
			
endwhile;

return $customizedcss."\n\n";
endif;

}
