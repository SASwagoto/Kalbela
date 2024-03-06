<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $Feature = DB::table('posts')
            ->where('posts.isFeature', true)
            ->orderBy('posts.id', 'desc')
            ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
            ->select('posts.headline', 'posts.article', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
            ->limit(12);

            $totalPosts = $Feature->count();

            // Split the results into four separate sets based on the total number of posts
            if ($totalPosts >= 1) {
                $firstPlace = $Feature->take(1)->get();
                $secondPlace = $Feature->skip(1)->take(1)->get(); // 2nd post
                $thirdPlace = $Feature->skip(2)->take(6)->get(); // 3rd to 8th post
                $fourthPlace = $Feature->skip(8)->get(); // 9th to last post
            } else {
                $firstPlace = collect(); // Empty collection if no posts found
                $secondPlace = collect();
                $thirdPlace = collect();
                $fourthPlace = collect();
            }

            $video = 10;

            $videonews = DB::table('posts')
            ->orderBy('posts.id', 'desc')
            ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
            ->where(function ($query) use ($video) {
                $query->where('c.id', $video)
                    ->orWhere('c.parent_id', $video);
                })
            ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
            ->get();

            $countryId = 4;
            $country = DB::table('posts')
            ->orderBy('posts.id', 'desc')
            ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
            ->where(function ($query) use ($countryId) {
                $query->where('c.id', $countryId)
                    ->orWhere('c.parent_id', $countryId);
                })
            ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
            ->get();

            $politicsId = 2;
            $politics = DB::table('posts')
            ->orderBy('posts.id', 'desc')
            ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
            ->where(function ($query) use ($politicsId) {
                $query->where('c.id', $politicsId)
                    ->orWhere('c.parent_id', $politicsId);
                })
            ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
            ->get();

            $nationalId = 1;
            $nationals = DB::table('posts')
            ->orderBy('posts.id', 'desc')
            ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
            ->where(function ($query) use ($nationalId) {
                $query->where('c.id', $nationalId)
                    ->orWhere('c.parent_id', $nationalId);
                })
            ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
            ->get();

        return view('frontend.index', compact('firstPlace', 'secondPlace', 'thirdPlace', 'fourthPlace', 'videonews', 'country', 'politics', 'nationals'));
    }

    public function allNews()
    {
        $category = '';
        $newses = DB::table('posts')
            ->orderBy('posts.id', 'desc')
            ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
            ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
            ->paginate(20);
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
        ->orderBy('posts.id', 'desc')
        ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
        ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
        ->where(function ($query) use ($catId) {
            $query->where('c.id', $catId)
                ->orWhere('c.parent_id', $catId);
            })
        ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
        ->paginate(20);
        return view('frontend.allnews', compact('newses', 'category'));
    }

    public function singleNews($category, $slug)
    {
        $news = DB::table('posts')->where('posts.slug', $slug)
        ->leftJoin('users', 'posts.author_id', 'users.id')
        ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
        ->leftjoin('categories as p', 'c.parent_id', 'p.id')
        ->select('posts.headline', 'posts.feature_photo', 'posts.category_id as cid', 'posts.published_at', 'posts.article', 'posts.slug as nslug', 'c.slug as cslug', 'p.slug as pslug', 'c.ban_name as cbname', 'p.ban_name as pbname', 'users.name')
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
