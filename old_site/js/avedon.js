// JavaScript Document

$(document).ready(function() {

$("p#hide").hide();

$("p#collections").mouseover(function () {
      $("p#hide").toggle();
	});

$("p#collections").mouseout(function () {
      $("p#hide").toggle();
	});

$("p#hide").mouseover(function () {
      $("p#hide").show();
	});

$("p#hide").mouseout(function () {
      $("p#hide").hide();
	});

});


//other script

//$(document).ready(function() {
//
//$("p#hide").hide();
//
//$("p#collections").click(function () {
//      $("p#hide").toggle();
//	});
//	
//});

