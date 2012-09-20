$(document).ready(function() {

// initiate page scroller plugin
$('body').pageScroller({
    
	navigation: '#navigation'
});


///fancybox

$('.fancybox').fancybox({
padding : 0
});

  /// carousel

///jQuery('#drink-slider').jcarousel();

/// masonry

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
         var divOffset = $('#luck').offset();
         if(window.scrollY > divOffset.top ){
            $('#bottom-image').fadeOut(300);
         }
         if(window.scrollY < divOffset.top){
            $('#bottom-image').fadeIn(300);
         }
      });
      
      
      
//rabbit position

$(function(){  // $(document).ready shorthand
  $('#rabbit').fadeIn(50);
});




$(window).resize(function(){
     resizenow();
});


function resizenow() {
    var browserwidth = $(window).width();
    var browserheight = $(window).height();
    $('#rabbit').css('left', ((browserwidth + 1300 - $("#rabbit").width())/2)).css('top', ((browserheight + 200 - $("#rabbit").height())/2));
    
    
    $('#rabbit').mouseover(function(){
    
    	$('#rabbit').css('left', ((browserwidth + 1270 - $("#rabbit").width())/2)).css('top', ((browserheight + 200 - $("#rabbit").height())/2));
    
    });
    
    $('#rabbit').mouseout(function(){
    
    	$('#rabbit').css('left', ((browserwidth + 1300 - $("#rabbit").width())/2)).css('top', ((browserheight + 200 - $("#rabbit").height())/2));
    
    });
    
};


resizenow();



//video image

$('.video').append('<div class="video-img"></div>');


//locator error



      
});

