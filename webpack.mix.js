const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js');

mix.styles('resources/css/fonts.css', 'public/css/fonts.css')
mix.styles('resources/css/base.css', 'public/css/base.css')
mix.styles('resources/css/vendor.css', 'public/css/vendor.css')
mix.styles('resources/css/main.css', 'public/css/main.css')

mix.scripts([
    'resources/js/modernizr.js',
    'resources/js/pace.min.js',
], 'public/js/scripts.js');

mix.scripts([
    'resources/js/jquery-3.5.1.min.js',
    'resources/js/plugins.js',
    'resources/js/main.js',
], 'public/js/javascript.js');

