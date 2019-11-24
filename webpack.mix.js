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
        'resources/css/libs/all.css',
        'resources/css/libs/sb-admin-2.css',
    

    ],'public/css/libs.css')


.js([
        
        'resources/js/libs/all.js',
        'resources/js/libs/bootstrap.js',
        'resources/js/libs/bootstrap.bundle.js',
        'resources/js/libs/jquery.js',
        'resources/js/libs/jquery.easing.js',
        'resources/js/libs/scripts.js',
        'resources/js/libs/sb-admin-2.js'
        
    ], 'public/js/libs.js')


.styles([

        'resources/css/libs/blog-post.css',
        'resources/css/libs/bootstrap.css'

],'public/css/frontui.css')



.js([

        'resources/js/libs/bootstrap.js',
        'resources/js/libs/jquery.js',
        
    ], 'public/js/frontui.js');

    