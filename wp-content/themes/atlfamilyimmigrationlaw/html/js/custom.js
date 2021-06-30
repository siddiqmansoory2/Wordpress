 $(document).on('click.nav','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a.close-menu') ) {
        $(this).removeClass('in').addClass('collapse');
    }
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
    

$(document).ready(function() {
    // Gets the video src from the data-src on each button
    var $videoSrc; var $videoSrctitle;
    $(".video-btn").click(function() {
    $videoSrc = $(this).attr("data-src");
	$videoSrctitle = $(this).attr("data-title");
    	console.log("button clicked" + $videoSrc);
    });


    // when the modal is opened autoplay it
    $("#VideoModal").on("shown.bs.modal", function(e) {
    console.log("modal opened" + $videoSrc);
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr(
      "src",
      $videoSrc + "?autoplay=1&showinfo=0&modestbranding=1&rel=0&mute=1"
    );
	$("#VideoModal .modal-title").html($videoSrctitle);
    });
	
	

    // stop playing the youtube video when I close the modal
    $("#VideoModal").on("hide.bs.modal", function(e) {
    // a poor man's stop video
    $("#video").attr("src", $videoSrc);
	console.log("modal closed " + $videoSrc);
    });

  // document ready
});



var $st = $('.pagination');
var $slickEl = $('.center');

$slickEl.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    $st.text(i + ' / ' + slick.slideCount);
});

$slickEl.slick({
    centerMode: true,
    pagination: false,
    centerPadding: '420px',
    slidesToShow: 1,
    focusOnSelect: true,
    dots: false,
    infinite: true,
    responsive: [
    {
      breakpoint: 1600,
      settings: {
        centerMode: true,
        centerPadding: '320px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 1100,
      settings: {
        centerMode: true,
        centerPadding: '200px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 980,
      settings: {
        centerMode: false,
        infinite: true,
        adaptiveHeight: true,
        centerPadding: 'false',
        slidesToShow: 1
      }
    }
    ]
});

