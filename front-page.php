<?php
/**
 * Template Name: Front
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header();
?>
<section id="main" class="container clearfix">
	<div class="home-slider flexslider clearfix">
		<ul class="slides">
	<?php
		$posts = get_posts(array(
			'numberposts' => -1,
			'post_type' => 'post',
			'meta_key' => 'front_slider',
			'meta_value' => '1'
		));

		if($posts)
		{
			foreach($posts as $post)
		{
				$attachment_id = get_post_meta($post->ID, 'front_slider_image', true);
				$size = "full"; // (thumbnail, medium, large, full or custom size)
				$image_attributes = wp_get_attachment_image_src( $attachment_id, $size );
				echo '<li>';
				echo '<img src="' .  $image_attributes[0] . '" width="' .  $image_attributes[1] . '" height="' .  $image_attributes[2] . '" alt="" />';
				echo '<div class="caption right">';
				echo '<div class="body">';
				echo '<h2 class="light">' . get_the_title($post->ID) . '</h2>';
				echo '<p>' . get_the_title($post->ID) . '</p>';
				echo '</div>';
				echo '<div class="meta clearfix">';
				echo '<a href="' . get_permalink($post->ID) . '" class="button small gradient">View Post</a>';
				echo '</div>';
				echo '</div>';
				echo '</li>';
		}
		}
 	?> 	
		</ul>
	</div>

	<div class="clear"></div>

	<div class="headline">
		<h1 class="title">Welcome to SimplyHealthy@Schools Malaysia</h1>

		<h4 class="sub-title">This blog is part of the sustainability program from Philips to teach children aged 8-12 how to improve their health and well-being.</h4>
	</div>
	<!--END .headline-->

	<div class="clear"></div><div class="clear"></div>

	<section class="features clearfix">

		<article class="feature one-third">
			<h2 class="icon large circle"><a href="<?php bloginfo('url'); ?>/category/students/"><img src="<?php echo get_template_directory_uri(); ?>/images/front_kids.png"></a></h2>

			<p>Have fun with Joey and the Healthy Heroes! Download colouring pages, activity kits and workbooks!</p>
		</article>

		<article class="feature one-third">
			<h2 class="icon large circle"><a href="<?php bloginfo('url'); ?>/category/parents/"><img src="<?php echo get_template_directory_uri(); ?>/images/front_parents.png"></a></h2>

			<p>Home activity and discussion topics that you can use to teach your children how about staying healthy and well!</p>
		</article>

		<article class="feature one-third">
			<h2 class="icon large circle"><a href="<?php bloginfo('url'); ?>/category/educators/"><img style="margin-bottom:-8px;margin-top:8px;" src="<?php echo get_template_directory_uri(); ?>/images/front_educators.png"></a></h2>

			<p>Teachers and educators will be able to download lesson plans and education tool kits to teach children more about health and well-being in the classroom.</p>
		</article>

	</section>
	<!--END .features-->

		<!--removed

	<h4 class="section-title">
		Featured Schools
		<div class="hr"></div>
	</h4>


	<ul class="recent-projects clearfix">
		<?php
		$posts = get_posts(array(
			'numberposts' => 3,
			'post_type' => 'post',
			'meta_key' => 'recent_post',
			'meta_value' => '1'
		));
 
		if($posts)
		{
			foreach($posts as $post)
		{
				$postexcerpt = get_excerpt_by_id($post->ID); //$post_id is the post id of the desired post
				$attachment_id = get_post_meta($post->ID, 'recent_post_image', true);
				$size = "full"; // (thumbnail, medium, large, full or custom size)
				$image_attributes = wp_get_attachment_image_src( $attachment_id, $size );
			echo '<li>';
				echo '<a href="' . get_permalink($post->ID) . '"></a>';
				echo '<img src="' .  $image_attributes[0] . '" width="' .  $image_attributes[1] . '" height="' .  $image_attributes[2] . '" alt="" />';
				echo '<div class="des">';
				echo '<h2 class="proj_title">' . get_the_title($post->ID) . '</h2>';
				echo '<p class="proj_desc">' . $postexcerpt . '</p>';
				echo '</div>';
			echo '</li>';
		}
		}
 		?> 	
	</ul>
	<!--END .recent-projects-->


	<h4 class="section-title">
		From the Blog
		<div class="hr"></div>
	</h4>


	<ul class="recent-posts clearfix">
		<?php
		$posts = get_posts(array(
			'numberposts' => 3,
			'post_type' => 'post',
			'meta_key' => 'featured_blog',
			'meta_value' => '1'
		));
 
		if($posts)
		{
			foreach($posts as $post)
		{
				$postexcerpt = get_excerpt_by_id($post->ID); //$post_id is the post id of the desired post
				$attachment_id = get_post_meta($post->ID, 'featured_blog_image', true);
				$size = "full"; // (thumbnail, medium, large, full or custom size)
				$image_attributes = wp_get_attachment_image_src( $attachment_id, $size );
			echo '<li class="one-third">';
				echo '<a href="' . get_permalink($post->ID) . '" class="entry-image clearfix">
				<img width="300px" height="90%" src="' .  $image_attributes[0] . '" alt="" /></a>';
				echo '<h3 class="entry-title">';
				echo '<a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a>';
				echo '</h3>';
				echo '<div class="entry-body">';
				echo '<p>' . $postexcerpt . '</p>';
				echo '</div>';
			echo '</li>';
		}
		}
 		?> 
	</ul>
	<!--END .recent-posts-->

	<!--removed
	<div class="announcement clearfix">
		<div class="body">
			<h2>Announcement title</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices iaculis libero, non vestibulum arcu adipiscing id.</p>
		</div>

		<a href="#" class="button">Call to action</a>
	</div>
	<!--END .announcement-->


	<!--removed
	<div class="one-third">
		<h4 class="section-title">
			Objective
			<div class="hr"></div>
		</h4>

		<div class="accordion clearfix">
			<ul>
				<li>
					<a href="#"><span></span><h4>Our Environment</h4></a>

					<div class="inner">
						<p>Sed faucibus pretium mi et malesuada. Sed scelerisque placerat lacinia.</p>
					</div>
				</li>
				<li>
					<a href="#"><span></span><h4>Our People</h4></a>

					<div class="inner">
						<p>Sed faucibus pretium mi et malesuada. Sed scelerisque placerat lacinia.</p>
					</div>
				</li>
				<li>
					<a href="#"><span></span><h4>Our Suppliers</h4></a>

					<div class="inner">
						<p>Sed faucibus pretium mi et malesuada. Sed scelerisque placerat lacinia.</p>
					</div>
				</li>
			</ul>
		</div>
		<!--END .accordion-->
	<!--removed

		<div class="clear"></div><div class="clear"></div>
	</div>

	<div class="one-third">
		<h4 class="section-title">
			About SimplyHealthy@Schools?
			<div class="hr"></div>
		</h4>

		<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
		<br />
		<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
	
		<div class="clear"></div><div class="clear"></div>
	</div>

	<div class="one-third last">
		<h4 class="section-title">
			Testimonials
			<div class="hr"></div>
		</h4>

		<div class="testimonial">
			<div class="text">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet odio augue. Pellentesque blandit fringilla nisi, non malesuada tortor egestas eget.</p>
			</div>
			<div class="author"><h4>John Doe, Envato Industries</h4></div>
		</div>

		<div class="clear"></div><div class="clear"></div>
	</div>
	<!--END #main-->


</section>

	<?php get_footer();?>