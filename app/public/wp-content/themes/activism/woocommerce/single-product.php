<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header('shop'); ?>
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
  'menu_class' => 'nav navbar-nav pull-right'
)
);
?>
          </div>
        </div>
      </nav>
<!-- menu end -->
  <div class="mainheadlinewrapperpage wrapper100percent">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="mainheadlinepage">

               </div>
              </div>
             </div>
         </div>
  </div>
<div class="divider-space1">
</div>
<div class="wrapper100percent">
<div id="wrapperpages">
  <div class="container">
    <div class="row">

      <div class="col-md-9"> 

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
<div class="divider-space1">
</div>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

       
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
<div class="divider-space1">
</div> 
</div>
<div class="col-md-3">
		<?php 
	do_action( 'woocommerce_sidebar' );
        ?> 
</div>
<div class="divider-space1">
</div>   
    </div>
  </div>
</div>
</div>
<?php get_footer( 'shop' ); ?>