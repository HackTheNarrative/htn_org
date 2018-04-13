<?php
/**
 * team template
 *
 */
 ?>

 <div class="row teamcolumnwrapper">
 
<?php query_posts( array ( 'post_type' => 'team', 'posts_per_page' => $limit,  'order' => $order, 'columnsteam' => $columnsteam) ); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="<?php echo $columnsteam ?> teamcolumn startAnimation animated" data-animate="fadeInUp">

<div class="oneforthimage">

<div class="oneforth-large">
<?php the_post_thumbnail('oneforth-large'); ?>
</div>
<div class="oneforth-medium">
<?php the_post_thumbnail('oneforth-medium'); ?>
</div>
<div class="oneforth-small">
<?php the_post_thumbnail('oneforth-small'); ?>
</div>
<div class="oneforth-thumb">
<?php the_post_thumbnail('oneforth-thumb'); ?>
</div>

</div>

<div class="teamcolumninner">

<h3><?php the_title(); ?></h3>
<?php the_excerpt(); ?>

</div>

</div>


<?php endwhile; ?>

<?php endif; wp_reset_query();?>
</div>

