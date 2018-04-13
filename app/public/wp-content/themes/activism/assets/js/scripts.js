//media queries and functions
(function ($){
  $(function (){
    $smallscreen_parallax();
    $(window).resize(function () {
    $smallscreen_parallax()
    });
  });

  $smallscreen_parallax = function ()
    {
      if ( $(window).width() >= 767 ) {
	  
	     //add parallax
         $('.section3').parallax("50%", 0.2);
		 
	    //add animation triger
         $('.startAnimation').waypoint(function() {
         var animationclass = $(this).attr('data-animate');
         $(this).css('opacity', '1');
         $(this).addClass("animated " + animationclass);
         },
         {
         offset: '100%',
         triggerOnce: true
         }
         );

        } 
else {

         $('.section3').parallax("0", 0);
		 
}            
}
})(jQuery);



(function($) {
$('a.accordion-toggle-top').on('click', function () {

    if( $(this).hasClass('collapsed') !== true ){
        $(this).addClass('fa-chevron-down');
        $(this).removeClass('fa-chevron-up');

    }else{
        $(this).removeClass('fa-chevron-down');
        $(this).addClass('fa-chevron-up');
    }
});
})(jQuery); 


(function($) {
  $('.sticker').scrollspy(); 
})(jQuery);

(function($) {
  $(".sticker").sticky(); 
})(jQuery);

(function($) {
 $('.imagepopup').colorbox({maxWidth:'95%', maxHeight:'95%', rel:'gal'});
})(jQuery); 


(function($) {
  var menu = $('.navbar');
    $(window).scroll(function() {
  });

  $('.navbar a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var target = this.hash,
  $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top
  }, 1000, 'swing', function() {
    window.location.hash = target;
  });
  });

})(jQuery); 


(function($) { 
   $("#owl-demo1").owlCarousel({
     navigation: true,
     pagination: false,
     autoPlay: true,
     responsiveRefreshRate: 200,
     items: 3,
     itemsDesktop: [1200,2],
     itemsTablet: [767,2],
     itemsPhone: [500,1],
     navigationText: false
    });
})(jQuery); 


(function($){
  $(window).load(function() {
    // Masonry Trigger
    var $container = $('#masonrycontainer');
    $container.masonry({
    itemSelector: '.masonryselector' 
    });
  }); 
})(jQuery);


(function($){
  $(window).load(function() {
    // Masonry Trigger
    var $container = $('#masonrycontainer1');
    $container.masonry({
    itemSelector: '.masonryselector1' 
    });
  }); 
})(jQuery);


(function($) {
  $('.bxtestimonials').bxSlider({
  mode: 'vertical', adaptiveHeight: true, controls: false
  });
})(jQuery);


function scrollToTop($) {
  jQuery('html, body').animate({
      scrollTop: 0
  }, 'slow');
}(jQuery);