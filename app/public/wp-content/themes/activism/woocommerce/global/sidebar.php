<?php
/**
 * Sidebar
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}?>


  <div class="sidebar widgets-style1">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <?php endif; ?>
  </div>

<div class="divider-space3">
</div>