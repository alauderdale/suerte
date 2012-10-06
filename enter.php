<?php
 /*
 Template Name: Enter
 */ ?>
 
  <?php get_header(); ?>
  <section class="clearfix section">
      <div class="page wrapped">
          <div class="enter-page">
              <h1>Are you of <br/> legal drinking age?</h1>
              <div class="enter-controls">
                  <a href="index.php?pagename=home" class="yes-button">
                      Yes
                  </a>
                  <a href="https://www.google.com/" class="no-button">
                      No
                  </a>
              </div>
              <div class="enter-descrip">
                  <p>Enter this site only if you are of lega drinking age. By clicking yes you agree to the <a href="index.php?pagename=terms" class="fancybox fancybox.ajax>Terms of service">Terms of Service</a></p>
              </div>
          </div>
      </div>
  </section>
   <?php get_footer(); ?>