@extends('layouts.admin')

@push('css')

@endpush

@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
    @section('header')
        Settings
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Settings</a>
@endcomponent
    <section class="w-full">
        <form action="{{route('settings.update')}}" method="POST" enctype="multipart/form-data" class="w-full flex justify-start gap-10">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$siteInfo->id}}">
            <div class="w-2/4 flex flex-col gap-4 border rounded-md p-2">
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Site Title</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->site_title}}" name="site_title">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Email</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="email" class="form-input rounded-md" value="{{$siteInfo->email}}" name="email">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Advertise Email</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="email" class="form-input rounded-md" value="{{$siteInfo->adv_email}}" name="adv_email">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Phone No</h5>
                    </div>
                    <div class="w-5/6 flex gap-2 items-center">
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->phone_a}}" name="phone_a">
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->phone_b}}" name="phone_b">
                        </div>
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Advertise Phone No</h5>
                    </div>
                    <div class="w-5/6 flex gap-2 items-center">
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->adv_phone_a}}" name="adv_phone_a">
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->adv_phone_b}}" name="adv_phone_b">
                        </div>
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Mobile No</h5>
                    </div>
                    <div class="w-5/6 flex gap-2 items-center">
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->mobile_a}}" name="mobile_a">
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->mobile_b}}" name="mobile_b">
                        </div>
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Advertise Mobile No</h5>
                    </div>
                    <div class="w-5/6 flex gap-2 items-center">
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->adv_mobile_a}}" name="adv_mobile_a">
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->adv_mobile_b}}" name="adv_mobile_b">
                        </div>
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Fax No</h5>
                    </div>
                    <div class="w-5/6 flex gap-2 items-center">
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->fax_a}}" name="fax_a">
                        </div>
                        <div class="w-1/2">
                            <input type="text" class="form-input rounded-md" value="{{$siteInfo->fax_b}}" name="fax_b">
                        </div>
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Address</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->address}}" name="address">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Copyright Text</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->copyright}}" name="copyright">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Footer Credit</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->footer_credit}}" name="footer_credit">
                    </div>
                </div>
            </div>
            <div class="w-2/4 flex flex-col gap-4 border rounded-md p-2">
                <div class="flex justify-start gap-2 mb-6">
                    <div class="w-1/2 flex flex-col">
                        <div class="flex items-center">
                            <h5 class="text-lg font-bold">Site Logo</h5>
                        </div>
                        <div class="flex justify-center p-2">
                            @if ($siteInfo->site_logo)
                            <img id="Logo_preview" class="w-60" src="{{asset('uploads/'.$siteInfo->site_logo)}}" alt="">
                            @else
                            <img id="Logo_preview" class="w-60" src="{{asset('backend/assets/images/preview.jpg')}}" alt="">
                            @endif
                            
                        </div>
                        <div class="flex items-center justify-start">
                            <input type="file" onchange="document.getElementById('Logo_preview').src = window.URL.createObjectURL(this.files[0])" name="site_logo">
                        </div>
                    </div>
                    <div class="w-1/2 flex flex-col">
                        <div class="flex items-center">
                            <h5 class="text-lg font-bold">Site Favicon</h5>
                        </div>
                        <div class="flex justify-center p-2">
                            @if ($siteInfo->site_icon)
                            <img id="icon_preview" class="w-60" src="{{asset('uploads/'.$siteInfo->site_icon)}}" alt="">
                            @else
                            <img id="icon_preview" class="w-60" src="{{asset('backend/assets/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="flex items-center justify-start">
                            <input type="file" onchange="document.getElementById('icon_preview').src = window.URL.createObjectURL(this.files[0])" name="site_icon">
                        </div>
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Facebook</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->fb_links}}" name="fb_links">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Youtube</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->yt_links}}" name="yt_links">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Linkedin</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->ln_links}}" name="ln_links">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Twitter</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->x_links}}" name="x_links">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Instagram</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" value="{{$siteInfo->inst_links}}" name="inst_links">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-full flex items-center justify-end">
                      <button type="submit" class="py-2 px-10 bg-blue-700 rounded-md text-white text-lg">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </section>


@endsection

@push('js')

@endpush