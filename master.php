<?php get_header(); ?>
        <!--start the loop-->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <?php get_page( $page_id ) ?>
        <!--end the loop-->
        <?php endwhile; ?>
        <?php endif; ?>
        
<?php get_footer(); ?>