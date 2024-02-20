<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
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
            $menu = Category::whereNull('deleted_at')->get();
            $primaryMenu = Category::whereNull('deleted_at')->where('isPrimaryMenu', 1)->get();
            $view->with('menu', $menu)->with('primaryMenu', $primaryMenu);
        });
    }
}
