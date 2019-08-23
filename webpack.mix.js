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
    'resource/plantilla/css/font-awesome.min.css',
    'resource/plantilla/css/simple-line-icons.min.css',
    'resource/plantilla/css/style.css'

], 'public/css/plantilla.css').
scripts([
    'resource/plantilla/js/bootstrap.min.js',
    'resource/plantilla/js/Chart.min.js',
    'resource/plantilla/js/jquery.min.js',
    'resource/plantilla/js/pace.min.js',
    'resource/plantilla/js/popper.min.js',
    'resource/plantilla/js/template.js',
], 'public/js/plantilla.js');