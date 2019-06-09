<?php

namespace DeployStudios\LaravelPackageTemplate\Laravel;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/../../config/config.php' => config_path('deploystudios/laravel-package-template.php'),
            ], 'config');
        }
    }
}
