<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function update($slug)
    {
        $count = Category::where('isPrimaryMenu', 1)->count();
        $category = Category::where('slug', $slug)->firstOrFail();
        if($category->isPrimaryMenu == 1){
            DB::table('categories')->where('slug', $slug)->update([
                'isPrimaryMenu' => 0
            ]);
            return redirect()->back();
        }else{
            if($count < 11 ){
                DB::table('categories')->where('slug', $slug)->update([
                    'isPrimaryMenu' => 1
                ]);
                return redirect()->back();
            }else{
                Alert::error('Sorry', 'Menu List Quota is full');
                return redirect()->back();
            }
        }
        
    }
}
