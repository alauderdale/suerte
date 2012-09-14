$(document).ready(function() {

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