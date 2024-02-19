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
        All Post
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Post</a>
@endcomponent

<section class="w-full flex flex-col gap-2">
    <div class="w-full flex justify-end gap-2">
        <a href="{{route('post.create')}}" class="py-2 px-4 bg-blue-700 rounded-md text-white">Add New Post <i class="fa-solid fa-add text-white ms-2"></i></a>
        <a href="#" class="py-2 px-4 bg-blue-700 rounded-md text-white">Trash <i class="fa-solid fa-trash text-white ms-2"></i></a>
    </div>
    <div class="w-full border p-4 rounded-md bg-gray-100">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publish Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                <tr class="group">
                    <td>{{$key+1}}</td>
                    <td>
                    <div class="w-20 overflow-hidden flex items-center">
                        <img class="w-full" src="{{asset('media/'. $post->feature_photo)}}" alt="">    
                    </div>
                    </td>
                    <td>
                        <div class="flex flex-col">
                            <h1 class="text-md font-bold">{{$post->headline}}</h1>
                            <div class="flex gap-4 opacity-0 group-hover:opacity-100 duration-300">
                                <a href="#" class="text-green-600">view</a>
                                <span>|</span>
                                <a href="{{route('post.edit', $post->slug)}}" class="text-green-600">Edit</a>
                                <span>|</span>
                                <form action="{{route('post.delete', $post->slug)}}" id="deleteForm{{$key}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="deleteForm({{$key}});" class="text-red-600">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>{{$post->name}}</td>
                    <td>
                        <div class="flex flex-col">
                            @if ($post->isPublished == true)
                            <span class="text-green-600">Published</span>
                            <span>{{$post->published_at}}</span>
                            @else
                            <span class="text-red-600">Unpublished</span>
                            @endif
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
    <script>
        function deleteForm(key){

            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#deleteForm'+key).submit();
                    }
                });
        }
    </script>
@endpush