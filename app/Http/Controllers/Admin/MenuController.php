<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $all = Category::where('isPrimaryMenu', 0)->get();
        $menus = Category::where('isPrimaryMenu', 1)->get();
        return view('admin.menu.index', compact('all','menus'));
    }
}
