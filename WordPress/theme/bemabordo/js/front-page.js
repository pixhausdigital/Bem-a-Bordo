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
// on scroll, let the interval function know the user has scrolled
$(window).scroll(function(event){
  didScroll = true;
});
// run hasScrolled() and reset didScroll status
setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);
function hasScrolled() {
	var st = $(this).scrollTop();
    //alert(Math.abs(lastScrollTop - st) <= delta);
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
		//alert("hide");
        // Scroll Down
        $('#headerContainer').removeClass('nav-down').addClass('nav-up');
		if($("#anchorMenuHamburger").data("shown") == true){
			$("#anchorMenuHamburger").hide();
			$("#anchorMenuHamburger").data("shown",false);
		 }
    } else {
		//alert("show");
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#headerContainer').removeClass('nav-up').addClass('nav-down');
			if($("#anchorMenuHamburger").data("shown") == true){
				$("#anchorMenuHamburger").hide();
				$("#anchorMenuHamburger").data("shown",false);
		 	}
        }
    }
    
    lastScrollTop = st;
}

});