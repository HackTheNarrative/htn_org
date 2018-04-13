<?php
/**
 * Displays footer site info
 *
 * @package Draco
 */

?>
<div class="site-info">
	<?php esc_html_e( 'Hack The Narrative', 'draco' ); ?> |  &copy; <?php echo date("Y"); ?><br><br>
	<?php if(!is_page('contact')) : ?>
		<a class="contact-footer" href="/contact">Contact Us</a>
	<?php endif; ?>		
</div><!-- .site-info -->

<style>
a.contact-footer {
	margin-top: 4rem;
}
</style>