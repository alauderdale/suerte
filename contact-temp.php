<?php
 /*
 Template Name: contact
 */ ?>
 
<?php wp_head(); ?>

 
<style>

.fancybox-skin{
   border-radius: 40px;
   
}
.fancybox-close{
    background-image: url(<?php bloginfo('template_url'); ?>/images/close_x.png);
    width: 18px;
    height: 23px;
    top: 24px;
    right: 31px;
}
</style>
<div class="recipie-overlay">
    <div class="revipie-title-contain">
	<h3><?php the_title(); ?></h3>
	</div>
	<div class="recipie-inner">
        	<?php if (have_posts()) : ?>
            	<?php while (have_posts()) : the_post(); ?>
                	 <?php the_content(); ?>
                	 <!--end the loop-->
            	 <?php endwhile; ?>
        	 <?php endif; ?>
	</div>
</div><!--end recipie overlay-->


<?php wp_footer(); ?>
         