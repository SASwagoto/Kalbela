@extends('layouts.web')

@push('css')

@endpush

@section('content')
    <section class="w-full my-5">
        <div class="container flex flex-col justify-between gap-6 mx-auto">
            <div class="title flex justify-center">
                <h1 class="text-3xl font-bold">{{$page->page_title_b}}</h1>
            </div>
            <div class="page_content mx-10 md:mx-0">
                {!! $page->page_content !!}
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush