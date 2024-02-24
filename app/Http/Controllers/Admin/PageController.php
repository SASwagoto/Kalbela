<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = Page::where('isActive', true)->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $upload = DB::table('pages')->insert([
            'page_title_b' => $request->page_title_b,
            'page_title_e' => $request->page_title_e,
            'slug' => Str::slug($request->page_title_e),
            'page_content'=> $request->page_content,
            'created_at' => now()
        ]);

        if($upload){
            Alert::success('Success', 'Page Added Successfully');
            return redirect()->route('page.index');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }

    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $slug)
    {
        $update = DB::table('pages')->where('slug', $slug)->update([
            'page_title_b' => $request->page_title_b,
            'page_title_e' => $request->page_title_e,
            'slug' => Str::slug($request->page_title_e),
            'page_content'=> $request->page_content,
            'updated_at' => now()
        ]);

        if($update){
            Alert::success('Success', 'Page Updated Successfully');
            return redirect()->route('page.index');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }

    public function delete($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $delete = $page->delete();
        if($delete){
            Alert::success('Success', 'Page Deleted Successfully');
            return redirect()->route('page.index');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }


}
