import $ from 'jquery';

const initNav = () => {
  // Navbar height change on scroll
  var initNavHeight = 80,
      initLogoHeight = $('.site-logo').height(),
      initLogoWidth = $('.site-logo').width(),
      navTop = $('.large-nav-bar').offset().top,
      factor = 1.5;

  $(function(){
    $('.large-nav-bar').data('size','big');
    $('.site-logo').data('size','big');
  });

  $(window).scroll(function(){
    if($(document).scrollTop() > 0) {
      if($('.large-nav-bar').data('size') === 'big') {

        $('.large-nav-bar').data('size','small');
        $('.large-nav-bar').stop().animate({
          height: initNavHeight / factor
        },600);

        // $('.site-logo').data('size','small');
        // $('.site-logo').stop().animate({
        //   height: initLogoHeight / factor,
        //   width: initLogoWidth / factor
        // },600);

        $('.large-nav-bar-lower').stop().animate({
          height: initNavHeight / factor
        }, 600);

      }
    }
    else {
      if($('.large-nav-bar').data('size') === 'small') {

        $('.large-nav-bar').data('size','big');
        $('.large-nav-bar').stop().animate({
          height: initNavHeight + 'px'
        },600);

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