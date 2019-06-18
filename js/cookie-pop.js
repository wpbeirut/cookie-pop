/* global cookie_pop_text */
(function ($) {
  
    'use strict';
  
    if ( 'set' !== $.cookie( 'cookie-pop' ) ) {
  
        $('body').prepend('<div class="cookiePopup">' + cookie_pop_text.message + '<a class="closePopup" id="accept-cookie">' + cookie_pop_text.button + '</a> <a href="' + cookie_pop_text.link + '">' + cookie_pop_text.more + '</a></div>');
  
        $('a.closePopup').click(function (e) {
            e.preventDefault();
            $.cookie( 'cookie-pop', 'set' );
            $( '.cookiePopup' ).remove();
  
        });
  
    }
  
}(jQuery) );