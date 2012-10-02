<?php
 /*
 Template Name: contact
 */ ?>
 

 
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
        	 <form id="contact" action="#" method="post" name="contact"><label for="email">Your E-mail</label>
        	 	<input id="email" class="txt" type="email" name="email" />
        	 
        	 	<label for="msg">Enter a Message</label>
        	 	<textarea id="msg" class="txtarea" name="msg"></textarea>
        	 
        	 	<button id="send">Send E-mail</button></form></div>
	</div>
</div><!--end recipie overlay-->
         