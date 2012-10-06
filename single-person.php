<style>
.fancybox-skin{
   background: none;
   
}
.person-overlay{
    background: #fff;
    border-radius: 50px;
}
.fancybox-close{
    background-image: url(<?php bloginfo('template_url'); ?>/images/close_x.png);
    width: 18px;
    height: 23px;
    top: 24px;
    right: 31px;
}
</style>
<div class="person-overlay">
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