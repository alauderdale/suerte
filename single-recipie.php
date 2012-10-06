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
    	<div class="recipie-image">
            <?php the_post_thumbnail(); ?> 
    	</div>
    	<div class="recipie">
        	<?php if (have_posts()) : ?>
            	<?php while (have_posts()) : the_post(); ?>
                	 <?php the_content(); ?>
                	 <!--end the loop-->
            	 <?php endwhile; ?>
        	 <?php endif; ?>
    	</div><!--end recipie-->
	</div>
</div><!--end recipie overlay-->