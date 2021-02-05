const mix = require('laravel-mix');
// require('laravel-mix-serve')
require('laravel-mix-artisan-serve')
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

mix
    .disableSuccessNotifications()
    .sass('resources/css/style.scss', 'public/css/style.css')
    .options({
        postCss :
            [
                require('@hail2u/css-mqpacker')
            ]
    })
    .js('resources/js/app.js', 'public/js')
    .serve({
        host: '127.0.0.1',
        port: '3000',
    })
    .browserSync({
    proxy: '127.0.0.1:3000',
    tunnel: 'plasmorez',
    port : 8000,
    online : true,
    // https: true,
})
