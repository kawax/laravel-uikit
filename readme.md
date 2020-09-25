# Laravel UIkit

http://getuikit.com/

Just a template for me.

![uikit.png](uikit.png)

## Laravel8
After Laravel8, you can use `laravel/fortify` standalone and custom views.  
- https://github.com/kawax/fortify-uikit
- https://github.com/kawax/laravel-pagination-uikit

## Version
- Laravel 5.5
- UIkit 3.0.0-beta

UIkit2 -> `uikit2` branch.

## Usage
After `php artisan make:auth`, replace view files from this repository.

### package.json
```json
{
  "devDependencies": {
    "axios": "^0.16.2",
    "cross-env": "^5.0.1",
    "jquery": "^3.1.1",
    "laravel-mix": "^1.0",
    "lodash": "^4.17.4",
    "uikit": "^3.0.0-beta.30"
  }
}
```

### webpack.mix.js

```
let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
```

### resources/assets/js/bootstrap.js
https://getuikit.com/docs/webpack

```
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

UIkit.use(Icons);
```

### resources/assets/sass/app.scss
https://getuikit.com/docs/sass

```
@import "~uikit/src/scss/variables-theme.scss";
@import "~uikit/src/scss/mixins-theme.scss";

@import "~uikit/src/scss/uikit-theme.scss";
```

## Preset
I found preset for UIkit3  
https://github.com/laravel-frontend-presets/uikit3

Pagination files.  
https://github.com/kawax/laravel-pagination-uikit

### Laravel 5.6
AppServiceProvider@boot

```php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('vendor.pagination.default');
    }
```

