//jQuery to collapse the navbar on scroll

$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        
    }

    /*if ($('#ul-menu li:nth-child(3)').hasClass('active') || $('#ul-menu li:nth-child(4)').hasClass('active') || $('#ul-menu li:nth-child(5)').hasClass('active') || $('#ul-menu li:nth-child(6)').hasClass('active')) {
        $('#div-left').css('visibility', 'visible');
        $('#div-right-one').css('visibility', 'visible');
        $('#div-right-two').css('visibility', 'visible');
    } else {
        $('#div-left').css('visibility', 'hidden');
        $('#div-right-one').css('visibility', 'hidden');
        $('#div-right-two').css('visibility', 'hidden');
    }*/

    if ($('nav').hasClass('top-nav-collapse')) {
        $('#div-left').css('visibility', 'visible');
        $('#div-right-one').css('visibility', 'visible');
        $('#div-right-two').css('visibility', 'visible');
    } else {
         $('#div-left').css('visibility', 'hidden');
        $('#div-right-one').css('visibility', 'hidden');
        $('#div-right-two').css('visibility', 'hidden');
    }

        
});


//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 800, 'easeInOutExpo');
        
        event.preventDefault();
        
    });
});
