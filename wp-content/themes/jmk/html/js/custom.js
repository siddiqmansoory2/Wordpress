 jQuery(document).on('click.nav','.navbar-collapse.in',function(e) {
    if( jQuery(e.target).is('a.close-menu') ) {
        jQuery(this).removeClass('in').addClass('collapse');
    }
});





// theme btn
var $btn = jQuery('.theme-btn'),
    $btnInk = $btn.find('.btn__ink');

// set $btnInk diameter
if (!$btnInk.height() && !$btnInk.width()) {
    var d = Math.max($btn.outerWidth(), $btn.outerHeight());
    $btnInk.css({height: d, width: d});
}

$btn.on('mouseenter', function (e) {
    var $rippler = jQuery(this),
        $ink = jQuery(this).find('.btn__ink');

    $ink.removeClass('btn__ink--active');

    // get coordinates
    var x = e.pageX - $rippler.offset().left - $ink.width() / 2;
    var y = e.pageY - $rippler.offset().top - $ink.height() / 2;

    // set $ink position and add class .animate
    $ink.css({
        top: y + 'px',
        left: x + 'px'
    }).addClass('btn__ink--active');
});

$btn.on('mouseleave', function (e) {
    var $rippler = jQuery(this),
    $ink = jQuery(this).find('.btn__ink');

    // get coordinates
    var x = e.pageX - $rippler.offset().left - $ink.width() / 2;
    var y = e.pageY - $rippler.offset().top - $ink.height() / 2;

    // set $ink position and add class
    $ink.css({
        top: y + 'px',
        left: x + 'px'
    }).removeClass('btn__ink--active');
}); 





jQuery(document).on('ready', function() {
        jQuery('.testimonial').slick({
            dots: true,
            arrow: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
           
          ]
        });
          
    });




jQuery('.panel-collapse').on('show.bs.collapse', function () {
    jQuery(this).siblings('.panel-heading').addClass('active');
  });

  jQuery('.panel-collapse').on('hide.bs.collapse', function () {
    jQuery(this).siblings('.panel-heading').removeClass('active');
  });

 