
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	    <div class="person-overlay">
	    <h1><?php the_title(); ?></h1>
    	 <?php the_content(); ?>
    	 </div>
    	 <!--end the loop-->
	 <?php endwhile; ?>
 <?php endif; ?>