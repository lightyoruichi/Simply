<?php
/**
 * @package WordPress
 * @subpackage Scratch_Theme
 */
get_header();
?>
		
		<section id="main" class="container clearfix">
			<section id="blog" class="three-fourths clearfix">
		<?php
			if(have_posts()):
			while(have_posts()):
			the_post();
		?>
			<article class="entry clearfix">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta">
				<span class="calender"><?php echo get_the_date(); ?></span>
					<span class="comments"><a href="#"><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?></a></span>
					<span class="user"><a href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>"><?php the_author(); ?></a></span>
				</div>
		<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "medium"); ?>
		<a href="<?php echo wp_get_attachment_url($post->id); ?>"><img src="<?php echo $att_image[0];?>" alt="<?php the_title(); ?>" class="entry-image" /></a>
		<?php endif; ?>
		<div class="entry-body">
			<p><?php the_content(__('(more...)')); ?></p>
			</div>
		</article>
		<?php
		endwhile;
		endif;
		posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;'));
		?>
		<!-- / primary_content -->
		<?php get_sidebar();?>
		</section><!--END #main-->
		<?php get_footer();?>