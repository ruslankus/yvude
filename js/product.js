$(document).ready(function() {
	
 $('.owl-carousel').owlCarousel({
	responsiveClass:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        992:{
            items:3
        }
    },
	navContainer: "#carousel-product",
	navRewind: false,
	touchDrag: false,
	mouseDrag: false,
	responsiveRefreshRate: 100,
})
	

	
});