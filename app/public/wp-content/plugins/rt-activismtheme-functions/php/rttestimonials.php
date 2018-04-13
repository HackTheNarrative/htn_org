<?php
/**
 * testimonials template custom post type
 *
 */
 ?>

 <div class="row">
 <div class="col-lg-12 quotewrapper startAnimation animated" data-animate="fadeInUp">
 <i class="fa fa-quote-right"></i>


 <ul class="bxtestimonials" id="bxtestimonials">
<?php query_posts( array ( 'post_type' => 'rttestimonials', 'posts_per_page' => 100 ) ); ?>

 <?php if(have_posts()): while(have_posts()): the_post(); ?>



<li>
<?php the_content();?>

<p class="cite"><span><?php the_title();?></span></p>
</li>


<?php endwhile; ?>

<?php endif; wp_reset_query();?>
        
</ul>

</div>
</div>
