<?php
/**
 * Template for displaying comments.
 *
 * 
 */
?>
<?php
if ( post_password_required() )
	return; ?>
<div id="comments" class="row">
<div class="">
	<?php if ( have_comments() ) : ?>
		<h3 class="commentsheadline">
			<?php
				printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'activism' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h3>
<div class="commenttext">
		<ol class="comment-list bloghomepagetextborder">
			<?php
				wp_list_comments( array(
                                     
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) );
			?>
		</ol><!-- .comment-list -->
</div>
		<?php
			
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'activism' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'activism' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'activism' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'activism' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

<div class="blogcommentform">
	<?php comment_form(); ?>
</div>

</div>
</div><!-- #comments -->