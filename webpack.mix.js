const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.options({
    // Don't perform any css url rewriting by default
    processCssUrls: false,
})

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .browserSync({
        port: 3000,
        open: 'external',
        host: 'localhost',
        proxy: 'http://127.0.0.1:8000',
        files: ['resources/views/**/*.php', 'app/**/*.php', 'routes/**/*.php', 'public/js/*.js', 'public/css/*.css']
    });


