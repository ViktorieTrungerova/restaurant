$(document).ready(function () {
    function initScrollup() {
        if ($(window).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    }

    $(window).scroll(function () {
        initScrollup();
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    $('[data-scroll_to]').click(function () {
        var scrollToId = $(this).data('scroll_to');

        $("html, body").animate({
            scrollTop: $(scrollToId).offset().top
        }, 600);
        return false;
    });

});