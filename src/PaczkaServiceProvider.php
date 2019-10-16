<?php

namespace huetm\paczka;

use Illuminate\Support\ServiceProvider;

class PaczkaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'area');
        $this->publishes([
            __DIR__.'/config.php' => config_path('cars.php'),
        ]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


    }

}
