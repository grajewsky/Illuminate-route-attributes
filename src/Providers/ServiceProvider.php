<?php

declare(strict_types=1);

namespace GSSC\Routes\Providers;

use GSSC\Routes\Router;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        parent::register();
        $this->mergeConfigFrom(__DIR__ . "/../../config/auto-router.php", "auto-router");
        $this->app->singleton(Router::class, fn($app) => new Router($app['router']));

    }


}
