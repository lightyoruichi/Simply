<?php 

// Custom comment loop
	function custom_comment($comment, $args, $depth) {	
		$GLOBALS['comment'] = $comment;
?>
	<li class="comment clearfix id="comment_<?php comment_ID(); ?>">
			<?php if($comment->comment_approved == '0'): ?>
				<p class="awaiting_moderation">Your comment is awaiting moderation.</p>
			<?php endif;
			if($args['avatar_size'] != 0) {
			?>
			<?php echo get_avatar($comment, $args['avatar_size']); ?>
			<article>
				<div class="comment-meta">
					<h4 class="author"><a href="#"><?php comment_author_link() ?></a></h4>
					<p class="date"><?php comment_date('M jS, Y'); ?> ·</p>
					<a href="<?php comment_author_link() ?>" class="comment-reply-link"><?php comment_author_link() ?></a>
				</div>
				<div class="comment-body">
					<p><?php } comment_text(); ?></p>
				</div>			
			<p class="comment_reply"><?php echo comment_reply_link(array('before' => '', 'after' => '', 'reply_text' => 'Reply to this comment', 'depth' => $depth, 'max_depth' => $args['max_depth'])); ?></p>
			</article>
				<!-- / comment_<?php comment_ID(); ?> -->
			<?php } ?>
	</li>