/*
 * Author: matchthemes.com
 *
 */
 
(function($) {
    "use strict";
	
	$('.slider-4posts').owlCarousel({
   	loop:true,
	nav:true,
	dots:false,
	responsive:{	0:		{ items: 1 },
					568:	{ items: 2 },
					1024:	{ items: 4 },

				}
});
	
	// home slider
	$('.slider-1post').owlCarousel({
    items:1,
    loop:true,
	nav:true,
	dots:false,
	autoplay:true,
	autoplayTimeout:7000,
	animateOut: 'fadeOut'
});

$(window).on('load',function(){
	
	//masonry
   var portfolioItems = $('.layout-masonry');
   
   portfolioItems.isotope({
  itemSelector : '.blog-item-masonry',
  layoutMode : 'masonry',
 
	});
	
	// filter items when filter link is clicked
 $('.portfolio-filter a').on('click',function(){
 $('.portfolio-filter .current').removeClass('current');
 $(this).addClass('current');
		
  var selector = $(this).attr('data-filter');
  portfolioItems.isotope({ filter: selector });
  return false;
});

});	//window.load
	
	
//mobile menu
$('.nav-button').on('click', function(e){
	
	e.preventDefault();
	
    $('.mobile-menu-holder, .menu-mask').addClass('is-active');
	$('body').addClass('has-active-menu');

});

$('.exit-mobile, .menu-mask').on('click', function(e){
	
	e.preventDefault();

    $('.mobile-menu-holder, .menu-mask').removeClass('is-active');
	$('body').removeClass('has-active-menu');

});

$('.menu-mobile > li.menu-item-has-children > a').on('click', function(e){
			
			e.preventDefault();
			e.stopPropagation();
			
			if ( $(this).parent().hasClass('menu-open') )
			
			$(this).parent().removeClass('menu-open');
			
			else {
			
			$(this).parent().addClass('menu-open');
			
			}
																  
			});
	
	// end mobile menu
	

//gallery

$('.gallery-post a, .blocks-gallery-item a').simpleLightbox({
	heightRatio: 1,
	widthRatio: 0.8
   
});

	
// faq
$('.faq-section').hide();
$('.faq-title').on('click',function(){

  if( $(this).next().is(':hidden') ) {

$(this).toggleClass('active').next().slideDown();
  } else {
   $(this).removeClass('active').next().slideUp();
 }
  return false; 
 });	
	

//fluid width videos

  $(".single-post-content, .custom-page-template, .post-video").fitVids({customSelector: "iframe[src^='https://w.soundcloud.com']"});
 
 
 //scroll up button
 
  $(".scrollup").hide();
     $(window).on('scroll', function() {
         if ($(this).scrollTop() > 400) {
             $('.scrollup').fadeIn();
         } else {
             $('.scrollup').fadeOut();
         }
     });

$("a.scrolltop[href^='#']").on('click', function(e) {
   e.preventDefault();
   var hash = this.hash;
   $('html, body').stop().animate({scrollTop:0}, 1000, 'easeOutExpo');

});
  
})(jQuery);