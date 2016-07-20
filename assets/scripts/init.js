import WebFont from 'webfontloader'
import WOW from 'wow.js'
import lazyload from 'jquery-lazyload'
import * as isotope from './isotope'

import initNav from './navbar'

const init = () => {

  // Fonts
  WebFont.load({
    google: {
      families: ['Montserrat']
    }
  });

  isotope()

  // Init nav height change
  initNav()

  // Animations
  new WOW().init();

  // Lazy Loading
  $(".lazy").lazyload();

}
