<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DummyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //echo 'boot';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
       // echo 'register';
    }
}
