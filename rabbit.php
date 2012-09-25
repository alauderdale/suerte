<?php
 /*
 Template Name: Rabbit
 */ ?>
 
 <style>
 .fancybox-skin{
     background: none;
     background-image: url(<?php bloginfo('template_url'); ?>/images/rabbit_bg.png);
     width: 852px!important;
     float: left!important;
     padding: 26px 3px 72px 35px!important;
     background-repeat: no-repeat;
     box-shadow: none!important;
 }
 
 .fancybox-inner{
     background: rgba(255,255,255,.8);
     height: 638px!important;
     border-radius: 15px;
 }
 
.fancybox-close{
    background-image: url(<?php bloginfo('template_url'); ?>/images/close_terms.png);
    width: 39px;
    height: 40px;
    right: 45px;
    top: 5px;
}
 </style>
<script>
    $(document).ready(function() {
    
    
        $('a.plant').mouseover(function(){
            $('.plant-text').fadeIn(300);
        });
        $('a.plant').mouseout(function(){
            $('.plant-text').hide();
        });
        
        $('a.water').mouseover(function(){
            $('.water-text').fadeIn(300);
        });
        $('a.water').mouseout(function(){
            $('.water-text').hide();
        });
        
        
        $('a.four').mouseover(function(){
            $('.four-text').fadeIn(300);
        });
        $('a.four').mouseout(function(){
            $('.four-text').hide();
        });
        
        $('a.diamond').mouseover(function(){
            $('.diamond-text').fadeIn(300);
        });
        $('a.diamond').mouseout(function(){
            $('.diamond-text').hide();
        });
        
        $('a.lips').mouseover(function(){
            $('.lips-text').fadeIn(300);
        });
        $('a.lips').mouseout(function(){
            $('.lips-text').hide();
        });
        
        $('a.spade').mouseover(function(){
            $('.spade-text').fadeIn(300);
        });
        $('a.spade').mouseout(function(){
            $('.spade-text').hide();
        });
        
        $('a.tahona').mouseover(function(){
            $('.tahona-text').fadeIn(300);
        });
        $('a.tahona').mouseout(function(){
            $('.tahona-text').hide();
        });
        
        $('a.aa').mouseover(function(){
            $('.aa-text').fadeIn(300);
        });
        $('a.aa').mouseout(function(){
            $('.aa-text').hide();
        });
        
        $('a.star').mouseover(function(){
            $('.star-text').fadeIn(300);
        });
        $('a.star').mouseout(function(){
            $('.star-text').hide();
        });
        
        
        $('a.crown').mouseover(function(){
            $('.crown-text').fadeIn(300);
        });
        $('a.crown').mouseout(function(){
            $('.crown-text').hide();
        });
        
        $('a.bolt').mouseover(function(){
            $('.bolt-text').fadeIn(300);
        });
        $('a.bolt').mouseout(function(){
            $('.bolt-text').hide();
        });
        
        $('a.line').mouseover(function(){
            $('.line-text').fadeIn(300);
        });
        $('a.line').mouseout(function(){
            $('.line-text').hide();
        });
        
        $('a.bones').mouseover(function(){
            $('.bones-text').fadeIn(300);
        });
        $('a.bones').mouseout(function(){
            $('.bones-text').hide();
        });
    
    });
</script>
 
<!--start the loop-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        <dic class="rabbit-wrapper">
            <div class="rabbit">
                <div class="explore-title">
                </div>
                <div class="rabbit-info">
                    <div class="plant-text">
                        <h1>Blue weber agave</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s made from 100% pure Blue Weber Agave. Suerte is!</p>
                    </div>
                    <div class="water-text">
                        <h1>Water</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                    <div class="four-text">
                        <h1>400</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                    <div class="diamond-text">
                        <h1>diamond</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s made from 100% pure Blue Weber Agave. Suerte is!</p>
                    </div>
                    <div class="lips-text">
                        <h1>lips</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                    <div class="spade-text">
                        <h1>spade</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                    <div class="tahona-text">
                        <h1>Tahona</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s made from 100% pure Blue Weber Agave. Suerte is!</p>
                    </div>
                    <div class="aa-text">
                        <h1>A</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                    <div class="star-text">
                        <h1>star</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                    <div class="crown-text">
                        <h1>crown</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s made from 100% pure Blue Weber Agave. Suerte is!</p>
                    </div>
                    <div class="bolt-text">
                        <h1>bolt</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                    <div class="line-text">
                        <h1>line</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                    <div class="bones-text">
                        <h1>neckbone</h1>
                        <p>Tequila can only be called ‘Tequila’ if it’s</p>
                    </div>
                </div> 
                <div class="the-rabbit">
                    <a href="#" class="icon plant"></a>
                    <a href="#" class="icon water"></a>
                    <a href="#" class="icon four"></a>
                    <a href="#"  class="icon diamond"></a>
                    <a href="#" class="icon lips"></a>
                    <a href="#" class="icon spade"></a>
                    <a href="#" class="icon tahona"></a>
                    <a href="#" class="icon aa"></a>
                    <a href="#" class="icon star"></a>
                    <a href="#" class="icon crown"></a>
                    <a href="#" class="icon bolt"></a>
                    <a href="#" class="icon bones"></a>
                    <a href="#" class="icon line"></a>
                </div>  
            </div>
        </dic>
<!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>
        