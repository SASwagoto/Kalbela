<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $tags = Tag::whereNull('deleted_at')->get();
        $categories = Category::whereNull('deleted_at')->get();
        $divs = DB::table('divisions')->get();
        return view('admin.post.create', compact('categories', 'tags', 'divs'));
    }

    public function store(Request $request)
    {
        
        return $request;
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
