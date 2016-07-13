/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jquery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {

        // JavaScript to be fired on all pages
        $(document).foundation();

        // fancybox
        $('.fancybox').fancybox({
            padding : 0,
            openEffect  : 'elastic',
            closeBtn: false
        });

        // Fonts
        WebFont.load({
          google: {
            families: ['Montserrat']
          }
        });

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

        // Animations
        new WOW().init();

        // Lazy Loading
        $(".lazy").lazyload();


      },
      finalize: function() {
         // Dev
        console.log("END");
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
