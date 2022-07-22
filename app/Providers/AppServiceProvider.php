<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator as RoutingUrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        // if (env('REDIRECT_HTTPS')) {
        //     $url->forceSchema('https');
        // }
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
