
const themeName = 'starter' // -->  insert theme name
const outputPath = '../wp-content/themes/' + themeName
const mix = require('laravel-mix');


require('mix-tailwindcss');
require('laravel-mix-clean');


mix.setPublicPath(outputPath)

/** js and css **/
.js('theme/assets/js/main.js', 'assets/js')
.sass('theme/assets/scss/main.scss', 'assets/css')
.tailwind()


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


/** clean old files **/
.clean({
   cleanStaleWebpackAssets: false,
   cleanOnceBeforeBuildPatterns: ['**/*', '!vendor/**'] 
})

/** browserSync **/
// mix.browserSync({
//   proxy: 'http://tuo-sito-locale.test',
//   files: [
//     'theme/**/*.php',
//     'theme/assets/js/**/*.js',
//     'theme/assets/scss/**/*.scss'
//   ]
// })


/** options **/
.options({
    postCss: [
        require("autoprefixer"), 
        require("cssnano")
    ],
    processCssUrls: true,
})

