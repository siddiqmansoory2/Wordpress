 jQuery(document).on('click.nav','.navbar-collapse.in',function(e) {
    if( jQuery(e.target).is('a.close-menu') ) {
        jQuery(this).removeClass('in').addClass('collapse');
    }
});





jQuery(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
jQuery('.video-btn').click(function() {
    $videoSrc = jQuery(this).data( "src" );
});
console.log($videoSrc);
 
// when the modal is opened autoplay it  
jQuery('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
jQuery("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  

// stop playing the youtube video when I close the modal
jQuery('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    jQuery("#video").attr('src',$videoSrc); 
}) 
    
// document ready  
});





jQuery(document).on('ready', function() {
        jQuery('.testimonial').slick({
            dots: true,
            arrow: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 1200,
            slidesToShow: 1,
            slidesToScroll: 1,
            
        });
          
    });




jQuery('.panel-collapse').on('show.bs.collapse', function () {
    jQuery(this).siblings('.panel-heading').addClass('active');
  });

  jQuery('.panel-collapse').on('hide.bs.collapse', function () {
    jQuery(this).siblings('.panel-heading').removeClass('active');
  });




  jQuery('.floating-label input, .floating-label select, .floating-label textarea').on('focus blur', function (e) {
  jQuery(this).parents('.floating-label').toggleClass('is-focused', (e.type === 'focus' || this.value.length > 0));
}).trigger('blur');

 