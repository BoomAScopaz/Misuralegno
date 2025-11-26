
const themeName = 'misuralegno' // -->  insert theme name
const outputPath = '../wp-content/themes/' + themeName
const mix = require('laravel-mix');

require('laravel-mix-clean');

mix.setPublicPath(outputPath)

.js('theme/assets/js/main.js', 'assets/js')
.sass('theme/assets/scss/main.scss', 'assets/css')

/** copy files **/
.copy('./theme/inc/*.php', outputPath + '/inc' )
.copy('./theme/inc/acf-json', outputPath + '/acf-json' ) 
.copy('./theme/*.php', outputPath )
.copy('./theme/*.css', outputPath )
.copy('./theme/*.jpg', outputPath )
.copy('./theme/components', outputPath + '/components' )
.copy('./theme/pages', outputPath + '/pages' )
.copy('./theme/assets/img',  outputPath + '/assets/img')
.copy('./theme/assets/fonts',  outputPath + '/assets/fonts')

/** options **/
.options({
    processCssUrls: false,
})

/** clean old files **/
.clean({
   cleanStaleWebpackAssets: false,
   cleanOnceBeforeBuildPatterns: ['**/*', '!vendor/**'] 
})

/** browserSync **/
mix.browserSync({
  proxy: {
    target: 'https://misuralegno.lndo.site',
    proxyOptions: {
      secure: false // Ignora verifica certificati SSL
    }
  },
  https: true,
  host: 'localhost',
  port: 3000,
  open: true,
  notify: false,
  files: [
     'theme/**/*.php',
     'theme/assets/js/**/*.js',
     'theme/assets/scss/**/*.scss'
  ]
})




