 $(document).on('click.nav','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a.close-menu') ) {
        $(this).removeClass('in').addClass('collapse');
    }
});



$('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });



$("#menu-header-menu > li.menu-item-has-children a").after('<span class="arrow"></span>');
    $("#menu-header-menu > li.menu-item-has-children > .arrow").click(function(){
    if($(this).parent().hasClass("show")){
        $(this).parent().removeClass("show");
    }else{
        $("#menu-header-menu > li.menu-item-has-children").removeClass("show");
        $(this).parent().toggleClass("show");
    }
});




$("#menu-footer-menu > li.menu-item-has-children a").after('<span class="arrow"></span>');
    $("#menu-footer-menu > li.menu-item-has-children > .arrow").click(function(){
    if($(this).parent().hasClass("show")){
        $(this).parent().removeClass("show");
    }else{
        $("#menu-footer-menu > li.menu-item-has-children").removeClass("show");
        $(this).parent().toggleClass("show");
    }
});    




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




var $status = $('.pagingInfo');
    var $slickElement = $('.slideshow');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });

    $slickElement.slick({
        autoplay: true,
        dots: false
});



$(document).ready(function(){
    
    $(".info").hide();

    $("#expand").click(function(){
        $(".info").slideToggle();
    });

    $('#expand').on('click',function () {
        $('#expand').toggleClass('clicked');
    });
});        



  
 