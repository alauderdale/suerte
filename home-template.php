<?php
 /*
 Template Name: Home
 */ ?>
 
 <?php get_header(); ?>
 <section id="home" class="clearfix section">
     <div class="page wrapped">
         <h1 class=" title-max-tilt"><span class="luck">Luck</span> <br/><span class="mini-is">is</span><br/><span class="here"> here</span></h1>
         <div class="clearfix"></div>
         <div class="home-descrip" id="fade-bottom-image">
             <!--start the loop-->
             <?php if (have_posts()) : ?>
             <?php while (have_posts()) : the_post(); ?>
                     <?php the_content(); ?>     
             <!--end the loop-->
             <?php endwhile; ?>
             <?php endif; ?>
         </div>
     </div><!--end page-->
     <div class="bottom-image" id="bottom-image"><!--end bottom image-->
     </div>
 </section><!--end page-wrapper-->
 <section id="tequillas" class="clearfix section">
     <div class="page wrapped">
         <div class="teq-arrow"></div>
         <h1 class="title-tilt">Tequilas</h1>
<!--         register custom post type for tequila-->
         <?php
         $tequilaloop = new WP_Query( array( 'post_type' => 'tequila') );
          ?>
         <?php while ( $tequilaloop->have_posts() ) : $tequilaloop->the_post(); ?>
             <div class="drink-container">
                 <div class="bottle">
                     <h3 class="title-tilt drink-title"> <?php the_title(); ?></h3>
                     <?php the_post_thumbnail(); ?> 
                 </div><!--end bottle-->
                 <div class="drink-info-container">
                     <div class="drink-descrip">
                         <?php the_content(); ?>
                     </div>
                     <p class="recipies">recipies:</p>
                     <script type="text/javascript">
                     $(document).ready(function() {
                         jQuery('#drink-slider-<?php the_ID(); ?> ').jcarousel(); 
                         });   
                     </script>
                     <div class="drink-slider-container">
                         <ul id="drink-slider-<?php the_ID(); ?>" class="jcarousel-skin-tango">
                         <!--         register custom post type for tequila-->
                             <?php $meta = get_post_meta($post->ID, 'custom_text', true);?>
                              <?php
                              $recipieloop = new WP_Query( array( 'post_type' => 'recipie', 'recipiedrink' => $meta) );
                               ?>
                              <?php while ( $recipieloop->have_posts() ) : $recipieloop->the_post(); ?>
                                   <li>
                                       <a class="fancybox fancybox.ajax" href="<?php the_permalink(); ?>">
                                           <?php the_post_thumbnail(); ?> 
                                       </a>
                                       <div class="recipie-title">
                                           <p><?php the_title(); ?></p>
                                       </div>
                                   </li>
                               <?php endwhile; ?>
                         </ul>
                     </div>
                 </div><!--end drink info container-->
             </div><!--end drink container-->
         <!--end the loop-->
         <?php endwhile; ?>
     </div><!--end page-->
 </section> <!--end page-wrapper-->
 <section id="storelocate" class="clearfix section">
     <div class="wrapped">
     <h1 class="title-tilt ">Store Locator</h1>
     </div>
     <div class="locator-banner">
         <div class="center">
         <h2>Find Suerte Near You!</h2>
         </div>
     </div>
     <div class="page wrapped" >
         <div class="store-locator-container">
         </div>
     </div><!--end page-->
 </section> <!--end page-wrapper-->
 <section id="photos-vids" class="clearfix section">
     <div class="page wrapped">
         <h1 class="title-tilt">Photos &amp;<br> Videos</h1>
         <div class="media-container" id="media-contain" class="clearfix">
             <div class="media-item box">
                 <a class="fancybox" href="images/slider-demo.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/slider-demo.png" alt="" />
                 </a>
             </div>
             <div class="media-item box">
                 <a class="fancybox" href="images/slider-demo.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/slider-demo.png" alt="" />
                 </a>
             </div>
             <div class="media-item box">
                 <a class="fancybox" href="images/slider-demo.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/slider-demo.png" alt="" />
                 </a>
             </div>
             <div class="media-item box">
                 <a class="fancybox" href="images/slider-demo.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/slider-demo.png" alt="" />
                 </a>
             </div>
             <div class="media-item box">
                 <a class="fancybox" href="images/slider-demo.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/slider-demo.png" alt="" />
                 </a>
             </div>
             <div class="media-item box">
                 <a class="fancybox" href="images/slider-demo.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="images/slider-demo.png" alt="" />
                 </a>
             </div>
         </div><!--end media container-->
     </div><!--end page-->
 </section> <!--end page-wrapper-->
 <section id="process" class="clearfix section">
     <div class="page wrapped">
         <h1 class="title-tilt"><span class="the-word">The</span><span class="tequilla-word"> Tequilla</span><br> Process</h1>
         <div class="process-descrip">
             <p>Pellentesque feugiat ante sit amet augue mollis ut convallis justo tempus. Phasellus laoreet tincidunt neque venenatis scelerisque. Sed ut orci tempus leo malesuada varius non sit amet risus. Mauris pellentesque, lectus et ullamcorper rutrum, augue velit placerat lacus, sit amet malesuada mi mauris sed mi. Nam non ligula augue. Aliquam ut volutpat quam. Nam vehicula metus id ante semper in luctus ligula pretium. In hac habitasse platea dictumst. Integer sem libero, gravida id tempor malesuada, blandit et nibh. Integer nec hendrerit mi. Nullam dolor lorem, dictum vitae adipiscing nec, lobortis faucibus enim. Nullam auctor, nunc et vestibulum accumsan, elit nulla hendrerit elit, vel laoreet enim libero quis quam.</p>
         </div>   
         <div class="process-slider">
             <div class="slider-wrapper">
                 <div id="process-slider" class="nivoSlider">
                     <img src="images/slider-demo.png"  alt=""  title="#htmlcaption"  />
                     <img src="images/slider-demo2.png"  alt=""  title="#htmlcaption2"  />
                 </div>
                 <div id="htmlcaption" class="nivo-html-caption">
                     <h1>jalisco</h1>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut pretium libero. Integer ut nulla urna, non elementum lacus. Nullam egestas, magna a euismod pharetra, nibh ante imperdiet enim, ut adipiscing mi sem vitae nisl. Sed cursus ultricies malesuada. </p> 
                 </div>
                 <div id="htmlcaption2" class="nivo-html-caption">
                     <h1>Whooooo</h1>
                     <p>lor sit amet, consectetueuismod pharetra, nibh ante imperdiet enim, ut adipiscing mi sem vitae nisl. Sed cursus ultricies malesuada. </p> 
                 </div>
             </div>
         </div><!--end process slider-->
     </div><!--end page-->
 </section> <!--end page-wrapper-->
 <?php get_footer(); ?>
 