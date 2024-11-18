<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Maatwebsite\Excel\Excel;  // Make sure to import the correct Excel class

class ExcelServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Use 'singleton()' instead of the deprecated 'share()' method
        $this->app->singleton('excel', function ($app) {
            return new Excel();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Any boot logic goes here, if needed
    }
}
