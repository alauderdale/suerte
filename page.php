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
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" /> 
    <!--  fancybox-->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>

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
    <div class="s-cart">
        <div class="wrapped">
            <?php 
                if ( dynamic_sidebar('cart') ) : 
            ?>
        </div>
    </div>
    <?php endif; ?>
    <header>
        <nav class="main-nav-wrapper">
            <div class="logo">
                <a href="<?php echo get_option('home'); ?>"></a>
            </div>
        </nav>
    </header>
    <div id="container">
    <div class="clearfix">
    <!--start the loop-->
    <div class="page-content">
        <div class="wrapped">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>     
            <!--end the loop-->
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="clearfix">
    </div>
<?php get_footer(); ?>
        