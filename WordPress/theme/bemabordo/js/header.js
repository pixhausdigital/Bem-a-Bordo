// JavaScript Document
jQuery( document ).ready( function( $ ) {
	if(langCurrent == "en"){
		$("#ptContainer .active").hide();
		$("#enContainer .inactive").hide();
		$("#enContainer .active").show();
		$("#ptContainer .inactive").show();
	}else if(langCurrent == "pt"){
		$("#enContainer .active").hide();
		$("#ptContainer .inactive").hide();
		$("#ptContainer .active").show();
		$("#enContainer .inactive").show();
	}
});