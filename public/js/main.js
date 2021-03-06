$(function() {
    
    "use strict";
    
    //===== Prealoder
    
    $(window).on('load', function(event) {
        $('#preloader').delay(500).fadeOut(500);
    });
    
    
    //===== Mobile Menu 
    
    $(".navbar-toggler").on('click', function() {
        $(this).toggleClass('active');
    });
    
    $(".navbar-nav a").on('click', function() {
        $(".navbar-toggler").removeClass('active');
    });
    
    
    //===== close navbar-collapse when a  clicked
    
    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });
    
    
    //===== Sticky
    
    $(window).on('scroll',function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 10) {
            $(".navgition").removeClass("sticky");
        }else{
            $(".navgition").addClass("sticky");
        }
    });
    
    
    //===== Section Menu Active
    var scrollLink = $('.page-scroll');
    // Active link switching
    $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    scrollLink.each(function() {
        if ($(this.hash).length) {
          var offset = $(this.hash).offset().top;
          var sectionOffset = offset- 90;
          if ( sectionOffset <= scrollbarLocation ) {
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
            }
        }
        });
    });
    
    //====== Magnific Popup
    
    $('.video-popup').magnificPopup({
        type: 'iframe'
        // other options
    });
    
    
    //===== Back to top
    
    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if($(this).scrollTop() > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }
    });
    // Scroll when has in urlbar
    if (window.location.hash) {
        var hash = window.location.hash;

        if ($(hash).length) {
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 85
            }, 1200, "easeInOutExpo");
        }
    }
    
    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
    
});