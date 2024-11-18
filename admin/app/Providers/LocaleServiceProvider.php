<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

class LocaleServiceProvider extends ServiceProvider
{
    // public function boot(UrlGenerator $url)
    // {
    //     // Automatically add locale to all generated URLs
    //     $locale = app()->getLocale();

    //     $url->forceRootUrl(url($locale));

    //     // This will ensure all URL generation includes the locale as prefix
    //     $this->app['url']->defaults(['locale' => $locale]);
    // }

    // public function register()
    // {
    //     //
    // }
}
