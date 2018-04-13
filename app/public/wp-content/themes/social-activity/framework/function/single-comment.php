<?php 
/**
 * @package 	WordPress
 * @subpackage 	Social Activity
 * @version 	1.2.3
 * 
 * Custom Single Comment Template
 * Created by CMSMasters
 * 
 */


function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body">
			<div class="alignleft">
				<?php echo get_avatar($comment->comment_author_email, 100, get_option('avatar_default')) . "\n"; ?>
				<?php edit_comment_link(esc_attr__('Edit', 'social-activity'), '', ''); ?>
			</div>
			<div class="comment-content">
				<?php 
				comment_reply_link(array_merge($args, array( 
					'depth' => $depth, 
					'max_depth' => $args['max_depth'], 
					'reply_text' => esc_attr__('Reply', 'social-activity') 
				)));
				
				echo '<abbr class="published" title="' . esc_attr(get_comment_time('M d, Y')) . ', ' . esc_attr(get_comment_time('g:i a')) . '">' . 
					esc_html__('on', 'social-activity') . ' ' . get_comment_time('M d, Y') . ', ' . get_comment_time('g:i a') . 
				'</abbr>';
				?>
				<h2 class="fn"><?php echo get_comment_author_link(); ?></h2>
				<div class="cl"></div>
				<?php 
					comment_text();
					
					if ($comment->comment_approved == '0') {
						echo '<p>' . 
							'<em>' . esc_html__('Your comment is awaiting moderation.', 'social-activity') . '</em>' . 
						'</p>';
					}
				?>
			</div>
			<div class="cl"></div>
        </div>
    <?php 
}

