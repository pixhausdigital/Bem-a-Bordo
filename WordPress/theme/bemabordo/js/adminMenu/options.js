// JavaScript Document
jQuery( document ).ready( function( $ ) {
	//alert('boo');
	$('#previewButton').click(function(e) {
	   alert('click'); 
	   $.ajax({url: "bemabordo_people.php", success: function(result){
        $("#orderPreview").html(result);
    }});
	});
});