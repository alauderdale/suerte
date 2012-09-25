<!DOCTYPE html>
<html>
<head>
    <title>
        <?php wp_title(''); ?> <?php bloginfo('name'); ?>
    </title>
    <!--<meta name="viewport" content="width=device-width,initial-scale=1">-->
    <!--external stylesheets-->
    <link rel= "shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" /> 
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!--  fancybox-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
    <!--  pagination -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js"></script>
    <!--  slider -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js"></script>
    <!--  masonry-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.js"></script>
    <!-- smooth scroll-->
    <script src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
  <?php wp_head(); ?>
  <script type="text/javascript">
  	$(function() {
  		var COOKIE_NAME = 'splash-page-cookie';
  		$go = $.cookie(COOKIE_NAME);
  		if ($go == null) {
  			$.cookie(COOKIE_NAME, 'test', { path: '/' });
  			window.location = "index.php?pagename=enter"
  		}
  	});
  </script>
</head>
<body>
    <header>
        <nav class="main-nav-wrapper">
            <div class="logo">
                <a href="#home"></a>
            </div>
            <div id="navigation">
                <ul class="main-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tequilas</a></li>
                    <li><a href="#">Store Locator</a></li>
                    <li><a href="#">Photos &amp; <br/> Videos</a></li>
                    <li><a href="#">The Tequilla <br/> Process</a></li>
                    <li><a href="#">Press &amp;<br/> Awards</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="container">