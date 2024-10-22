# OpenAPI Validation Middleware for Laravel
Middleware for Laravel that will validate requests &amp; responses according to your OpenAPI description document.

Influenced by [hkarlstrom's OpenAPI Validation Middlware](https://github.com/hkarlstrom/openapi-validation-middleware)
that covers PSR-7 & PSR-15 requests. Sadly, Laravel middleware's are not compatible with either of those PSRs, so this
package was required.

### Compatibility
- Laravel 5.7 | 5.8
- PHP 7.2

### Installation
Installation via composer is recommended. The Laravel Service provider will be auto-registered. You must also publish
the configuration file and update the 

```shell script
composer require treblig/laravel-openapi-validation-middleware
```

After composer installation, there will be a new `openapi` middleware group available to your routes. You may add this
middleware group to your routes following [standard Laravel prodedures](https://laravel.com/docs/5.7/middleware#middleware-groups).

```php
use Illuminate\Support\Route;

Route::middleware('openapi')->group(function ($router) {
    $router->get('/users/{user}', 'OpenAPIUserController');
});

Route::get('/users/{user}', 'OpenAPIUserController')
    ->middleware('openapi');
```

### Configuration

Publish the package configuration file via:

```bash
php artisan vendor:publish --provider="Treblig\OpenAPIValidationMiddleware\ServiceProvider"
```

To leverage this package you must set the `document_path` config value. This can be either a local file path or remote
HTTP resource link.

By default, both requests and responses are subject to the validation check. You can change this behavior in the
`openapi.php` configuration file.