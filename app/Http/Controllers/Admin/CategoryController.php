<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = DB::table('categories')->get();
        $parents = DB::table('categories')->where('parent_id', 0)->get();

        $title = 'Delete Category!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.category.index', compact('categories', 'parents'));
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

        $category = DB::table('categories')->insert([
            'eng_name'=> $request->eng_name,
            'ban_name'=> $request->ban_name,
            'slug'=> Str::slug($request->slug, '_'),
            'parent_id'=> $request->parent_id,
            'description'=> $request->description,
            'created_at'=> now()
        ]);
        if($category){
            Alert::success('Success', 'Category Added Successfully');
            return redirect()->back();
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }

    public function edit($slug)
    {
        $category = DB::table('categories')->where('slug', $slug)->first();
        $parents = DB::table('categories')->where('parent_id', 0)->get();
        return view('admin.category.edit', compact('category', 'parents'));
    }

    public function  update(Request $request, $slug){
        $update = DB::table('categories')->where('slug', $slug)->update([
            'eng_name'=> $request->eng_name,
            'ban_name'=> $request->ban_name,
            'slug'=> Str::slug($request->slug, '_'),
            'parent_id'=> $request->parent_id,
            'description'=> $request->description,
            'updated_at'=> now()
        ]);
        if($update){
            Alert::success('Success', 'Category Updated Successfully');
            return redirect()->route('category.create');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->route('category.create');
        }

    }

    public function delete($slug){
        $category = DB::table('categories')->where('slug', $slug)->first();
        $category->delete();
    }

    
}
