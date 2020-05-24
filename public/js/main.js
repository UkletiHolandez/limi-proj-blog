$(document).ready(function() {
    $('.fa-bars').click(function() {
        $('.responsive-menu').toggleClass('expand');
    });
	
	$('.close-me').click(function() {
        //$('.login-msg').fadeOut();
        $('.login-msg').hide("slow");
        //alert("Close me");
    });

});