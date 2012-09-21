<?php
 /*
 Template Name: Enter
 */ ?>
 
 
  <?php get_header(); ?>
  <section class="clearfix section enter">
      <div class="page wrapped">
          <div class="enter-page">
              <div class="enter-bottles"></div>
              <h1>Are you of <br/> legal drinking age?</h1>
              <div class="enter-controls">
                  <a href="index.php/home" class="yes-button">
                      
                  </a>
                  <a href="#" onclick="return false;" class="no-button">
                     
                  </a>
              </div>
              <div class="enter-descrip">
                  <p>Enter this site only if you are of lega drinking age. By clicking yes you agree to the <a href="index.php/terms" class="fancybox fancybox.ajax>Terms of service">Terms of Service</a></p>
              </div>
          </div>
      </div>
      <div class="orange-bar">
          <div id="enter-append" class="wrapped">
              <h1>IT’S NOT YOUR LUCKY DAY!</h1>
              <h2>YOU MUST BE OF LEGAL DRINKING AGE TO ENTER THIS SITE</h2>
          </div>
      </div>
      <div class="wrapped">
          <ul class="social-icons home-icons">
              <li><a class="home-facebook social-icon" target="_blank" href="http://www.facebook.com/suertetequila"></a></li>
              <li><a class="home-twitter social-icon" target="_blank" href="https://twitter.com/#!/SuerteTequila"></a></li>
              <li><a class="home-pintrist social-icon" target="_blank" href="https://pinterest.com/suertetequila/"></a></li>
          </ul>
      </div>
  </section>
  
  
  
  <!--  carousel-->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousel.js"></script>
  <!--  script config-->
  <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
  <?php wp_footer(); ?>