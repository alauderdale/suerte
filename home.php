<?php
 /*
 Template Name: Home
 */ ?>
 
 <?php get_header(); ?>
 <div id="rabbit"><a title="Suerte Tequila Rabbit - CLICK TO EXPLORE" href="index.php?pagename=rabbit" class="fancybox fancybox.ajax" ><div class="rabbit-inner"></div></a></div>
 <section id="home" class="clearfix section">
     <h1 class="luck-title" id="luck"></h1>
     <div class="page wrapped">
         <div class="clearfix"></div>
         <div class="home-inner">
             <div class="home-descrip" id="fade-bottom-image">
                 <!--start the loop-->
                 <?php if (have_posts()) : ?>
                 <?php while (have_posts()) : the_post(); ?>
                         <?php the_content(); ?>     
                 <!--end the loop-->
                 <?php endwhile; ?>
                 <?php endif; ?>
             </div>
             <div class="home-col">
                 <h2 class="people-title"></h2>
                 <div class="people-contain">
                     <?php
                     $peopleloop = new WP_Query( array( 'post_type' => 'person') );
                      ?>
                     <?php while ( $peopleloop->have_posts() ) : $peopleloop->the_post(); ?>
                         <div class="person">
                             <a class="fancybox fancybox.ajax" href="<?php the_permalink(); ?>">
                                 <?php the_post_thumbnail(); ?> 
                             </a>
                         </div>
                    <?php endwhile; ?>
                 </div>
             </div><!--end homecol-->
             <div class="home-col">
                 <h2 class="home-like-title">Like us &amp; follow us</h2>
                 <ul class="social-icons home-icons">
                     <li><a class="home-facebook social-icon" target="_blank" href="http://www.facebook.com/suertetequila"></a></li>
                     <li><a class="home-twitter social-icon" target="_blank" href="https://twitter.com/#!/SuerteTequila"></a></li>
                     <li><a class="home-pintrist social-icon" target="_blank" href="https://pinterest.com/suertetequila/"></a></li>
                 </ul>
             </div><!--end homecol-->
         </div>
     </div><!--end page-->
     <div class="bottom-image-contain">
         <div class="bottom-image" id="bottom-image"><!--end bottom image-->
         </div>
     </div>
 </section><!--end page-wrapper-->
 <section id="tequillas" class="clearfix section">
     <div class="page wrapped">
         <div class="teq-arrow"></div>
         <h1 class="tequillas-title"></h1>
<!--         register custom post type for tequila-->
         <?php
         $tequilaloop = new WP_Query( array( 'post_type' => 'tequila') );
          ?>
         <?php while ( $tequilaloop->have_posts() ) : $tequilaloop->the_post(); ?>
             <div class="drink-container">
                 <div class="bottle">
                     <?php $meta2 = get_post_meta($post->ID, 'custom_text2', true);?>
                     <h3 style="color:<?php echo $meta2 ?>;" class="title-tilt drink-title"> <?php the_title(); ?></h3>
                     <?php the_post_thumbnail(); ?> 
                 </div><!--end bottle-->
                 <div class="drink-info-container">
                     <div class="drink-descrip">
                         <?php the_content(); ?>
                     </div>
                     <p class="recipies">recipes:</p>
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
                                           <p><a class="fancybox fancybox.ajax" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
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
     <h1 class="locator-title"></h1>
     </div>
     <div class="locator-banner">
         <div class="center">
         <h2>Find Suerte Near You!</h2>
         </div>
     </div>
     <div id="no-store" class="orange-bar">
         <div class="wrapped">
         <h3>
             Suerte is currently unavailable in your area.
         </h3>
         <h4>Click 
             <a href="index.php?pagename=contact" class="fancybox fancybox.ajax">HERE</a>
         to let us know where you live, and we'll see about getting suerte in stores<br/> near you.
         </h4>
         </div>
     </div>
     <div class="page wrapped" >
         <div class="store-locator-container">
         <?php
         $storelocateloop = new WP_Query( array( 'post_type' => 'storelocate') );
          ?>
         <?php while ( $storelocateloop->have_posts() ) : $storelocateloop->the_post(); ?>
         <?php the_content(); ?>
         <?php endwhile; ?>
         </div>
     </div><!--end page-->
     <div class="wrapped">
         <div class="online-location-container">
             <?php
             $onlinelocationloop = new WP_Query( array( 'post_type' => 'onlinelocation') );
              ?>
              <?php 
                  $test=get_posts('post_type=onlinelocation');
                  if ($test) {
                  //found posts
                  echo "<h3>SHOP ONLINE AT:</h3>";
                  }
              ?>

             <?php while ( $onlinelocationloop->have_posts() ) : $onlinelocationloop->the_post(); ?>
                 <div class="online-location">
                     <h2><?php the_title(); ?></h2>
                     <?php the_content(); ?>
                 </div>
             <?php endwhile; ?>
         </div>
     </div>
 </section> <!--end page-wrapper-->
 <section id="photos-vids" class="clearfix section">
     <div class="page wrapped">
         <h1 class="photos-title"></h1>
         <div class="media-container" id="media-contain" class="clearfix">
             <?php
             $medialoop = new WP_Query( array( 'post_type' => 'media') );
              ?>
             <?php while ( $medialoop->have_posts() ) : $medialoop->the_post(); ?>
                 <div class="media-item box">
                     <a rel="photos-vids"  class="fancybox fancybox.ajax <?php
                     $terms_as_text = get_the_term_list( $post->ID, 'mediatype', '', '', '' ) ;
                     echo strip_tags($terms_as_text);
                     ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                          <?php the_post_thumbnail(); ?> 
                     </a>
                 </div><!--end media item-->
             <?php endwhile; ?>	
         </div><!--end media container-->
     </div><!--end page-->
 </section> <!--end page-wrapper-->
 <section id="process" class="clearfix section">
     <div class="page wrapped">
         <h1 class="process-title"></h1>
         <div class="process-descrip">
             <?php
             $processdescriptloop = new WP_Query( 'pagename=process-description' );
              ?>
              <?php while ( $processdescriptloop->have_posts() ) : $processdescriptloop->the_post(); ?>
                  <?php the_content(); ?>
              <?php endwhile; ?>
         </div>   
        <div class="process-slider">
            <div class="slider-wrapper">
                <div id="process-slider" class="nivoSlider">
                    <?php
                    $processloop = new WP_Query( array( 'post_type' => 'processslider') );
                     ?>
                     <?php while ( $processloop->have_posts() ) : $processloop->the_post(); ?>
                        <img src="<?php
                        $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                        echo $imgsrc2[0];
                        ?>"  alt=""  title="#caption-<?php the_ID(); ?>"  />
                     <?php endwhile; ?>
                </div>
                <?php
                $processloop2 = new WP_Query( array( 'post_type' => 'processslider') );
                 ?>
                <?php while ( $processloop2->have_posts() ) : $processloop2->the_post(); ?>
                <div id="caption-<?php the_ID(); ?>" class="nivo-html-caption">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?> 
                </div>
                <?php endwhile; ?>
            </div>
        </div><!--end process slider-->
     </div><!--end page-->
 </section> <!--end page-wrapper-->
 <section id="press" class="clearfix section">
     <div class="wrapped">
         <h1 class="press-title"></h1>
     </div>
     <div class="orange-bar">
         <h1>No press or awards yet</h1>
         <h2>but we're feeling really lucky, so check back soon!</h2>
     </div>
 </section> <!--end page-wrapper-->
 <?php get_footer(); ?>
 