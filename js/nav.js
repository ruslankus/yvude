$(document).ready(function(e) {
	var breakpoint = 991;
	viewportWidth = window.innerWidth;
	
	if (viewportWidth > breakpoint){

		$('.nav li a').click(function(e) {
			var link_number = $(this).data('link');
			navigation(link_number); 
			return false
		});
	}
	
    
});



function navigation(link_number){
	
	var link = "/" + link_number + '.html';
	$.ajax({url:link}).done(function(data){
		var top_block = $('.top-block');
		var newData = top_block.html(data);
		
		if(link_number == 3 || link_number ==  5){
			newData.find('.nano').nanoScroller();
		}
		
		if(link_number == 4){
			newData.find('.owl-carousel').owlCarousel({
				responsiveClass:true,
				nav:false,
				navRewind: false,
				responsive:{
					992:{
						items:3
					}
				},
				responsiveRefreshRate: 100,
			});
			
		}
		
		top_block.addClass('felt');
		var tid = setTimeout(function(){putData(data,top_block,link_number); clearTimeout(tid);}, 400);
	});
	
}//navigation

function putData(data, top_block, link_number){
	var nData = $('.bottom-block').html(data);
	
	if(link_number == 3 || link_number ==  5){
		nData.find('.nano').nanoScroller();
	}
	
	 if(link_number == 4){
		nData.find('.owl-carousel').owlCarousel({
			nav:true,
			navContainer: ".bottom-block #carousel-product",
		});

	}
	
	top_block.removeClass('felt').html('');
}//putData

