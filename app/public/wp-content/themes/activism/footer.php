<?php
/**
 * Template for footer
 *
 * 
 */
?>     
<footer class="bottom">
  <div class="bottominner widgets-style1 widgets-style2">
    <div class="container">
      <div class="row">
        <div class="col-lg-10">   
          <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-2' ); ?>	
          <?php endif; ?>
        </div>
        <div class="col-lg-2">   
          <div class="scrollbutton">
             <a href="javascript:scrollToTop()" title="go to top"><i class="fa fa-chevron-up"></i></a>
          </div> 
        </div>
      </div>
	 </div>
   </div>
   <div class="bottominner1 widgets-style1">
    <div class="container">
	  <div class="row">
        <div class="col-sm-4">   
          <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-3' ); ?>	
          <?php endif; ?>
        </div>
		  <div class="col-sm-4">   
          <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-4' ); ?>	
          <?php endif; ?>
        </div>
		  <div class="col-sm-4">   
          <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-5' ); ?>	
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>	
  <div class="wrapper100percent copyrightwrapper">
    <div class="col-lg-12 copyright">   
       <p><?php echo get_theme_mod('copyright_details'); ?></p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>