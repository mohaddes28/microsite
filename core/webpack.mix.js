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

mix.styles([
    '../frontend/assets/css/vendor/aos.css',
    '../frontend/assets/css/vendor/bootstrap.min.css',
    '../frontend/assets/css/vendor/jquery.fancybox.min.css',
    '../frontend/assets/css/vendor/owl.carousel.min.css',
    '../frontend/assets/css/vendor/slick.css',
    '../frontend/assets/css/style.css',
    '../frontend/assets/css/style.css',
    '../frontend/assets/css/custom-style.css',
], '../css/style.css')
.babel([
    '../frontend/assets/js/jquery/jquery.min.js',
    '../frontend/assets/js/bootstrap/popper.min.js',
    '../frontend/assets/js/bootstrap/bootstrap.min.js',
    '../frontend/assets/js/plugins/plugins.min.js',
    '../frontend/assets/js/active.js',
], '../js/script.js');
