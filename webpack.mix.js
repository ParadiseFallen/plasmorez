const mix = require('laravel-mix');
require('laravel-mix-serve')
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.disableSuccessNotifications()

mix
    .sass('resources/css/style.scss', 'public/css/style.css')
    .options({
        postCss :
        [
            require('@hail2u/css-mqpacker')
        ]
    })

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [

    ])

mix.serve().browserSync({
    proxy: 'http://localhost:8000/',
    tunnel: 'plasmorez',
    online : true,
})
