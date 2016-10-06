import $ from 'jquery';

const initNav = () => {
	
	const logo = $('#main-logo-wrap img.custom-logo:first');
	
    // Navbar height change on scroll
    let initNavHeight = $('.large-nav-bar').height();
    let navTop = $('.large-nav-bar').offset().top;
	let initLogoHeight = logo.height();
	let initLogoWidth = logo.width();
    let factor = 1.5;

    $(() => {
        $('.large-nav-bar').data('size', 'big');
    });
	
    $(window).scroll(() => {
        if ($(document).scrollTop() > 0) {
            if ($('.large-nav-bar').data('size') === 'big') {

                $('.large-nav-bar').data('size', 'small');
                $('.large-nav-bar').stop().animate({
                    height: initNavHeight / factor
                }, 600);

                logo.stop().animate({
                  height: initLogoHeight / factor,
                  width: initLogoWidth / factor
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
                }, 600);

                logo.stop().animate({
                  height: initLogoHeight,
                  width: initLogoWidth
                },600);

                $('.large-nav-bar-lower').stop().animate({
                    height: initNavHeight
                }, 600);

            }
        }

    });
}

export default initNav
