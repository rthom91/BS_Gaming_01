

//Scroll To top  
jQuery(document).ready(function() {
  var offset = 400;
  var duration = 800;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.movetotop').fadeIn(duration);
    } else {
      jQuery('.movetotop').fadeOut(duration);
    }
  });
    
  jQuery('.movetotop').click(function(event) {
    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
});


/* Carousel interval and Text effect */ 
jQuery(document).ready(function () {
  var carouselContainer = jQuery('.carousel');
  var slideInterval = 9000;

	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		
		elems.each(function () {
			var jQuerythis = jQuery(this),
				jQueryanimationType = jQuerythis.data('animation');
			jQuerythis.addClass(jQueryanimationType).one(animEndEv, function () {
				jQuerythis.removeClass(jQueryanimationType);
			});
		});
	}
	
	//Variables on page load 
	var jQuerymyCarousel = jQuery('#carousel-example-generic'),
		jQueryfirstAnimatingElems = jQuerymyCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	jQuerymyCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations(jQueryfirstAnimatingElems);
	
	//Pause carousel  
	jQuerymyCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	jQuerymyCarousel.on('slide.bs.carousel', function (e) {
		var jQueryanimatingElems = jQuery(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations(jQueryanimatingElems);
	});  
	
});

jQuery(document).ready(function(){
  jQuery(".carousel-caption h6").each(function(){
	  if (jQuery(this).text().length > 220) {
	    jQuery(this).text(jQuery(this).text().substr(0, 200));
	    jQuery(this).append('...');
	  }
	});
}); 


/* SITENAME colored */
jQuery(document).ready(function() {	
  jQuery(".sitename a").lettering("words");
});  