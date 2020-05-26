$(document).ready(function() {
    $('.fa-bars').click(function() {
        $('.responsive-menu').slideToggle();
    });
	
	$('.close-me').click(function() {
        $('.login-msg').hide("slow");
    });

});