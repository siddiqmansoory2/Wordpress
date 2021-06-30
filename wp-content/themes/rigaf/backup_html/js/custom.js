jQuery(function( $ ){
    if( $( document ).scrollTop() > 0 ){
           $( '.cms-header' ).addClass( 'dark' );
    }

    // Add opacity class to site header.
    $( document ).on('scroll', function(){
           if ( $( document ).scrollTop() > 0 ){
                   $( '.cms-header' ).addClass( 'dark' );

           } else {
                   $( '.cms-header' ).removeClass( 'dark' );
           }

    });

});


$('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
});

$('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
});

