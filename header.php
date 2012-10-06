<!DOCTYPE html>
<html>
<head>
    <title>
        <?php wp_title(''); ?> <?php bloginfo('name'); ?>
    </title>
<!--    <script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
    <!--external stylesheets-->
    <link rel= "shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" /> 
    <!--  fancybox-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
    <!--  slider -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js"></script>
    <!--  masonry-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.js"></script>
    <!-- smooth scroll-->
    <script src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32629414-1']);
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
    <header>
        <nav class="main-nav-wrapper">
            <div class="logo">
                <a href="#home"></a>
            </div>
            <div id="navigation">
                <ul class="main-nav">
                    <li class="horz-align home-link"><a href="#">Home</a></li>
                    <li class="horz-align"><a href="#">Tequilas</a></li>
                    <li class="horz-align"><a href="#">Store Locator</a></li>
                    <li><a href="#">Photos &amp; <br/> Videos</a></li>
                    <li><a href="#">The Tequila <br/> Process</a></li>
                    <li><a href="#">Press &amp;<br/> Awards</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="container">