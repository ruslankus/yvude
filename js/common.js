$(document).ready(function() {
	var breakpoint = 991;
	viewportWidth = window.innerWidth;
	
	if (viewportWidth > breakpoint){
		$(".nano").nanoScroller();
	}
});