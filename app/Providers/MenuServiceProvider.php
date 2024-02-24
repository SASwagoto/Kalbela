<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Page;
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
            $pages = Page::whereNull('deleted_at')->where('isActive', 1)->get();
            $view->with('menu', $menu)->with('primaryMenu', $primaryMenu)->with('pages', $pages);
        });
    }
}
