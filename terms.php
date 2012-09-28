<?php
 /*
 Template Name: Terms
 */ ?>
 
 <style>
 .fancybox-skin{
     background: none;
     background-image: url(<?php bloginfo('template_url'); ?>/images/terms_bg.png);
     width: 812px!important;
     height: 482px!important;
     float: left!important;
     padding: 26px 3px 72px 35px!important;
     background-repeat: no-repeat;
     box-shadow: none!important;
 }
 
 .fancybox-inner{
     background: none;
 }
 
.fancybox-close{
    background-image: url(<?php bloginfo('template_url'); ?>/images/close_terms.png);
    width: 39px;
    height: 40px;
    right: -1px;
    top: 5px;
}
 </style>
 
<!--start the loop-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <dic class="terms-wrapper">
            <div class="terms">
                <h3><?php the_title(); ?> </h3>
                <?php the_content(); ?>     
            </div>
        </dic>
<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>
        