
$(window).scroll(function() {
    if ($(document).scrollTop() > 10) {
        $('.header--nav-main').addClass('change');
    } else {
        $('.header--nav-main').removeClass('change');
    }
});