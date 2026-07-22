<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Behind Cloudflare/proxy the origin sees plain HTTP, which would make
        // canonical, og:url and sitemap links render as http:// in production.
        // Force https so every generated URL matches the live https site.
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
