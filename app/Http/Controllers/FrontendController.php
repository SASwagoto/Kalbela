<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function pageView($slug)
    {
        $page = Page::where("slug", $slug)->first();
        return view('frontend.pages.page', compact('page'));
    }

    public function search(Request $request)
    {

        $newses = DB::table('posts')
            ->orderBy('posts.id', 'desc')
            ->where('posts.upazila_id', $request->upazila_id)
            ->orWhere('district_id', $request->district_id)
            ->orWhere('division_id', $request->division)
            ->leftjoin('categories as c', 'posts.category_id', '=', 'c.id')
            ->leftjoin('categories as parent', 'c.parent_id', 'parent.id')
            ->select('posts.headline', 'posts.published_at', 'posts.feature_photo', 'posts.slug as nslug', 'c.slug as cslug', 'parent.slug as pslug')
            ->paginate(20);
        return view('frontend.search', compact('newses'));
    }

    public function get_districts($id)
    {
        $name = 'Districts';
        $dataset = DB::table('districts')->where('division_id', $id)->select('id', 'bn_name')->get();
        return view('admin.post.getDist', compact('dataset', 'name'));
    }

    public function get_upazila($id)
    {
        $name = 'Upazila';
        $dataset = DB::table('upazilas')->where('district_id', $id)->select('id', 'bn_name')->get();
        return view('admin.post.getDist', compact('dataset', 'name'));
    }
}
