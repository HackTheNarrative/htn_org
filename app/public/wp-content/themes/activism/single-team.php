<?php
/**
 * Template for all single team posts.
 *
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
'theme_location' => 'header-menu',
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


<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <div class="mainheadlinewrapperpage wrapper100percent">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="mainheadlinepage">
               <h1 class="entry-title"><?php the_title(); ?></h1>
               </div>
              </div>
             </div>
         </div>
  </div>
  
<div class="wrapper100percent contentwrapper">

<div class="container">
  
<div class="row">


<div class="col-md-8">
 
<?php the_post_thumbnail('post-large'); ?>

<!-- post -->

<?php the_content();?>

<!-- ./post end-->


<!-- comments -->
<?php if ( comments_open() || '0' != get_comments_number() ){
comments_template( '', true );
}
?>
<!-- comments end -->

</div>	


<div class="col-md-4"> 
<?php get_sidebar(); ?>
</div>	

</div>	
</div>
</div> 	
<?php endwhile; else : ?>


<?php endif; ?>

</div> 

<?php get_footer(); ?>
