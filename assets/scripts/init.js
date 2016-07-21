import WebFont from 'webfontloader'
import WOW from 'wow.js'
import initTope from './isotope'
import initSlider from './slider'
import initSearch from './search'
import initVideoBg from './video-bg'
import $ from 'jquery'

import initNav from './navbar'

const init = () => {

  // Fonts
  WebFont.load({
    google: {
      families: ['Montserrat']
    }
  });

  initTope()

  // Init nav height change
  initNav()

  initVideoBg()

  // featherlight lightbox
  // $('.gallery').featherlightGallery();

  initSearch()

  // Animations
  new WOW().init();

  // Site title
  // wp.customize('blogname', function(value) {
  //   value.bind(function(to) {
  //     $('.brand').text(to);
  //   });
  // });

}

export default init