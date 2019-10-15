<?php declare(strict_types=1);

namespace Treblig\OpenAPIValidationMiddleware;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Treblig\OpenAPIValidationMiddleware\Http\Middleware\ValidationMiddleware;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        /** @var Router $router */
        $router = $this->app['router'];

        $router->pushMiddlewareToGroup('openapi', ValidationMiddleware::class);

        $this->publishes([
            __DIR__.'/Config/openapi.php' => config_path('openapi.php'),
        ]);
    }
}