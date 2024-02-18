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

    public function details()
    {
        $news = DB::table('posts')->where('id', 1)->first();
        return view('frontend.news', compact('news'));
    }
}
