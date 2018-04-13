<?php

/*Template Name: Front Page Template No Slider
*/
get_header(); ?>


<!-- menu -->
      <nav class="navbar sticker wrapper100percent">
   
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" type="button">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<div class="navbar-brand">
<?php if ( get_theme_mod( 'logo' ) ) : ?>
    <div class='site-logo'>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    </div>
<?php else : ?>
    <hgroup>
        <h2 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h2>
        <h3 class='site-description'><?php bloginfo( 'description' ); ?></h3>
    </hgroup>
<?php endif; ?>
</div>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse"> 
          <div class="cl-effect-12">
            <?php wp_nav_menu( array( 
'theme_location' => 'primary-menu',
'menu' => 'top_menu',
'fallback_cb' => 'rt_activism_default_menu',
  'menu_class' => 'nav navbar-nav pull-right'
)
);
?>
          </div>
        </div>
      </nav>
<!-- menu end -->

<div id="wrapperpages">


<?php 
$args = array(
'posts_per_page' => -1,
'post_type' => 'page-sections',
'orderby' => 'menu_order',
);
$homeposts = new WP_Query($args);  
if($homeposts->have_posts()): while($homeposts->have_posts()) : $homeposts->the_post();
get_template_part('page-sections');
endwhile;
else:
get_template_part( 'no-results', 'home' );
endif;?>



</div>
<?php get_footer(); ?>