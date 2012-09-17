<?php
 /*
 Template Name: Terms
 */ ?>
 
<!--start the loop-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <div class="terms">
            <h3><?php the_title(); ?>     </h3>
            <?php the_content(); ?>     
        </div>
<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>
        