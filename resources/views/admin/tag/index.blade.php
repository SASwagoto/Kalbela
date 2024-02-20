@extends('layouts.admin')

@push('css')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/DataTables/datatables.min.css')}}" />
<style>
  select[name="example_length"]{
    width: 70px;
  }
</style>
@endpush

@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
    @section('header')
        Tags
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Tags</a>
@endcomponent

<section class="w-full flex justify-between gap-5">
    <div class="w-2/5 border p-4 rounded-md bg-gray-100">
        <form class="flex flex-col gap-4" action="{{route('tag.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-start items-start gap-2">
                <div class="w-1/4 flex flex-col mt-2">
                    <label class="text-nowrap texl-lg" for="eng_name">Tag Name</label>
                    <span>&#40;English&#41;</span>
                </div>
                <div class="w-3/4 flex flex-col">
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="eng_name">
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
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="ban_name">
                    <span class="text-sm">এই নামটি সাইটে প্রদর্শিত হবে।</span>
                    @error('ban_name')
                       <span class="text-red-800">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="ban_name">Slug</label>
                <div class="w-3/4 flex flex-col">
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="slug">
                    <span class="text-sm">The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</span>
                    @error('slug')
                       <span class="text-red-800">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="ban_name">Description</label>
                <div class="w-3/4 flex flex-col">
                    <textarea class="w-full mb-1 form-input rounded-md bg-gray-100" name="description" id="" rows="4"></textarea>
                    <span class="text-sm">The description is not prominent by default; however, some themes may show it.</span>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="py-2 px-6 rounded-md bg-blue-800 text-white text-lg font-bold">Submit</button>
            </div>
        </form>
    </div>

    <div class="w-3/5 border p-4 rounded-md bg-gray-100">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Tags</th>
                    <th>Description</th>
                    <th>Slug</th>
                    <th>Posts</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $key => $tag)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>
                        <div class="flex flex-col">
                            <h4 class="font-bold">{{$tag->eng_name}}</h4>
                            <h4 class="font-bold">{{$tag->ban_name}}</h4>
                        </div>
                    </td>
                    <td>{{$tag->description ?? '--'}}</td>
                    <td>{{$tag->slug}}</td>
                    <td>
                        @if ($tag->isActive)
                        <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                        @else
                            <span class="p-1 rounded-full bg-red-700"></span>
                        @endif
                    </td>
                    <td>
                        <div class="flex justify-end gap-3">
                            <a href="{{route('tag.edit', $tag->slug)}}"><i class="fa-solid fa-pen-to-square text-green-600 fa-lg"></i></a>
                            <form action="{{route('tag.delete')}}" id="deleteForm{{$key}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden"  name="slug" value="{{$tag->slug}}">
                                <button type="submit"><i class="fa-solid fa-trash fa-lg text-red-600"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection

@push('js')
<script src="{{asset('backend/assets/plugins/DataTables/datatables.min.js')}}"></script>
    <script>
       new DataTable('#example', {
            columnDefs: [
                {
                    targets: [0],
                    orderData: [0, 1]
                },
                {
                    targets: [1],
                    orderData: [1, 0]
                },
                {
                    targets: [4],
                    orderData: [4, 0]
                }
            ]
        });
    </script>
@endpush