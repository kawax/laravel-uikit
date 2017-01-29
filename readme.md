# Laravel UIkit

http://getuikit.com/

後で使うかもしれないのでデフォルトのviewをUIkit使用に書き換えたものを残しておく。

![uikit.png](uikit.png)

## 環境
- Laravel 5.4
- UIkit 2.27.*

## 使い方
`php artisan make:auth`で作られたviewファイルを入れ替え。好きなように書き換える。

### package.json
uikitとfont-awesome追加。jqueryも必要。
```json
{
  "private": true,
  "scripts": {
    "webpack": "cross-env NODE_ENV=development webpack --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
       "dev": "cross-env NODE_ENV=development webpack --watch --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
       "hmr": "cross-env NODE_ENV=development webpack-dev-server --inline --hot --config=node_modules/laravel-mix/setup/webpack.config.js",
       "production": "cross-env NODE_ENV=production webpack --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js"
  },
  "devDependencies": {
    "axios": "^0.15.2",
    "jquery": "^3.1.0",
    "laravel-mix": "^0.5.0",
    "lodash": "^4.16.2",
    "uikit": "^2.27.2",
    "font-awesome": "^4.7.0"
  }
}
```

### webpack.mix.js
テーマを変えるなら使用するcssを変える。
追加のcomponentを使うならcombine辺りで追加。

```javascript
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
// var uikit = 'uikit.min.css';
// var uikit = 'uikit.almost-flat.min.css';
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
  .version();
```

### resources/assets/js/app.js
componentのjsはapp.jsでインポート。

```
import 'uikit/dist/js/components/slideshow';
import 'uikit/dist/js/components/lightbox';
import 'uikit/dist/js/components/sticky';
```

### Pagination
```
php artisan vendor:publish --tag=laravel-pagination
```

で作られた`resources/views/vendor/pagination/default.blade.php`に`uikit.blade.php`の中身をコピペ。

これが使えるのはLaravel 5.3以降。
