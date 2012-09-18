<?php
 /*
 Template Name: Terms
 */ ?>
 
 <style>
 .fancybox-skin{
     
 }
 .fancybox-outer{
     background-image: url(<?php bloginfo('template_url'); ?>/images/terms_bg.png);
     padding: 80px;
     box-shadow: none;
     width: 811px;
     background-repeat: no-repeat;
 }
 </style>
 
<!--start the loop-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <div class="terms">
            <h3><?php the_title(); ?> </h3>
            <?php the_content(); ?>     
        </div>
<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>
        