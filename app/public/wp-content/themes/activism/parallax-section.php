<?php
/**
 * Template for parallax section
 *
 * 
 */?>
<section class="section3 <?php echo get_post_type();?>-<?php echo get_the_ID();?>" id="<?php echo get_post_type();?>-<?php echo get_the_ID();?>">
<div class="section3inner">
<?php the_content(); ?>
</div>
</section>