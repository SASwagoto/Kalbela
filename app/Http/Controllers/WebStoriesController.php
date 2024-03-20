<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebStoriesController extends Controller
{
    public function index()
    {
        return view('frontend.webstories.webstories');
    }
}
