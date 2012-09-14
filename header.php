<!DOCTYPE html>
<html>
<head>
    <title>
        <?php wp_title(''); ?> <?php bloginfo('name'); ?>
    </title>
    <!--<meta name="viewport" content="width=device-width,initial-scale=1">-->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" /> 
    <!--external stylesheets-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!--  slider -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js"></script>
    <!--  carousel-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousel.js"></script>
    <!--  fancybox-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.pack.js"></script>
    <!--  masonry-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.js"></script>
    <!-- smooth scroll-->
    <script src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
    <!--  script config-->
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
</head>
<body>
    <header>
        <nav class="main-nav-wrapper">
            <div class="logo">
                <a href="#home"></a>
            </div>
            <div id="navigation">
                <ul class="main-nav">
                    <?php
                         $pages = get_pages('sort_column=menu_order');
                         foreach ($pages as $page) {
                         	$link = '<li id="nav-'.$page->post_name.'"><a href="#">'.$page->post_title.'</a></li>';
                        	echo $link;
                         }
                    ?>
                </ul>
            </div>
        </nav>
    </header>
    <div id="container">