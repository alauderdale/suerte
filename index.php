<?php get_header(); ?>
    <?php query_posts( 'post_type=page&posts_per_page=100&orderby=menu_order&order=asc' ); ?>
			
		<!--start the loop-->
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		       <?php the_content(); ?> 
		<!--end the loop-->
		<?php endwhile; ?>
		<?php endif; ?>
			

		
<?php get_footer(); ?>