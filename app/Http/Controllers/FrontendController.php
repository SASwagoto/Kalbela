<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function pageView($slug)
    {
        return view('frontend.pages.page');
    }
}
