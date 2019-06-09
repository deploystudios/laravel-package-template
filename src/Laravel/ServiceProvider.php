<?php

namespace __PACKAGE_NAMESPACE__\__PACKAGE_CLASS_NAME__\Laravel;

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
                __DIR__ . '/../../config/config.php' => config_path('__PACKAGE_NAME__/__PACKAGE_NAME__.php'),
            ], 'config');
        }
    }
}
