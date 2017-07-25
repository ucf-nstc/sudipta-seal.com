var curpos;
YAHOO.util.Event.onAvailable("pagefeature",function () {
	var carousel = new YAHOO.widget.Carousel("pagefeature", {
    	isCircular: true, numVisible: 1,navigation:"",animation:{speed: 2,effect:YAHOO.util.Easing.EaseOut,method:"crossfade"},autoPlayInterval:3000});
	carousel.render();
	carousel.startAutoPlay();
});