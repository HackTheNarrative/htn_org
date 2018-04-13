<?php
/**
 * homepage blog template custom post type
 *
 */
 ?>


<div class="row" id="owl-demo1">

<?php query_posts( array ( 'post_type' => 'post', 'posts_per_page' => $limit,  'order' => $order, 'cat' => $category) ); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>

 
<div class="col-md-12 startAnimation animated" data-animate="fadeInUp">

<!-- post -->
<article class="marginbottom2 item">

<div class="onethirdimage">

<div class="onethird-large">
<?php the_post_thumbnail('onethird-large'); ?>
</div>
<div class="onethird-medium">
<?php the_post_thumbnail('onethird-medium'); ?>
</div>
<div class="onethird-small">
<?php the_post_thumbnail('onethird-small'); ?>
</div>
<div class="onethird-thumb">
<?php the_post_thumbnail('onethird-thumb'); ?>
</div>

</div>


<div <?php post_class(); ?>>

<div class="homeblogmeta meta">
<ul>
  <li> <i class="icon-time"></i> <?php echo get_the_date(get_option('date_format'))?></li>
  <li> <i class="icon-user"></i> <?php the_author_posts_link(); ?>  </li>
  
</ul>
</div>

<div class="bloghomeinner">
<h4>
<a href="<?php the_permalink();?>"><?php the_title();?></a>							
</h4>

<div class="wrapper100percent marginbottom1">
<?php 
$content = get_the_content();
$trimmed_content = wp_trim_words( $content, 18 );
echo $trimmed_content;
 ?>
</div>

<div class="btn-blog">
<?php
printf('<a href="%1s">%2s</a>',
get_permalink(),
__('Read More ', 'activism')
);
?>
</div>

</div>
</div>
</article>

</div>
<!-- ./post end-->

<?php endwhile; ?>

<?php endif; wp_reset_query();?>

</div>
