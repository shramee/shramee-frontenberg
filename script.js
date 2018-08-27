jQuery( function ( $ ) {
	$( '.popup-link' ).each( function() {
		var $t = $( this );
		if ( $t[0].tagName !== 'A' ) {
			$t = $t.find( 'a:first' );
		}
		$t.magnificPopup( {
			type: 'iframe',
			src: $t.attr( 'href' ),
		} );
	} );
} );