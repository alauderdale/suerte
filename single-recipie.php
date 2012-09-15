<div class="recipie-overlay">
	<h3><?php the_title(); ?></h3>
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
</div><!--end recipie overlay-->