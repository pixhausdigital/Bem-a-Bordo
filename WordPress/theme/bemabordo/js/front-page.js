// JavaScript Document
jQuery( document ).ready( function( $ ) {
	$('#carousel').owlCarousel({
		center: true,
    	loop:true,
		items:1,
		lazyLoad:true,
		
    	margin:0,
		autoWidth:true,
		autoplay:true,
		autoplayHoverPause: false,
	});	
});