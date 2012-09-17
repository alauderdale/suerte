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
    <!--  slider -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js"></script>
    <!--  fancybox-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.pack.js"></script>
    <!--  masonry-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.js"></script>
    <!-- smooth scroll-->
    <script src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
  <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="main-nav-wrapper">
            <div class="logo">
                <a href="#home"></a>
            </div>
            <div id="navigation">
                <ul class="main-nav">
                     <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>
                </ul>
            </div>
        </nav>
    </header>
    <div id="container">