import $ from 'jquery'

const initNav = () => {
    // Navbar height change on scroll
    let initNavHeight = 100
    let initLogoHeight = $('.custom-logo').height()
    let navTop = $('.large-nav-bar').offset().top
    let factor = 1.5

    $(() => {
        $('.large-nav-bar').data('size', 'big');
    $('.custom-logo').data('size', 'big');
});

    $(window).scroll(() => {
        if ($(document).scrollTop() > 0) {
        if ($('.large-nav-bar').data('size') === 'big') {

            $('.large-nav-bar').data('size', 'small');
            $('.large-nav-bar').stop().animate({
                height: initNavHeight / factor
            }, 600);

            $('.custom-logo').data('size','small');
            $('.custom-logo').stop().animate({
                height: initLogoHeight / factor
            },600);

            $('.large-nav-bar-lower').stop().animate({
                height: initNavHeight / factor
            }, 600);

        }
    } else {
        if ($('.large-nav-bar').data('size') === 'small') {

            $('.large-nav-bar').data('size', 'big');
            $('.large-nav-bar').stop().animate({
                height: initNavHeight + 'px'
            }, 200);

            $('.custom-logo').data('size','big');
            $('.custom-logo').stop().animate({
                height: initLogoHeight
            },200);

            $('.large-nav-bar-lower').stop().animate({
                height: initNavHeight
            }, 200);

        }
    }

});
}

export default initNav
