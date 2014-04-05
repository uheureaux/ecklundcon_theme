/* 
 * File Name: top_button.js
 * 
 * Written by: Rafael Collado of EpicLunch Designs
 * 
 * This JavaScript files is strictly for the TOP BUTTON.
 * It is for handling the scroll-top, fade-in and fade-out of the button
 * depending on the document's scroll location and state.
 */

$('document').scroll(function () {
    var y = $(this).scrollTop();
    
    if(y > '100px') {
        $('').fadeIn();
    } 
    else {
        $('').fadeOut();
    }
});

$('#top-button a').click(function() {
        var topButtonId = $(this).attr("href");
        $('body,html').animate({scrollTop: $(topButtonId).offset().top}, 'slow');
        return false;
});


