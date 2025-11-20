import Module from './_moduleblank'


// collect modules
const init = [ Module ]

// init modules
document.addEventListener('DOMContentLoaded', () => {
  init.forEach((module) => {
    if(document.querySelector(module.trigger)) {
      module.init()
    }
  })
});
