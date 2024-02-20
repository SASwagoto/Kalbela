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
        $name = "সর্বশেষ সব খবর";
        $newses = DB::table('posts')->where('isPublished', 1)
        ->orderBy('id', 'DESC')
        ->select('posts.headline', 'posts.published_at', 'posts.feature_photo')
        ->paginate(10);
        return view('frontend.allnews', compact('newses', 'name'));
    }

    public function newsBy($name)
    {
        $category = DB::table('categories')->where('slug', $name)->first();
        $name = $category->ban_name;

        $newses = DB::table('post_category as pc')
        ->where('pc.category_id', $category->id)
        ->leftJoin('posts', 'pc.post_id', 'posts.id')
        ->select('posts.headline', 'posts.published_at', 'posts.feature_photo')
        ->get();
        return view('frontend.allnews', compact('newses', 'name'));
    }
}
