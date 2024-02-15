<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tags = DB::table('tags')->whereNull('deleted_at')->get();
        return view('admin.tag.index', compact('tags'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'eng_name' => 'required|string|max:255',
            'ban_name' => 'required|string|max:255',
            'slug' => 'required|string|unique:categories,slug',
            'description' => 'nullable',
        ], [
            'eng_name.required' => 'English name is required.',
            'ban_name.required' => 'Bangla name is required.',
            'slug.required' => 'Slug is required.',
            'slug.unique' => 'The provided slug is already in use.',
        ]);
        
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tag = DB::table('tags')->insert([
            'eng_name'=> $request->eng_name,
            'ban_name'=> $request->ban_name,
            'slug'=> Str::slug($request->slug, '_'),
            'description'=> $request->description,
            'created_at'=> now()
        ]);
        if($tag){
            Alert::success('Success', 'Tag Added Successfully');
            return redirect()->back();
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }

    public function edit($slug)
    {
        $tag = DB::table('tags')->where('slug', $slug)->first();
        return view('admin.tag.edit', compact('tag'));
    }

    public function update(Request $request, $slug)
    {
        $update = DB::table('tags')->where('slug', $slug)->update([
            'eng_name'=> $request->eng_name,
            'ban_name'=> $request->ban_name,
            'slug'=> Str::slug($request->slug, '_'),
            'description'=> $request->description,
            'updated_at'=> now()
        ]);
        if($update){
            Alert::success('Success', 'Tag Updated Successfully');
            return redirect()->route('tag.create');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->route('tag.create');
        }
    }

    public function delete(Request $request){
        $tag = Tag::where('slug', $request->slug)->first();
        $delete = $tag->delete();
        if($delete){
            Alert::success('Deleted', 'Tag deleted successfully!');
            return redirect()->back();
        }else{
            Alert::error('Error', 'There was a problem!');
            return redirect()->back();
        }
    }
}
