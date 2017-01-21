// JavaScript Document
jQuery( document ).ready( function( $ ) {
		var id = window.location.hash.slice(1);
		//alert(id);
		if(id !== ""){
			var navbarHeight = $("#headerContainer").outerHeight();
			$('html,body').animate({scrollTop: ($("#"+id).offset().top)-navbarHeight},100);
		}
});
jQuery( document ).ready( function( $ ) {

	$('#carousel').owlCarousel({
		center: true,
    	loop:true,
		items:1,
		lazyLoad:true,
		
    	margin:0,
		autoWidth:true,
		autoplay:true,
		autoplaySpeed:1000,
		autoplayHoverPause: false,
	});
	 $(".menuItem").click(function(){
		var id = $(this).attr("data-linkTo");
		var navbarHeight = $("#headerContainer").outerHeight();
		$('html,body').animate({scrollTop: ($("#"+id).offset().top)-navbarHeight},600, function(){
				setTimeout(function(){
					//$('#headerContainer').removeClass('nav-down').addClass('nav-up');
				}, 200);
				//alert("boo");
			});
			$("#anchorMenuHamburger").hide();
			$("#anchorMenuHamburger").data("shown",false);
	 });
	
	 $("#hamburgerMenuIcon").click(function(){
		 if($("#hamburgerMenuContainer").data("shown") == true){
			$("#hamburgerMenuContainer").hide();
			$("#hamburgerMenuContainer").data("shown",false);
		 }else{
		 	$("#hamburgerMenuContainer").show();
			$("#hamburgerMenuContainer").data("shown",true);
		 }
	 });
	 var didScroll;
var lastScrollTop = 0;
var delta = 30;
var navbarHeight = $("#logoContainer").outerHeight();
//alert(navbarHeight);

});