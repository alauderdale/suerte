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
 
 .child{
     display: none!important;
 }
 
 .fancybox-inner{
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
                        <h1>Blue Weber Agave</h1>
                        <p>Tequila can only be called 
                        ‘Tequila’ if it’s made from 
                        100% pure Blue Weber 
                        Agave. Suerte is!
                        </p>
                    </div>
                    <div class="water-text">
                        <h1>Water Drop</h1>
                        <p>Suerte Tequila is created with
                        the pure spring waters of
                        Atotonilco El Alto, in the highlands
                        of Jalisco. Sought after and
                        coveted by the greatest tequila
                        makers in the world, these crystal
                        clear waters are infused into
                        every sip of our tequila. Salud!
                        </p>
                    </div>
                    <div class="four-text">
                        <h1>400 Rabbits</h1>
                        <p>Legend has it, tequila 
                        was discovered by a 
                        rabbit. That rabbit was 
                        1 of 400 living in the 
                        agave fields. Long ago
                        levels of intoxication 
                        were measured in rabbits. 
                        1 rabbit meant you had 
                        a little bit. 400 rabbits 
                        meant you were 
                        extremely intoxicated. 
                        </p>
                    </div>
                    <div class="diamond-text">
                        <h1>Lucky Diamond</h1>
                        <p>The center piece of the 
                        Suerte Rabbit is the Lucky
                        Diamond. This symbol can 
                        have many different meanings
                        and we encourage you to 
                        give it the meaning you prefer,
                        but to us it represents luck & 
                        good fortune. Also, the purity
                        & integrity that the Suerte
                        Tequila brand represents.
                        </p>
                    </div>
                    <div class="lips-text">
                        <h1>Lucky Lips</h1>
                        <p>These represent the kiss of luck.
                        You can receive a kiss of luck or 
                        you can give a kiss of luck.
                        Either way, getting or giving a kiss
                        is a great way to invoke good luck.
                        Give someone a kiss of luck and
                        see what happens!
                        </p>
                    </div>
                    <div class="spade-text">
                        <h1>Lucky Spade </h1>
                        <p>Symbols from a deck of
                        cards that represent 
                        Suerte(luck). 
                        </p>
                    </div>
                    <div class="tahona-text">
                        <h1>Tahona</h1>
                        <p>A Tahona is a large 
                        round stone, carved 
                        to perfection & used to 
                        crush the agave once 
                        it’s been cooked. 
                        Using a Tahona gives the
                        Tequila a special flavor
                        that can’t be achieved 
                        with more modern steel 
                        shredders. Many large 
                        distillers are using 
                        shredders. Suerte uses a tradiitional Tahona! 
                        </p>
                    </div>
                    <div class="aa-text">
                        <h1>A</h1>
                        <p>Symbols from a deck of
                        cards that represent 
                        Suerte(luck). 
                        </p>
                    </div>
                    <div class="star-text">
                        <h1>Lucky Star</h1>
                        <p>A star is a common lucky
                        symbol. Seeing the first star
                        in the night sky is lucky. Many
                        cultures believe in lucky stars.
                        The phrase “Thank my lucky stars”
                        reflects the ancient belief in 
                        the influence of stars over 
                        human destinies.
                        </p>
                    </div>
                    <div class="crown-text">
                        <h1>King’s Crown</h1>
                        <p>The crown symbol is often
                        related to royalty or a 
                        higher sphere of authority.
                        When a crown is added to 
                        an image like the Suerte Rabbit,
                        it has the power to elevate
                        it’s meaning above the common
                        rabbit. This is no ordinary rabbit!
                        </p>
                    </div>
                    <div class="bolt-text">
                        <h1>Lightning Bolt</h1>
                        <p>A lightning bolt is a common
                        lucky symbol in tattoo art. 
                        It symbolizes strength and 
                        quickness. The suerte rabbit
                        is, both, strong and very quick!
                        </p>
                    </div>
                    <div class="line-text">
                        <h1>Cut Here’ Line</h1>
                        <p>Keeping in mind that the Suerte
                        Rabbit is not a real living being...
                        cut along the dashed line 
                        shown on his back left leg &
                        you’d have a lucky rabbits foot!
                        Rabbits & rabbit’s feet are symbols
                        of good luck in many cultures 
                        around the globe.
                        </p>
                    </div>
                    <div class="bones-text">
                        <h1>Neck Bones</h1>
                        <p>The Suerte Rabbit’s 
                        neck bones are shown
                        to symbolize Dia De Los
                        Muertos (Day Of The 
                        Dead), an important 
                        celebration in Mexican 
                        culture.
                        </p>
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
        