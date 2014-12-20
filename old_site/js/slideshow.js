$(document).ready(function() {

$("#slideshow").css("overflow", "hidden");

$("ul#slides").cycle({
	fx: 'fade',
	pause: 1,
	speed:    450, 
    timeout:  5500,
	prev: '#prev',
	next: '#next'
});

$('#pauseButton').click(function() { 
    $('ul#slides').cycle('pause'); 
});

});


// JavaScript Document