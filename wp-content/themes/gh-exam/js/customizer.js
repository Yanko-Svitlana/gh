/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	//Displaying sections on homepage
	wp.customize( 'display_first_section', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#first_section' ).show() : $( '#first_section' ).hide();
		} );
	} );
	wp.customize( 'display_second_section', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#second_section' ).show() : $( '#second_section' ).hide();
		} );
	} );
	wp.customize( 'display_third_section', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#third_section' ).show() : $( '#third_section' ).hide();
		} );
	} );
	wp.customize( 'display_fourth_section', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#fourth_section' ).show() : $( '#fourth_section' ).hide();
		} );
	} );
	wp.customize( 'display_fifth_section', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#fifth_section' ).show() : $( '#fifth_section' ).hide();
		} );
	} );
	wp.customize( 'display_sixth_section', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#sixth_section' ).show() : $( '#sixth_section' ).hide();
		} );
	} );
} )( jQuery );
