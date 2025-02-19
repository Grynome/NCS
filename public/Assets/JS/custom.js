
$(function() {
    /*button open main nav begin*/
    $('.button-nav').on('click', function () {
        $('.header_nav').toggleClass('opened');
        $('html').toggleClass('noscroll-tablet');
        $(this).toggleClass('active');
        $('.navoverlay').toggleClass('active');
        return false;
    });

    $('.navoverlay').on('click', function () {
        $('.header_nav').removeClass('opened');
        $('html').removeClass('noscroll-tablet');
        $('.button-nav').removeClass('active');
        $('.navoverlay').removeClass('active');
    });
    /*button open main nav end*/

    //header_categ_opener
    $('.header_categ_opener').on('click', function () {
        $('.header_categ_drop').toggleClass('opened');
        $(this).toggleClass('active');
        return false;
    });

    //
    $(document).mouseup(function(e) {
        var container = $(".header_categ");
        if (!container.is(e.target) && container.has(e.target).length === 0)     {
            $('.header_categ_opener').removeClass('active');
            $('.header_categ_drop').removeClass('opened');
        }
    });

    //js-local
    $('.js-local').on('click', function () {
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top 
        }, 700);
        $('.header_nav').removeClass('opened');
        $('html').removeClass('noscroll-tablet');
        $('.button-nav').removeClass('active');
        $('.navoverlay').removeClass('active');
        return false;
    });
});

var handler = function() {
    var height_header = $('header').height();
}
$(window).bind('load', handler);
$(window).bind('resize', handler);

