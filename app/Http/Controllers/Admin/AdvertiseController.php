<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FacadesRequest;
use RealRashid\SweetAlert\Facades\Alert;

class AdvertiseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.advertise.index');
    }

    public function create()
    {
        return view('admin.advertise.create');
    }

    public function store(Request $request)
    {
        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'advertise_'.time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('advertise'), $filename);
        }

        $upload = DB::table('advertises')->insert([
            'title'=>$request->title,
            'add_url'=>$request->add_url,
            'position'=>$request->position,
            'description'=>$request->description,
            'image'=>$filename,
        ]);
        if($upload){
            Alert::success('Success', 'Category Added Successfully');
            return redirect()->route('ad.index');
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }
}
