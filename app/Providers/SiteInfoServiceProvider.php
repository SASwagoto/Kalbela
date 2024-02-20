<?php

namespace App\Providers;

use App\Models\Site;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SiteInfoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $siteInfo = Site::findOrFail(1);
            $view->with('siteInfo', $siteInfo);
        });
    }
}
