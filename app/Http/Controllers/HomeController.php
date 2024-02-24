<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function allNews()
    {
        $category = '';
        $newses = DB::table('posts')
            ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
            ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
            ->get();
        return view('frontend.allnews', compact('newses', 'category'));
    }

    public function newsBy($slug)
    {
        $category = DB::table('categories as c')
        ->where('c.slug', $slug)
        ->leftJoin('categories as p', 'c.parent_id', '=', 'p.id') // Corrected join condition
        ->select('c.id as cid', 'c.slug as cslug', 'c.ban_name as cbname', 'p.slug as pslug', 'p.ban_name as pbname')
        ->first();

        $catId = $category->cid;

        $newses = DB::table('posts')
        ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
        ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
        ->where(function ($query) use ($catId) {
            $query->where('c.id', $catId)
                ->orWhere('c.parent_id', $catId);
            })
        ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
        ->get();
        return view('frontend.allnews', compact('newses', 'category'));
    }

    public function singleNews($category, $slug)
    {
        $news = DB::table('posts')->where('posts.slug', $slug)
        ->leftJoin('users', 'posts.author_id', 'users.id')
        ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
        ->leftjoin('categories as p', 'c.parent_id', 'p.id')
        ->select('posts.headline', 'posts.category_id as cid', 'posts.published_at', 'posts.article', 'posts.slug as nslug', 'c.slug as cslug', 'p.slug as pslug', 'c.ban_name as cbname', 'p.ban_name as pbname', 'users.name')
        ->first();

        $relatedNews = DB::table('posts')
        ->where('posts.category_id', '=', $news->cid) // Assuming you're using category_id to determine relatedness
        ->where('posts.slug', '!=', $news->nslug) // Exclude the current news
        ->leftJoin('users', 'posts.author_id', '=', 'users.id')
        ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
        ->leftjoin('categories as p', 'c.parent_id', '=', 'p.id')
        ->select('posts.headline', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug')
        ->limit(5) // Limit to 5 related news
        ->get();

        $url = route('singleNews', ['category' => $news->cslug, 'slug' => $news->nslug]);
        return view('frontend.news', compact('news', 'url', 'relatedNews'));
    }
}
