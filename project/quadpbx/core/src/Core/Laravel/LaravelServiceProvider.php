<?php

namespace QuadPBX\Core\Laravel;

use QuadPBX\Core\Console\ValidateInstall;

class LaravelServiceProvider  extends \Illuminate\Support\ServiceProvider
{

    /**
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        $this->loadRoutesFrom(__DIR__ . '/../../../routes/coreroutes.php');
        $this->loadViewsFrom(__DIR__ . '/../../../views', 'qcore');
        if ($this->app->runningInConsole()) {
            $this->commands([ValidateInstall::class]);
        }
    }
}
