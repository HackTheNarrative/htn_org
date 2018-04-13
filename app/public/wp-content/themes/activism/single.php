<?php
/**
 * Template for single blog post
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
<section class="navbar-brand">
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
</section>
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
<article>
<?php include('meta.php'); ?>

<?php the_content();?>

<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'activism' ), 'after' => '</div>' ) ); ?>
<div class="postnavigation">
<div><?php previous_post_link( '&larr; %link' ); ?></div>
<div><?php next_post_link( '&rarr; %link' ); ?></div>
</div> 

</article>
<!-- ./post end-->

<!-- tags -->
<?php if(has_tag()): ?>
<div class="tags">
<?php the_tags(); ?>
</div>
<?php endif; ?>
<!-- comments -->
<?php if ( comments_open() || '0' != get_comments_number() ){
comments_template( '', true );
}
?>
<!-- comments end -->

<?php endwhile; else : ?>

<?php endif; ?>
		
</div>	

<div class="col-md-4"> 
<?php get_sidebar(); ?>
</div>	

</div>	
</div>
</div> 	

</div> 

<?php posts_nav_link(); ?> 

<?php get_footer(); ?>
