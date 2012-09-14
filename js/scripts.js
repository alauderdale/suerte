$(document).ready(function() {

// initiate page scroller plugin
$('body').pageScroller({
    
	navigation: '#navigation'
});


///fancybox

$('.fancybox').fancybox();

  /// carousel

jQuery('#drink-slider').jcarousel();

var $container = $('#media-contain');

  $container.imagesLoaded( function(){
    $container.masonry({
      itemSelector : '.box'
    });
  });
  

 
});