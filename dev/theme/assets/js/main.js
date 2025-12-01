import Alpine from 'alpinejs'

// Modules to import
import Slider from './_slider'
import Animations from './_animations'

// collect modules
const init = [ Slider, Animations ]


// alpine stores
import boxresize from './_box-resize'
import gridgal from './_gridgal'
import videopopup from './_video-popup'


// alpine
window.boxresize = boxresize
window.gridgal = gridgal
window.videopopup = videopopup
Alpine.start()


// init modules
document.addEventListener('DOMContentLoaded', () => {
  init.forEach((module) => {
    if(document.querySelector(module.trigger)) {
      module.init()
    }
  })
});
