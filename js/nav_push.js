/* /* 
 * File Name: nav_push.js
 * 
 * Written by: Rafael Collado of EpicLunch Designs
 * 
 * This JavaScript files is strictly for the NAVIGATION BAR.
 * It is for handling the scroll-down "sticky" property of the naviation bar
 * depending on the document's scroll location and state.
 */

$(document).ready(function () {
	var header = $('nav').position().top;
        var navHeight = $('nav').outerHeight();
	
	$(window).scroll(function () {
		var windowpos = $(window).scrollTop();
		
		if(windowpos > header) {
                    $('nav').addClass('fixed').css('top', '0px').next().css('margin-top', navHeight + 'px');
                }
                else {
                    $('nav').removeClass('fixed').next().css('margin-top', '0');
                }
	});
});