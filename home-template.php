<?php
 /*
 Template Name: Home
 */ ?>
 
 
 <section id="home" class="clearfix section">
     <div class="page wrapped">
         <h1 class=" title-max-tilt"><span class="luck">Luck</span> <br/><span class="mini-is">is</span><br/><span class="here"> here</span></h1>
         <div class="clearfix"></div>
         <div class="home-descrip" id="fade-bottom-image">
             <!--start the loop-->
             <?php if (have_posts()) : ?>
             <?php while (have_posts()) : the_post(); ?>
                     <?php the_content(); ?>     
             <!--end the loop-->
             <?php endwhile; ?>
             <?php endif; ?>
         </div>
     </div><!--end page-->
     <div class="bottom-image" id="bottom-image"><!--end bottom image-->
     </div>
 </section><!--end page-wrapper-->