<?php
/**
 * Template for all single testimonials posts.
 *
 */
?>
<?php query_posts( array ( 'post_type' => 'rttestimonials', 'posts_per_page' => 100 ) ); ?>
 <?php if(have_posts()): while(have_posts()): the_post(); ?>


<?php the_content(); ?>

<?php endwhile; ?>

<?php endif; ?>
        