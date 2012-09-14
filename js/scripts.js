$(document).ready(function() {

// initiate page scroller plugin
$('body').pageScroller({
    
	navigation: '#navigation'
});


///fancybox

$('.fancybox').fancybox({

});

  /// carousel

jQuery('#drink-slider').jcarousel();

var $container = $('#media-contain');

  $container.imagesLoaded( function(){
    $container.masonry({
      itemSelector : '.box'
    });
  });
  
//slider

$(window).load(function() {
    $('#process-slider').nivoSlider({
    ////options
    effect: 'fade',
    prevText: '', 
    nextText: '',
    controlNav: false
    
    });
});



///appearing image




       $(window).scroll(function(){
         var divOffset = $('#fade-bottom-image').offset();
         if(window.scrollY > divOffset.top ){
            $('#bottom-image').fadeOut(300);
         }
         if(window.scrollY < divOffset.top){
            $('#bottom-image').fadeIn(300);
         }
      });




 
});