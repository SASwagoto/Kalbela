@extends('layouts.admin')

@push('css')
@endpush

@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
    @section('header')
        Edit Tag
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="{{route('tag.create')}}" class="text-sm font-medium text-slate-500" aria-current="page">Tags</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Edit</a>
@endcomponent

<section class="w-full flex justify-between gap-5">
    <div class="w-2/5 border p-4 rounded-md bg-gray-100">
        <form class="flex flex-col gap-4" action="{{route('tag.update', $tag->slug)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex justify-start items-start gap-2">
                <div class="w-1/4 flex flex-col mt-2">
                    <label class="text-nowrap texl-lg" for="eng_name">Tag Name</label>
                    <span>&#40;English&#41;</span>
                </div>
                <div class="w-3/4 flex flex-col">
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="eng_name" value="{{$tag->eng_name}}">
                    <span class="text-sm">The name is how it appears on your site.</span>
                    @error('eng_name')
                       <span class="text-red-800">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <div class="w-1/4 flex flex-col mt-2">
                    <label class="text-nowrap texl-lg" for="eng_name">Tag Name</label>
                    <span>&#40;Bangla&#41;</span>
                </div>
                <div class="w-3/4 flex flex-col">
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="ban_name" value="{{$tag->ban_name}}">
                    <span class="text-sm">এই নামটি সাইটে প্রদর্শিত হবে।</span>
                    @error('ban_name')
                       <span class="text-red-800">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="ban_name">Slug</label>
                <div class="w-3/4 flex flex-col">
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="slug" value="{{$tag->slug}}">
                    <span class="text-sm">The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</span>
                    @error('slug')
                       <span class="text-red-800">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="ban_name">Description</label>
                <div class="w-3/4 flex flex-col">
                    <textarea class="w-full mb-1 form-input rounded-md bg-gray-100" name="description" id="" rows="4">{{$tag->description}}</textarea>
                    <span class="text-sm">The description is not prominent by default; however, some themes may show it.</span>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="py-2 px-6 rounded-md bg-blue-800 text-white text-lg font-bold">Update</button>
            </div>
        </form>
    </div>
</section>

@endsection

@push('js')
   
@endpush