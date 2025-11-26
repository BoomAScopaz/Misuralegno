import Alpine from 'alpinejs'
import boxresize from './_box-resize'
import gridgal from './_gridgal'
import Slider from './_slider'

window.boxresize = boxresize
window.gridgal = gridgal

Alpine.start()

// collect modules
const init = [ Slider ]

// init modules
document.addEventListener('DOMContentLoaded', () => {
  init.forEach((module) => {
    if(document.querySelector(module.trigger)) {
      module.init()
    }
  })
});
