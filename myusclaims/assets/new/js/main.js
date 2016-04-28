jQuery(document).ready(function($){
	$('#carousel-example-generic2').carousel();
	
	jQuery(window).load(function(){

		//homepage div set same height
		sameheight();

		$(window).resize(function(){

			$('.equal_height').removeAttr('style');

			sameheight();

		});

	});


});

function sameheight(){
	//homepage div set same height
	var biggestHeight = 0;
	var $ = jQuery;

	$('.equal_height').each(function(){
		if($(this).height() > biggestHeight){

			biggestHeight = $(this).height();
		}
	});

	$('.equal_height').outerHeight(biggestHeight);
}