<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<hr />
</section>
	<aside id="sidebar" class="one-fourth last clearfix">
		

		<div class="widget widget_search clearfix">
			<h4 class="widget-title">
				Search
				<div class="hr"></div>
			</h4>
				<?php get_search_form(); ?>
		</div>	
		
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

				
		<div class="widget widget_categories clearfix">
			<h4 class="widget-title">
			<?php _e( 'Archives' ); ?>
				<div class="hr"></div>
			</h4>

			<ul class="list two-col icon-forward-circle">
				<?php wp_get_archives( 'type=monthly&show_post_count=1' ); ?>
			</ul>
		</div>

		<div class="widget widget_tag_cloud clearfix">
			<h4 class="widget-title">
				Tags
				<div class="hr"></div>
			</h4>

			<?php
			$tags = get_tags();
				$html = '<div class="post_tags">';
				foreach ($tags as $tag){
			$tag_link = get_tag_link($tag->term_id);
			
			$html .= "<a href='{$tag_link}' title='{$tag->name} Tag'>";
			$html .= "{$tag->name}</a>";
				}
			$html .= '</div>';
			echo $html;
			?>
		</div>

		<div class="widget widget_flickr clearfix">
			<h4 class="widget-title">
				Flickr Feed
				<div class="hr"></div>
			</h4>

			<div class="flickr"><ul></ul></div>

		</div>

		<div class="widget widget_twitter clearfix">
			<h4 class="widget-title">
				Recent Tweets
				<div class="hr"></div>
			</h4>

			<div class="twitter"></div>

		</div>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->


<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
	</aside>
	<!--END #sidebar-->