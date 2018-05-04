<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"/>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
	
	<!-- imazing mobile menu CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.fs.naver.css" rel="stylesheet" type="text/css" />
	<!-- news ticker CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/ticker-style.css" rel="stylesheet" type="text/css" />
	<!-- bebas fonts CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css"/>
	<!--nivo slider-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themes/default/default.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css"/>
	
	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!-- Responsive Framework -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css" />
<?php wp_head() ?>
</head>
<body>
  <div class="body_bg">
  
    <div class="column">
	    <div class="header">
		   <div class="logo floatleft">
		        <a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
		   </div>
		   <div class="headermenu floatleft">
		       <?php wp_nav_menu( array( 'theme_location' => 'top_menu') ); ?>
		
		   </div>
		   <div class="header_right floatright">
		       <div class="social_share">
			      <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="" />
			      <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="" />
			      <img src="<?php echo get_template_directory_uri(); ?>/img/feed.png" alt="" />
			   </div>
			   <div class="news_search">
			       <input type="text" />
			       <input type="submit" value="search" />
			   </div>
		   </div>
		</div>
	    <div class="mainmenu">
				<?php
					if (function_exists('wp_nav_menu')) {
						wp_nav_menu(array('theme_location' => 'wpj-main-menu', 'menu_id' => 'nav', 'fallback_cb' => 'wpj_default_menu'));
					}
					else {
						wpj_default_menu();
					}
					?>	
			   
			   <div class="mobile_menu_area">
			   <nav>
				  <?php wp_nav_menu( array( 'theme_location' => 'wpj-main-menu', 'menu_id' => 'mobile_menu') ); ?>
			   </nav>
			   </div>  
		</div>
		<div style="clear:both"></div>
		<div class="news_ticker">
		    <ul id="js-news" class="js-hidden">
				<li class="news-item"><a href="#">This site designed by locus.</a></li>
				<li class="news-item"><a href="#">This is the 1nd latest news item.</a></li>
				<li class="news-item"><a href="#">This is the 3rd latest news item.</a></li>
				<li class="news-item"><a href="#">This is the 4th latest news item.</a></li>
			</ul>
		</div>