 jQuery(document).on('click.nav','.navbar-collapse.in',function(e) {
    if( jQuery(e.target).is('a.close-menu') ) {
        jQuery(this).removeClass('in').addClass('collapse');
    }
});



jQuery('.panel-collapse').on('show.bs.collapse', function () {
    jQuery(this).siblings('.panel-heading').addClass('active');
  });

  jQuery('.panel-collapse').on('hide.bs.collapse', function () {
    jQuery(this).siblings('.panel-heading').removeClass('active');
  });



jQuery("#menu-header-menu > li.menu-item-has-children a").after('<span class="arrow"></span>');
    jQuery("#menu-header-menu > li.menu-item-has-children > .arrow").click(function(){
    if(jQuery(this).parent().hasClass("show")){
        jQuery(this).parent().removeClass("show");
    }else{
        jQuery("#menu-header-menu > li.menu-item-has-children").removeClass("show");
        jQuery(this).parent().toggleClass("show");
    }
});



jQuery(function( $ ){
    if( jQuery( document ).scrollTop() > 0 ){
           jQuery( '.cms-header' ).addClass( 'dark' );
    }

    // Add opacity class to site header.
    jQuery( document ).on('scroll', function(){
           if ( jQuery( document ).scrollTop() > 0 ){
                   jQuery( '.cms-header' ).addClass( 'dark' );

           } else {
                   jQuery( '.cms-header' ).removeClass( 'dark' );
           }

    });

});




var $status = jQuery('.pagingInfo');
    var $slickElement = jQuery('.slideshow');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });

    $slickElement.slick({
        autoplay: true,
        dots: false
});


jQuery(document).ready(function(){
    
    jQuery(".info").hide();

    jQuery("#expand").click(function(){
        jQuery(".info").slideToggle();
    });

    jQuery('#expand').on('click',function () {
        jQuery('#expand').toggleClass('clicked');
    });
});




       



  
 