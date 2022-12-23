jQuery(document).ready(function( $ ) {
    // fix the height of the section dynamically
    totalHeader = $('.header-content').innerHeight();
    $('.owl-carousel').css( { height: `calc(100% - ${totalHeader}px)` } );
    // Slider
    $('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        nav:true,
        dots:true,
        autoplay:true,
        autoplaySpeed:1000,
        smartSpeed:1500,
        autoplayHoverPause:false
    });
    // Animate Sections
    $(window).scroll(function () {
        mobilierBTop = $('#mobilier-bureau').offset().top;
        $('.mobilier-bureau').css({'top': '50%', 'opacity': '0'});
        if ($(this).scrollTop() > mobilierBTop - 500) {
            $('.mobilier-bureau').animate({
                'top' : 0,
                'opacity' : 1
            },900);
        }

        
        aboutTop = $('#quick-about').offset().top;
        $('.quick-about').css({'left': '-100%', 'opacity': '0'});
        if ($(this).scrollTop() > aboutTop - 300) {
            $('.quick-about').animate({
                'left' : 0,
                'opacity' : 1
            },1100)
        }
    })




});




    





















