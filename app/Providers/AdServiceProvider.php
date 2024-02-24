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
            $ad1 = Advertise::where('isActive', true)->where('position', 1)->orderBy('id', 'desc')->first();
            $ad2 = Advertise::where('isActive', true)->where('position', 2)->orderBy('id', 'desc')->first();
            $ad3 = Advertise::where('isActive', true)->where('position', 3)->orderBy('id', 'desc')->first();
            $ad4 = Advertise::where('isActive', true)->where('position', 4)->orderBy('id', 'desc')->first();
            $ad5 = Advertise::where('isActive', true)->where('position', 5)->orderBy('id', 'desc')->first();
            $ad6 = Advertise::where('isActive', true)->where('position', 6)->orderBy('id', 'desc')->first();
            $ad7 = Advertise::where('isActive', true)->where('position', 7)->orderBy('id', 'desc')->first();
            $ad8 = Advertise::where('isActive', true)->where('position', 8)->orderBy('id', 'desc')->first();
            $ad9 = Advertise::where('isActive', true)->where('position', 9)->orderBy('id', 'desc')->first();
            $ad10 = Advertise::where('isActive', true)->where('position', 10)->orderBy('id', 'desc')->first();
            $view->with('ad1', $ad1)
            ->with('ad2', $ad2)
            ->with('ad3', $ad3)
            ->with('ad4', $ad4)
            ->with('ad5', $ad5)
            ->with('ad6', $ad6)
            ->with('ad7', $ad7)
            ->with('ad8', $ad8)
            ->with('ad9', $ad9)
            ->with('ad10', $ad10);
        }); 
    }
}
