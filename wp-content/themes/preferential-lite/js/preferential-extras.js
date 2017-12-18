/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
 
 ( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window );
		
		
	// Enable menu toggle for small screens.
	( function() {
		var nav = $( '#primary-navigation' ), button, menu;
		if ( ! nav ) {
			return;
		}

		button = nav.find( '.menu-toggle' );
		if ( ! button ) {
			return;
		}

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.preferential', function() {
			nav.toggleClass( 'toggled-on' );
		} );
	} )();
	
	
/** 
 * Add some classes to elements
 */
	
	jQuery(function($){
	$( '.gallery' ).addClass( 'clearfix' );

	
});

/** 
 * Skip link focus fix
 */

( function() {
	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
		var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
		window[ eventMethod ]( 'hashchange', function() {
			var element = document.getElementById( location.hash.substring( 1 ) );

			if ( element ) {
				if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
					element.tabIndex = -1;

				element.focus();
			}
		}, false );
	}
})();




/**
 * Make progress bars animated
 */

$(window).ready(function(e){
      $.each($('div.progress-bar'),function(){
        $(this).css('width', $(this).attr('aria-valuetransitiongoal')+'%');
      });
});



/**
 * Tooltips and popups on mouseover
 */

$('[data-toggle="tooltip"]').tooltip({   
});
$('[data-toggle="popover"]').popover({
    trigger: 'hover',       
});
$('#pref-tips').tooltip({
    'show': true,        
});
$('#pref-tips').tooltip('show');



// lets add some bootstrap styling to WordPress elements

jQuery(function($){
	$( '#wp-calendar' ).addClass( 'table' );
	$( '#submit' ).addClass( 'btn' );
	$( '.pushbutton-wide' ).addClass( 'btn btn-sm' );
	$( '#bbpress-forums button' ).addClass( 'btn btn-sm' );
	$( '#bbp_search_submit').addClass( 'btn' );
	$( '#bbp_search' ).addClass( 'form-control' );
	$( '#bbp-search-form' ).addClass( 'input-group' );
	$( '#bbp_topic_title' ).addClass( 'form-control' );
	$( '#bbp_topic_content' ).addClass( 'form-control' );
	$( '#bbp_topic_tags' ).addClass( 'form-control' );
	$( '#bbpress-forums select' ).addClass( 'form-control' );
	$( '#bbp_topic_submit', '.subscription-toggle' ).addClass( 'btn' );
	$( '.subscription-toggle' ).addClass( 'btn btn-sm' );
	$( '#bbp_anonymous_author' ).addClass( 'form-control col-md-6' );
	$( '#bbp_anonymous_email' ).addClass( 'form-control col-md-6' );
	$( '#bbp_anonymous_website' ).addClass( 'form-control col-md-6' );
	
	
});

} )( jQuery );
