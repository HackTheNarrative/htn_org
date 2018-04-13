<?php
/**********************************************************
* Page Section custom post type
***********************************************************/

$currentid = get_the_ID();?>
<?php
$checkbox2 = rwmb_meta('activism_checkbox2'); 
$checkbox = rwmb_meta('activism_checkbox'); 
$sectionpadding = rwmb_meta('activism_sectionpadding'); 
$sectionpadding1 = rwmb_meta('activism_sectionpadding1'); 
?>
<div class="wrapper100percent section1 <?php if($checkbox2) echo "section1color"; ?> <?php echo get_post_type();?>-<?php the_ID();?> " id="<?php echo $post->post_name;?>">

<?php 
if($sectionpadding) 
  echo '<div class="sectionpadding"></div>';
  else ''; 
?>

<?php 
if($checkbox) 
  echo '<div class="container">';
  else ''; 
?>

<?php the_content(); ?>

<?php 
if($checkbox) 
  echo '</div>';
  else ''; 
?>

<?php 
if($sectionpadding1) 
  echo '<div class="sectionpadding"></div>';
  else ''; 
?>

</div> 

<div class="wrapper100percent"> 
<?php $themeparallax = get_post_meta($currentid, 'its_parallax_attach', TRUE);
if( $themeparallax && $themeparallax !='none' ){
global $rt_itstheme_post;
$rt_itstheme_post = $post;
$parallax_post = get_post($themeparallax); 
setup_postdata( $parallax_post );
$post = $parallax_post;
get_template_part('/parallax-section');
wp_reset_postdata();
}?>
</div> 

