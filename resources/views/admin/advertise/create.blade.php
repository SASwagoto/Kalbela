@extends('layouts.admin')

@push('css')

@endpush

@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
    @section('header')
        Create Advertisement
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="{{route('ad.index')}}" class="text-sm font-medium text-slate-700" aria-current="page">Advertise</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Create</a>
@endcomponent
    <section class="w-full">
        <form action="{{route('ad.store')}}" method="POST" enctype="multipart/form-data" class="w-full flex justify-start gap-10">
            @csrf
            <div class="w-2/4 flex flex-col gap-4 border rounded-md p-2">
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Ad Title</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" name="title">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Ad URL</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" placeholder="https://" name="add_url">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Advertise Position</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="number" class="form-input rounded-md" min="1" value="1" name="position">
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-1/6 flex items-center justify-start">
                        <h5 class="text-lg font-bold">Description</h5>
                    </div>
                    <div class="w-5/6 flex items-center">
                        <input type="text" class="form-input rounded-md" name="description">
                    </div>
                </div>
            </div>
            <div class="w-2/4 flex flex-col gap-4 border rounded-md p-2">
                <div class="flex justify-start gap-2 mb-6">
                    <div class="w-full flex flex-col">
                        <div class="flex items-center">
                            <h5 class="text-lg font-bold">Advertise Image</h5>
                        </div>
                        <div class="flex justify-center p-2">
                            <img id="Add_preview" class="w-60" src="{{asset('backend/assets/images/preview.jpg')}}" alt="">
                        </div>
                        <div class="flex items-center justify-start">
                            <input type="file" onchange="document.getElementById('Add_preview').src = window.URL.createObjectURL(this.files[0])" name="image">
                        </div>
                    </div>
                </div>
                <div class="flex justify-start gap-2">
                    <div class="w-full flex items-center justify-end">
                      <button type="submit" class="py-2 px-10 bg-blue-700 rounded-md text-white text-lg">Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </section>


@endsection

@push('js')

@endpush