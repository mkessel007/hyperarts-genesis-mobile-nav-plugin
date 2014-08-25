/** 
*
*	Hyperarts - Genesis 2.1.2 Mobile Nav Plugin
*
*	Plugin Name: Hyperarts - Genesis 2.1.2 Mobile Nav
*	Plugin URI: http://wordpress.org/plugins/hello-dolly/
*	Description: Putting OZZY RODRIGUEZ awesome code into a simple to install plugin.  Based on Genesis 2.1.2 and 800px break point.
* 	Author: OZZY RODRIGUEZ & Adam LaBarge of Hyperarts
*	Version: 1.0.0
*	Author URI: http://ozzyrodriguez.com/ & https://github.com/adamplabarge &http://hyperarts.com
*
*	From here: http://wpbacon.com/tutorials/genesis-responsive-menu-2-0/
*/
( function( window, $, undefined ) {
	'use strict';
 
	$( 'nav' ).before( '<button class="menu-toggle" role="button" aria-pressed="false"></button>' ); // Add toggles to menus
	$( 'nav .sub-menu' ).before( '<button class="sub-menu-toggle" role="button" aria-pressed="false"></button>' ); // Add toggles to sub menus
 
	// Show/hide the navigation
	$( '.menu-toggle, .sub-menu-toggle' ).on( 'click', function() {
		var $this = $( this );
		$this.attr( 'aria-pressed', function( index, value ) {
			return 'false' === value ? 'true' : 'false';
		});
 
		$this.toggleClass( 'activated' );
		$this.next( 'nav, .sub-menu' ).slideToggle( 'slow', "swing" );
 
	});
 
})( this, jQuery );