import $ from 'jquery';

const initNav = () => {
    // Navbar height change on scroll
    let initNavHeight = 80
    let initLogoHeight = $('.site-logo').height()
    let initLogoWidth = $('.site-logo').width()
    let navTop = $('.large-nav-bar').offset().top
    let factor = 1.5

    $(() => {
        $('.large-nav-bar').data('size', 'big');
        $('.site-logo').data('size', 'big');
    });

    $(window).scroll(() => {
        if ($(document).scrollTop() > 0) {
            if ($('.large-nav-bar').data('size') === 'big') {

                $('.large-nav-bar').data('size', 'small');
                $('.large-nav-bar').stop().animate({
                    height: initNavHeight / factor
                }, 600);

                // $('.site-logo').data('size','small');
                // $('.site-logo').stop().animate({
                //   height: initLogoHeight / factor,
                //   width: initLogoWidth / factor
                // },600);

                $('.large-nav-bar-lower').stop().animate({
                    height: initNavHeight / factor
                }, 600);

            }
        } else {
            if ($('.large-nav-bar').data('size') === 'small') {

                $('.large-nav-bar').data('size', 'big');
                $('.large-nav-bar').stop().animate({
                    height: initNavHeight + 'px'
                }, 600);

                // $('.site-logo').data('size','big');
                // $('.site-logo').stop().animate({
                //   height: initLogoHeight,
                //   width: initLogoWidth
                // },600);

                $('.large-nav-bar-lower').stop().animate({
                    height: initNavHeight
                }, 600);

            }
        }

    });
}

export default initNav
