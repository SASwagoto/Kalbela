<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LatestNewsServiceProvider extends ServiceProvider
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
           $latestNews = DB::table('posts')
           ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
           ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
           ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
           ->get();
            $view->with('latestNews', $latestNews);
        });
    }
}
