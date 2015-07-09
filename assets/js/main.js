$(document).ready(function(){


    $('.dropdown-button').dropdown({
           inDuration: 300,
           outDuration: 225,
           constrain_width: true, 
           hover: true, 
           gutter: 0, 
           belowOrigin: true 
           }
     );
        
    $(document).ready(function(){
      $('.parallax').parallax();
    });


    $('#facebook').hover(function(){
    	$('#social-facebook').addClass('facebook , ion-social-facebook-outline');
    }, function(){
    	$('#social-facebook').removeClass('facebook , ion-social-facebook-outline');
    });

     $('#instagram').hover(function(){
    	$('#social-instagram').addClass('instagram , ion-social-instagram-outline');
    }, function(){
    	$('#social-instagram').removeClass('instagram , ion-social-instagram-outline');
    });

     $(document).ready(function(){
      $('.slider').slider({
        height:580
      });
    });

     $('#twitter').hover(function(){
    	$('#social-twitter').addClass('twitter , ion-social-twitter-outline');
    }, function(){
    	$('#social-twitter').removeClass('twitter , ion-social-twitter-outline');
    });
 
     $('#googleplus').hover(function(){
    	$('#social-googleplus').addClass('googleplus , ion-social-googleplus-outline');
    }, function(){
    	$('#social-googleplus').removeClass('googleplus , ion-social-googleplus-outline');
    });

     $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });

	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="ion-chevron-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});


    $(document).ready(function(){
      $('.portfolioimage').fadein(10000);
    });

});