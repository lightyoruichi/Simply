<?php
/**
 * @package WordPress
 * @subpackage Scratch_Theme
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	  <!– Tell IE8 to display in IE7 standards mode -->
  	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugins.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shortcodes.css" />
	<!--HTML5 Shiv-->
<!--[if lt IE 9]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/ie7-squish.js"></script>
<![endif]-->

	
	<meta property='fb:app_id' content='438850026173137' />
	<meta property="og:title" content="SimplyHealthy@Schools"/>
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/front_logo.png"/>
	<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
	<meta property="og:site_name" content="SimplyHealthy@Schools"/>
	<meta property="og:type" content="blog"/>
	<meta property="fb:admins" content="664596657"/>


	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.gmap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/mediaelement-and-player.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validatejs.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/libaries.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/user.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-34677222-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
		<?php wp_head(); ?>
	</head>
	<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=438850026173137";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!--
<div class="page-notification dark">
	<div class="container">
		
		<h4>SimplyInfinite is now available for sale on ThemeForest! Go and buy this badboy right now! - <a href="#">Buy now</a></h4>

		<a href="#" class="close-button"></a>

	</div>
</div>
END .page-notification-->
	
	
<header id="header" class="container clearfix">
	<!--<div class="head-logo"><a href="<?php bloginfo('url'); ?>/" id="site_name"><?php bloginfo('name'); ?><?php bloginfo('description'); ?></a></div>-->
				<a href="<?php bloginfo('url'); ?>/"><img style="padding-left:10px;padding-top:15px;" width="700px" height="80px" src="<?php echo get_template_directory_uri(); ?>/images/logo_2.png">
</a>			
	<nav class="main-nav">
<ul>
				<?php
				
				$args = array(
				'depth'        => 0,
				'show_date'    => '',
				'date_format'  => '',
				'child_of'     => 0,
				'exclude'      => '',
				'include'      => '',
				'title_li'     => '',
				'echo'         => 1,
				'authors'      => '',
				'sort_column'  => 'menu_order, post_title',
				'link_before'  => '',
				'link_after'   => '',
				'exclude_tree' => ''
				);
				
				wp_list_pages($args);
				
				?> 
			</ul>
	</nav>
</header>
</div><!-- / header -->