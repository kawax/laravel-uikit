const {mix} = require('laravel-mix');

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

// uikit themes
// const uikit = 'uikit.min.css';
// const uikit = 'uikit.almost-flat.min.css';
const uikit = 'uikit.gradient.min.css';

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')

    .combine([
        'node_modules/uikit/dist/css/' + uikit,
        'node_modules/uikit/dist/css/components/slidenav.min.css',
        'node_modules/uikit/dist/css/components/slideshow.min.css',
        'node_modules/uikit/dist/css/components/form-advanced.min.css',
        'node_modules/uikit/dist/css/components/sticky.min.css',
        'node_modules/font-awesome/css/font-awesome.min.css'
    ], 'public/css/all.css')

    .copy('node_modules/font-awesome/fonts', 'public/fonts')

    .version()
;
