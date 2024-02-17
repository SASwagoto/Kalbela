@extends('layouts.admin')

@push('css')
    <link rel="stylesheet" href="{{asset('backend')}}/assets/plugins/select2/css/select2.min.css">
    <style>
        .ck-editor__editable_inline {
            height: 450px;
        }
    </style>
@endpush

@section('content')
    @component('layouts.partials.dashboard.breadcrumbs')
        @section('header')
            Create New Post
        @endsection
        <a href="{{ route('dashboard') }}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
        <i class="fa-solid fa-angle-right text-slate-400"></i>
        <a href="{{ route('post.all') }}" class="text-sm font-medium text-slate-500" aria-current="page">Post</a>
        <i class="fa-solid fa-angle-right text-slate-400"></i>
        <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Create Post</a>
    @endcomponent

    <section class="flex w-full flex-col gap-2">
        <div class="flex w-full justify-end gap-2">
            <a href="{{ route('post.all') }}" class="rounded-md bg-blue-700 px-4 py-2 text-white">All Posts <i
                    class="fa-solid fa-list ms-2 text-white"></i></a>
            <a href="#" class="rounded-md bg-blue-700 px-4 py-2 text-white">Trash <i
                    class="fa-solid fa-trash ms-2 text-white"></i></a>
        </div>
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" class="flex w-full justify-start gap-5">
            @csrf
            <div class="flex w-4/6 flex-col gap-2 rounded-md border bg-gray-100 p-2">
                <div class="w-full">
                    <label for="title">Title <span class="text-red-700">*</span></label>
                    <input type="text" name="title" class="form-input rounded-md">
                </div>
                <div class="w-full">
                    <label for="article">Article Content <span class="text-red-700">*</span></label>
                    <textarea name="article" id="editor"></textarea>
                </div>
                <div class="w-full flex justify-start">
                    <button type="submit" class="py-2 px-4 bg-blue-600 text-white">Submit</button>
                </div>
            </div>
            <div class="w-2/6 flex flex-col gap-2 rounded-md border bg-gray-100 p-2">
                <div class="w-full">
                    <label for="category">Select Category</label>
                    <select class="category_select form-input rounded-md" name="category_id[]" multiple="multiple">
                        <option value="">Uncategorized</option>
                        @forelse ($categories as $category)
                            <option value="{{$category->id}}">{{$category->ban_name.'-'.$category->eng_name}}</option>
                        @empty
                            <option value="" disabled>No data found</option>
                        @endforelse
                    </select>
                </div>
            </div>
        </form>
    </section>

@endsection

@push('js')
<script src="{{asset('backend')}}/assets/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend/assets/plugins/ckeditor5/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(document).ready(function() {
            $('.category_select').select2();
        });
    </script>
@endpush
