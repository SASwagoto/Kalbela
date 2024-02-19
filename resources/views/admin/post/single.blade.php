@extends('layouts.admin')

@push('css')
    <style>
        p{
            font-size: 22px;
            color: black;
            text-align: justify;
        }
    </style>
@endpush

@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
    @section('header')
        {{$post->headline}}
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="{{route('post.all')}}" class="text-sm font-medium text-slate-700" aria-current="page">Post</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">{{Str::of($post->headline)->limit(15)}}</a>
@endcomponent
    <section class="w-full font-bangla">
        <div class="flex flex-col gap-4">
            <div class="category flex items-center gap-2">
                    @foreach(explode(',', $post->category_names) as $categoryBanName)
                        <a href="#" class="text-xl font-bold">{{ $categoryBanName }}</a>
                        <i class="fa-solid fa-angles-right fa-xl"></i>
                    @endforeach
            </div>
            <div class="headline flex flex-col">
                <h1 class="text-4xl font-bold">{{$post->headline}}</h1>
                <span>পোস্টের সময়ঃ {{$post->created_at}}</span>
                <span>প্রকাশনার সময়ঃ {{date('d-m-Y h:i A', strtotime($post->published_at))}}</span>
                <span>আপডেট সময়ঃ {{$post->updated_at}}</span>
            </div>
            <div class="newsbody flex justify-between">
                <div class="w-2/3">
                    {!! $post->article !!}
                </div>
            </div>
            <div class="tags flex gap-4">
                @if ($post->tag_names)
                @foreach(explode(',', $post->tag_names) as $tagBanName)
                    <a href="#" class="text-md font-bold py-1 px-4 bg-slate-200 rounded">{{ $tagBanName }}</a>
                @endforeach
                @endif
            </div>
        </div>
    </section>


@endsection

@push('js')

@endpush