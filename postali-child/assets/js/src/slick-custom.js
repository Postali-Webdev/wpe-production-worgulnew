/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('#header-results').slick({
		dots: false,
		infinite: true,
		fade: true,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 1300,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: false,
    	nextArrow: false,
    	swipeToSlide: true,
		cssEase: 'ease-in-out'
	});

    $('#process-slider').slick({
		dots: true,
        arrows:true,
		infinite: false,
		fade: true,
		autoplay: false,
  		autoplaySpeed: 5000,
  		speed: 600,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        appendDots: '.nav-dots'
	});
	
});