var viewportWidth;
var breakpoint = 991;
$(document).ready(function(e) {	
	 viewportWidth = window.innerWidth;
        
        $( window ).resize(function() {
             viewportWidth = window.innerWidth;
        });
    
        
	       
        $('.nav li a').click(function(e) {
            console.log(viewportWidth);
            if(viewportWidth > breakpoint){
                
                var link_number = $(this).data('link');
                navigation(link_number); 
                return false
            }else{
                return true;
            }
        });
        
    
});







function navigation(link_number){
	
	var link = "/page/link/" + link_number;
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

