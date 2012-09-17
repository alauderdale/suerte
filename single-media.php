
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	    <div class="media-overlay">
    	 <?php the_content(); ?>
    	 </div>
    	 <!--end the loop-->
	 <?php endwhile; ?>
 <?php endif; ?>