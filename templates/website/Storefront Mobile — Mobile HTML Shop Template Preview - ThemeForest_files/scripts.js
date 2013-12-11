$(document).ready(function() {

	/* Drop Down Menu */
	$("header li.dropdown").click(function () {
      	$(this).toggleClass("expanded");
    });
	
	/* Featured Product Price Overlay */
	$("#featured .responsive .product").click(function () {
		$(this).find(".overlay").toggle('fast');
	});
	
	/* Sale Product Price Overlay */
	$(".sale .responsive .product").click(function () {
		$(this).find(".overlay").toggle('fast');
	});
	
	/* Expanding Search Input Field */
	$(".search-input").attr("value","").focus(function() {
		$(this).attr("value","").css("width","266px");
	}).focusout(function () {
		$(this).css("width","30px");
	});
	
	/* Slideshow Control */	
	$(".slider.responsive").simplecarousel({
		width: 300,
		height: 189,
		visible: 1,
		auto: 8000,
		next: $('.slider-next'),
		prev: $('.slider-prev'),
		pagination: false,
		fade: true
	});
	
	/* Featured Products Control */
	$(".featured.responsive").simplecarousel({
		width: 300,
		height: 231,
		visible: 1,
		auto: 8000,
		next: $('.featured-next'),
		prev: $('.featured-prev'),
		pagination: false,
		vertical: true
	});
	
});