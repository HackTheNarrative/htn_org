<?php
/**
 * Template for posts by category
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

  <div class="mainheadlinewrapperpage wrapper100percent">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="mainheadlinepage">
               <h1><?php printf( __( 'Category Archives: %s', 'activism'), single_cat_title( '', false )); ?>		</h1>
               </div>
              </div>
             </div>
         </div>
  </div>

<div class="wrapper100percent contentwrapper"> 

<div class="container">
 <div class="row">
 
<div class="col-md-8">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article class="wrapper100percent marginbottom2">

<?php the_post_thumbnail('post-large'); ?>

<!-- post -->
<div class="wrapper100percent">
<div <?php post_class(); ?>>

<?php include('meta.php'); ?>

<h2>
<a href="<?php the_permalink();?>"><?php the_title();?></a>							
</h2>

<div class="wrapper100percent marginbottom1">
<?php 
$content = get_the_content();
$trimmed_content = wp_trim_words( $content, 35 );
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
<!-- ./post end-->
	
<?php endwhile; else : ?>


<?php endif; ?>


<div class="row">
<div class="col-lg-12 text-center pagination">
<?php
global $wp_query;
$big = 999999999;
echo paginate_links( array( 'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                            'format'  => '?paged=%#%',
                            'prev_text'    => __('&#10094;','activism'),
	                        'next_text'    => __('&#10095;','activism'),
                            'current' => max( 1, get_query_var( 'paged' ) ),
                            'total'   => $wp_query->max_num_pages) );
?>
</div>
</div>	

</div>

<div class="col-md-4"> 
<?php get_sidebar(); ?>
</div>	

</div>
</div>
</div>	
		
</div>	

<?php get_footer(); ?>