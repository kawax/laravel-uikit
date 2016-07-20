var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// uikit themes
// var uikit = 'uikit.min.css';
// var uikit = 'uikit.almost-flat.min.css';
var uikit = 'uikit.gradient.min.css';

elixir(function (mix) {
  mix.sass('app.scss')
    .webpack('app.js')
    .copy('node_modules/uikit/dist/css/' + uikit, 'public/css/uikit.min.css')
    .copy('node_modules/uikit/dist/js/uikit.min.js', 'public/js/')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/')
    .copy('node_modules/font-awesome/fonts/', 'public/fonts')
    .version([
      'css/app.css',
      'js/app.js'
    ]);
});
