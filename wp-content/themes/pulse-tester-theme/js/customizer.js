( function( $ ) {

    wp.customize( 'logo_main_name',function(value) {
        value.bind(function( newval ) {
            $( '#main-name' ).text( newval );
            $( '#main-logo').attr( 'alt', newval );
        })
    } );

    wp.customize( 'logo_main_url', function(value) {
        value.bind(function( newval)  {
            $( '#main-url' ).attr('href', newval);
        })
    });

    wp.customize( 'logo_main', function(value) {
        value.bind(function( newval ){
            $('#main-logo').attr( 'src', newval);
        })
    });

    wp.customize( 'logo_main_width', function(value) {
        value.bind(function( newval ){
            $('#main-logo').attr( 'width', newval);
        })
    });

    wp.customize( 'logo_secondary_name',function(value) {
        value.bind(function( newval ) {
            $( '#secondary-name' ).text( newval );
            $( '#secondary-logo').attr( 'alt', newval );
        })
    } );

    wp.customize( 'logo_secondary_url', function(value) {
        value.bind(function( newval)  {
            $( '#secondary-url' ).attr('href', newval);
        })
    });

    wp.customize( 'logo_secondary', function(value) {
        value.bind(function( newval ){
            $('#secondary-logo').attr( 'src', newval);
        })
    });

    wp.customize( 'logo_secondary_width', function(value) {
        value.bind(function( newval ){
            $('#secondary-logo').attr( 'width', newval);
        })
    });
} )( jQuery );