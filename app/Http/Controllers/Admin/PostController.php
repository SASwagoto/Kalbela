<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = DB::table('posts')
        ->whereNull('deleted_at')
        ->leftJoin('users', 'posts.author_id', 'users.id')
        ->select('posts.*', 'users.name')
        ->get();
        return view('admin.post.index', compact('posts'));
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
        $slug = Str::random(10);
        $published_at = null;
        $isPublished = false;

        if ($request->has('draft')) {
            // Save draft logic
            $isPublished = false;
        } elseif ($request->has('publish')) {
            // Publish logic
            $isPublished = true;
            $published_at = now();
        }

        $filename = null;

        if ($request->hasFile('feature_photo')) {
            $file = $request->file('feature_photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('media'), $filename);
        }

        $post = DB::table('posts')->insertGetId([
            'headline' => $request->headline,
            'slug' => $slug,
            'article' => $request->article,
            'author_id' => Auth::user()->id,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'upazila_id' => $request->upazila_id,
            'isPublished' => $isPublished,
            'published_at' => $published_at,
            'feature_photo' => $filename, // Inserting filename into the database
            'created_at' => now()
        ]);

        if($request->category_id != null){
            foreach($request->category_id as $cat_id)
            {
                DB::table('post_category')->insert([
                    'post_id' => $post,
                    'category_id' => $cat_id
                ]);
            }
        }

        if($request->tag_id != null){
            foreach($request->tag_id as $tag_id)
            {
                DB::table('post_tag')->insert([
                    'post_id' => $post,
                    'tag_id' => $tag_id
                ]);
            }
        }

        if($post){
            Alert::success('Success', 'Post Added Successfully');
            return redirect()->route('post.all');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }

    public function edit($slug)
    {
        $post = DB::table('posts')->where('slug', $slug)->first();
        $postId = $post->id;
        $categories = DB::table('categories')
        ->leftJoin('post_category', function ($join) use ($postId) {
            $join->on('categories.id', '=', 'post_category.category_id')
                ->where('post_category.post_id', '=', $postId);
        })
        ->select('categories.*', DB::raw('CASE WHEN post_category.category_id IS NOT NULL THEN 1 ELSE 0 END AS selected'))
        ->get();
        $tags = DB::table('tags')
        ->leftJoin('post_tag', function ($join) use ($postId) {
            $join->on('tags.id', '=', 'post_tag.tag_id')
                ->where('post_tag.post_id', '=', $postId);
        })
        ->select('tags.*', DB::raw('CASE WHEN post_tag.tag_id IS NOT NULL THEN 1 ELSE 0 END AS selected'))
        ->get();

        $divs = DB::table('divisions')->get();
        $dists = DB::table('districts')->where('division_id', $post->division_id)->get();
        $upazilas = DB::table('upazilas')->where('district_id', $post->district_id)->get();
        return view('admin.post.edit', compact('categories', 'tags', 'divs', 'post', 'dists', 'upazilas'));
    }

    public function update(Request $request, $slug)
    {
        $post = DB::table('posts')->where('slug', $slug)->first();

        if ($request->hasFile('feature_photo')) {
            if ($post->feature_photo) {
                Storage::delete('media/' . $post->feature_photo);
            }
            $file = $request->file('feature_photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('media'), $filename);
        }else{
            $filename = $post->feature_photo;
        }

        $updatePost = DB::table('posts')->where('slug', $slug)->update([
            'headline' => $request->headline,
            'article' => $request->article,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'upazila_id' => $request->upazila_id,
            'feature_photo' => $filename, // Inserting filename into the database
            'updated_at' => now()
        ]);

        if ($request->has('category_id')) {
            DB::table('post_category')
                ->where('post_id', $post->id)
                ->delete(); // Remove existing associations
    
            foreach ($request->category_id as $categoryId) {
                DB::table('post_category')->insert([
                    'post_id' => $post->id,
                    'category_id' => $categoryId,
                ]);
            }
        }

        if ($request->has('tag_id')) {
            DB::table('post_tag')
                ->where('post_id', $post->id)
                ->delete(); // Remove existing associations
    
            foreach ($request->tag_id as $tagId) {
                DB::table('post_tag')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $tagId,
                ]);
            }
        }

        if($updatePost){
            Alert::success('Success', 'Post Updated Successfully');
            return redirect()->route('post.all');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }

    }

    public function delete($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $delete = $post->delete();
        if($delete){
            Alert::success('Success', 'Post Deleted Successfully');
            return redirect()->route('post.all');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $newName = $filename . '-' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $newName);

            $url = asset('media/' . $newName);
            return response()->json(['fileName' => $newName, 'uploaded' => 1,  'url' => $url]);
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
