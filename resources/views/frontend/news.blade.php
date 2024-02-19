@extends('layouts.web')

@push('css')
    <style>
        p{
            font-size: 22px;
        }
    </style>
@endpush

@section('content')
    <section class="w-full py-20">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold my-6">{{$news->headline}}</h1>

        <div>
            {!!$news->article!!}
        </div>
        </div>
    </section>
@endsection

@push('js')
    
@endpush