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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

.styles([
        'resources/css/libs_sb/all.css',
        'resources/css/libs_sb/sb-admin-2.css'
    ],'public/css/libs.css')

.js([
        'resources/js/libs_sb/all.js',
        'resources/js/libs_sb/bootstrap.js',
        'resources/js/libs_sb/bootstrap.bundle.js',
        'resources/js/libs_sb/jquery.easing.js',
        'resources/js/libs_sb/jquery.js',
        'resources/js/libs_sb/jquery.slim.js',
        'resources/js/libs_sb/sb-admin-2.js'
    ], 'public/js/libs.js');