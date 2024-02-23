<?php

namespace App\Providers;

use App\Models\Advertise;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdServiceProvider extends ServiceProvider
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
            $ad1 = Advertise::where('isActive', true)->where('position', 1)->first();
            $ad2 = Advertise::where('isActive', true)->where('position', 2)->first();
            $view->with('ad1', $ad1)->with('ad2', $ad2);
        }); 
    }
}
