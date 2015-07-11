$(document).ready(function(e){ 
	$('.move').click(function(){
		$('#content').css("z-index","1");

		
	});
	$('#one').hover(function(){
		$('#content').css("z-index","-100");

		
	});	 
	$("#slideshow > div:gt(0)").hide();

	setInterval(function() { 
 	 $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
})
