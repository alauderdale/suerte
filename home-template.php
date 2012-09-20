<?php
 /*
 Template Name: Home
 */ ?>
 
 <?php get_header(); ?>
 <div id="rabbit"></div>
 <section id="home" class="clearfix section">
     <h1 class="luck-title" id="luck"></h1>
     <div class="page wrapped">
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
                     <a class="fancybox fancybox.ajax <?php
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
             <p>Pellentesque feugiat ante sit amet augue mollis ut convallis justo tempus. Phasellus laoreet tincidunt neque venenatis scelerisque. Sed ut orci tempus leo malesuada varius non sit amet risus. Mauris pellentesque, lectus et ullamcorper rutrum, augue velit placerat lacus, sit amet malesuada mi mauris sed mi. Nam non ligula augue. Aliquam ut volutpat quam. Nam vehicula metus id ante semper in luctus ligula pretium. In hac habitasse platea dictumst. Integer sem libero, gravida id tempor malesuada, blandit et nibh. Integer nec hendrerit mi. Nullam dolor lorem, dictum vitae adipiscing nec, lobortis faucibus enim. Nullam auctor, nunc et vestibulum accumsan, elit nulla hendrerit elit, vel laoreet enim libero quis quam.</p>
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
 <?php get_footer(); ?>
 