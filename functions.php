<?php
/**
 * @package WordPress
 * @subpackage Scratch_Theme
 */
automatic_feed_links();

function my_function_admin_bar($content) {
	return ( current_user_can( 'administrator' ) ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


if(function_exists('register_sidebar'))
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="secondary_content_widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="secondary_content_widget_title">',
		'after_title' => '</h3>',
	));
	
	function get_excerpt_by_id($post_id){
		$the_post = get_post($post_id); //Gets post ID
		$the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
		$excerpt_length = 15; //Sets excerpt length by word count
		$the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
		$words = explode(' ', $the_excerpt, $excerpt_length + 1);
	if(count($words) > $excerpt_length) :
		array_pop($words);
		array_push($words, '…');
			$the_excerpt = implode(' ', $words);
	endif;
		$the_excerpt = '' . $the_excerpt . '';
		return $the_excerpt;
	}	

 
// Custom comment loop
	function custom_comment($comment, $args, $depth) {	
		$GLOBALS['comment'] = $comment;?>
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
					</li>
			<?php }
