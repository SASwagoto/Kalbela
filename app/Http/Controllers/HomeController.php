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
        $news = DB::table('posts');
        return view('frontend.allnews', compact('news'));
    }
}
