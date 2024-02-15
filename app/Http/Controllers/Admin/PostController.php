<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.post.index');
    }

    public function create()
    {
        $categories = Category::whereNull('deleted_at')->get();
        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->title, '_');
        return $slug;
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $newName = $filename.'-'.time().'.'.$extension;

            $request->file('upload')->move(public_path('media'), $newName);

            $url = asset('media/'.$newName);
            return response()->json(['fileName'=> $newName, 'uploaded' => 1,  'url'=> $url]);
        }

    }
}
