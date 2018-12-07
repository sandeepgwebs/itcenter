 
	$(document).ready(function(){

		$('.home-slider').owlCarousel({
			loop:true,
			nav:true,
			dots:false,
			items:1,
			autoHeight: false,
			navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		});

		$('.navbar-nav li').on('click',function(){
		   $('.active').removeClass('active');
		   $(this).addClass('active');
		});
	});
