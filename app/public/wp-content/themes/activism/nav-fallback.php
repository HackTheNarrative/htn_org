<!-- fallback header navigation for multipage site -->
          <?php wp_nav_menu( array( 
            'theme_location' => 'header-menu',
            'fallback_cb' => '',
            'menu' => 'top_menu',
            'menu_class' => 'nav navbar-nav pull-right'
            )
          );
          ?>