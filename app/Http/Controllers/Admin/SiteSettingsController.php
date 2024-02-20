<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SiteSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $siteInfo = Site::find(1);
        return view('admin.settings.settings', compact('siteInfo'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $siteSetting = Site::find($id);
        if ($request->hasFile('site_logo')) {
            if ($siteSetting->site_logo) {
                Storage::delete('uploads/' . $siteSetting->site_logo);
            }
            $file = $request->file('site_logo');
            $logoName = 'logo_'. time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $logoName);
        }else{
            $logoName = $siteSetting->site_logo;
        }

        if ($request->hasFile('site_icon')) {
            if ($siteSetting->site_icon) {
                Storage::delete('uploads/' . $siteSetting->site_icon);
            }
            $file = $request->file('site_icon');
            $iconName = 'icon_'. time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $iconName);
        }else{
            $iconName = $siteSetting->site_icon;
        }

        $update = DB::table('sites')->where('id', $id)->update([
            'site_title' => $request->site_title,
            'email' => $request->email,
            'adv_email' => $request->adv_email,
            'phone_a' => $request->phone_a,
            'phone_b' => $request->phone_b,
            'adv_phone_a' => $request->adv_phone_a,
            'adv_phone_b' => $request->adv_phone_b,
            'mobile_a' => $request->mobile_a,
            'mobile_b' => $request->mobile_b,
            'adv_mobile_a' => $request->adv_mobile_a,
            'adv_mobile_b' => $request->adv_mobile_b,
            'fax_a' => $request->fax_a,
            'fax_b' => $request->fax_b,
            'address' => $request->address,
            'copyright' => $request->copyright,
            'footer_credit' => $request->footer_credit,
            'site_logo' => $logoName,
            'site_icon' => $iconName,
            'fb_links' => $request->fb_links,
            'yt_links' => $request->yt_links,
            'ln_links' => $request->ln_links,
            'x_links' => $request->x_links,
            'inst_links' => $request->inst_links,
            'updated_at' => now()
        ]);

        if($update){
            Alert::success('Success', 'Category Added Successfully');
            return redirect()->back();
        }else{
            Alert::error('Error', 'There was an error!');
            return redirect()->back();
        }
    }
}
