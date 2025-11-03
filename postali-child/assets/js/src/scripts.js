/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	//Hamburger animation
	$('#menu-icon').click(function() {
		$(this).toggleClass('active');
		$('.menu').toggleClass('active');
		return false;
	});

	//Toggle mobile menu & search
	$('.toggle-nav').click(function() {
		$('.menu').slideToggle(400);
	});
	 
	//Close navigation on anchor tap
	$('.toggle-nav.active').click(function() {	
		$('.menu').slideUp(400);
	});	

	//Mobile menu accordion toggle for sub pages
	$('#menu-main-menu > li.menu-item-has-children, #menu-main-menu-greensburg > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="icon-Worgul-Icon-Right-Button"></span></span></div>');

    $('#menu-main-menu > li.menu-item-has-children > ul.sub-menu > li.menu-item-has-children, #menu-main-menu-greensburg > li.menu-item-has-children > ul.sub-menu > li.menu-item-has-children').append('<div class="accordion-toggle"><span class="icon-Worgul-Icon-Right-Button"></span></span></div>');

    $('#menu-main-menu .accordion-toggle, #menu-main-menu-greensburg .accordion-toggle').click(function() {
        $(this).parent().find('> ul').slideToggle(400);
        $(this).toggleClass('toggle-background');
        $(this).find('.icon-Worgul-Icon-Right-Button').toggleClass('toggle-rotate');
    });
	  
    //fitvids 
    $(document).ready(function(){
        // Target your .container, .wrapper, .post, etc.
        // $(".video-wrapper").fitVids();
    });

	// Clicking on the accordion header title
    $(".accordions").on("click", ".accordions_title", function() {	
	// will (slide) toggle the related panel.
	$(this).toggleClass("active").next().slideToggle();
	});

    // js for adjusting position of flyout
    if (window.innerWidth < 1200) {
        $('#menu-main-menu > li.menu-item-has-children > ul.sub-menu > li > ul.sub-menu, #menu-main-menu-greensburg > li.menu-item-has-children > ul.sub-menu > li > ul.sub-menu').addClass('left');
    } else {
        $('#menu-main-menu > li.menu-item-has-children > ul.sub-menu > li > ul.sub-menu, #menu-main-menu-greensburg > li.menu-item-has-children > ul.sub-menu > li > ul.sub-menu').addClass('right');
    }

		// Toggle search function in nav
		$( document ).ready( function() {
			var width = $(document).outerWidth();
			if (width > 992) {
				var open = false;
				$('#search-button').attr('type', 'button');
				
				$('#search-button').on('click', function(e) {
						if ( !open ) {
							$('#search-input-container').removeClass('hdn');
							$('#search-button span').removeClass('icon-magnifying-glass').addClass('icon-close-x');
							$('#menu-main-menu li.menu-item').addClass('disable');
							$('.form-control').focus();
							open = true;
							return;
						}
						if ( open ) {
							$('#search-input-container').addClass('hdn');
							$('#search-button span').removeClass('icon-close-x').addClass('icon-magnifying-glass');
							$('#menu-main-menu li.menu-item').removeClass('disable');
							open = false;
							return;
						}
				}); 
				$('html').on('click', function(e) {
					var target = e.target;
					if( $(target).closest('.navbar-form-search').length ) {
						return;
					} else {
						if ( open ) {
							$('#search-input-container').addClass('hdn');
							$('#search-button span').removeClass('icon-close-x').addClass('icon-magnifying-glass');
							$('#menu-main-menu li.menu-item').removeClass('disable');
							open = false;
							return;
						}
					}
				});
			}
		});

		//keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
		$(document).ready(function() {
			// open submenu when user tabs into it
			$('.menu-item-has-children').on('focusin', function() {
				var subMenu = $(this).find('> .sub-menu');
				subMenu.css({'display' : 'block', 'opacity' : '1'});
				// removes dropdown when tabbed away from last element in submenu
				$(this).find('> .sub-menu > li:last-child').on('focusout', function() {
					subMenu.removeAttr('style');
				});
				// removes dropdown on reverse tabbing
				$(this).on('focusout', function(e) {
					$(this).on('keydown', function(e) {
						if( e.shiftKey && $(e.target).siblings().hasClass('sub-menu') ) {
							subMenu.removeAttr('style');
						}
					});
				});
			});
		});
	
		$(document).ready(function() {
			var width = $(document).outerWidth();
			console.log(width);
			if( $('.page-template-front-page').length && width > 992 ) {
				var phoneTabPosition = $('.phone_tab').scrollTop();
				$(document).on('scroll', function() {
					var userPosition = $(document).scrollTop();

					if( userPosition >= phoneTabPosition) {
						$('.phone_tab').css({
							'position' 	: 'fixed',
							'top'		: '0px',
							'bottom'	: 'unset'
						})
					}
					if( userPosition <= 125 ) {
						$('.phone_tab').css({
							'position' 	: 'absolute',
							'top'		: 'unset',
							'bottom' 	: '-71px'
						})
					}
				})
			}
		})
});