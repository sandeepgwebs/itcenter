 
	$(document).ready(function(){

		$('.home-slider').owlCarousel({
			loop:true,
			nav:true,
			dots:false,
			items:1,
			autoHeight: false,
			navText:["<i class='icon-left-arrow'></i>","<i class='icon-right-arrow'></i>"],
		});

		$('.nav li').on('click',function(){
		   $('.active').removeClass('active');
		   $(this).addClass('active');
		});
	});
