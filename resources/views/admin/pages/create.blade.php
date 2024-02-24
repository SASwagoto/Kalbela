@extends('layouts.admin')

@push('css')
    <style>
        .ck-editor__editable_inline {
            height: 550px;
            padding: 0 30px !important;
        }
    </style>
@endpush

@section('content')
    @component('layouts.partials.dashboard.breadcrumbs')
        @section('header')
            Create New Page
        @endsection
        <a href="{{ route('dashboard') }}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
        <i class="fa-solid fa-angle-right text-slate-400"></i>
        <a href="{{ route('page.index') }}" class="text-sm font-medium text-slate-500" aria-current="page">Pages</a>
        <i class="fa-solid fa-angle-right text-slate-400"></i>
        <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Create</a>
    @endcomponent

    <section class="flex w-full flex-col gap-2">
        <div class="flex w-full justify-end gap-2">
            <a href="{{ route('page.index') }}" class="rounded-md bg-blue-700 px-4 py-2 text-white">All Pages <i
                    class="fa-solid fa-list ms-2 text-white"></i></a>
            <a href="#" class="rounded-md bg-blue-700 px-4 py-2 text-white">Trash <i
                    class="fa-solid fa-trash ms-2 text-white"></i></a>
        </div>
        <form action="{{route('page.store')}}" method="POST" enctype="multipart/form-data" id="uploadPost" class="w-full justify-start gap-5">
            @csrf
            <div class="flex flex-col gap-2 rounded-md border bg-gray-100 p-2">
                <div class="w-full">
                    <label for="title">Page Title - Bangla<span class="text-red-700">*</span></label>
                    <input type="text" name="page_title_b" class="form-input rounded-md" required>
                    @error('headline')
                        <span class="text-red-700">{{$message}}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="title">Page Title - English<span class="text-red-700">*</span></label>
                    <input type="text" name="page_title_e" class="form-input rounded-md" required>
                    @error('headline')
                        <span class="text-red-700">{{$message}}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="article">Page Content <span class="text-red-700">*</span></label>
                    <textarea name="page_content" id="editor"></textarea>
                    @error('article')
                        <span class="text-red-700">{{$message}}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <button class="py-2 px-4 rounded-md bg-blue-700 text-white text-lg" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </section>

@endsection

@push('js')
    <script src="{{ asset('backend') }}/assets/plugins/ckeditor5/ckeditor.js"></script>
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
@endpush
