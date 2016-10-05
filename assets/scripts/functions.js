import WebFont from 'webfontloader'
import WOW from 'wow.js'
import initTope from './isotope'
import initSlider from './slider'
import initSearch from './search'
import initVideoBg from './video-bg'
import $ from 'jquery'
import initNav from './navbar'

// Fonts
WebFont.load({
google: {
  families: ['Space Mono', 'Montserrat']
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
