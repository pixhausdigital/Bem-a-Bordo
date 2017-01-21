// JavaScript Document
$( document ).ready(function() {
	$(".staticTextPart").click(function(e) {
		var a =$(this).data("static");
	    alert(a);
	});
});