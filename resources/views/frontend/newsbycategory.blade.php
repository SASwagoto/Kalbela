@extends('layouts.web')

@section('title')
    নতুনখবর
@endsection
@push('css')

@endpush

@section('content')
    <section class="w-full my-5">
        <div class="container flex flex-col-reverse md:flex-row justify-between gap-6 mx-auto">
            <div class="w-full md:w-3/4 flex flex-col px-2 md:px-0">
                <div class="w-full flex gap-2">
                    <a href="{{route('homepage')}}"><i class="fa-solid fa-home"></i></a>
                    <span>/</span>
                    @if($category->pbname)
                    <a href="{{route('newsBy', $category->pslug)}}" class="text-lg font-bold text-blue-700">{{$category->pbname}}</a>
                    <span>/</span>
                    <h3 class="text-lg font-bold text-blue-700">{{$category->cbname}}</h3>
                    @else
                    <h3 class="text-lg font-bold text-blue-700">{{$category->cbname}}</h3>
                    @endif
                </div>
                <div class="flex flex-col md:flex-row gap-2">
                    <div class="w-full md:w-1/2">
                        @foreach ($firstPlace as $firstItem)
                        <a href="{{ route('singleNews', ['category' => $firstItem->cslug, 'slug' => $firstItem->nslug]) }}" class="relative group flex flex-col gap-1 border-b rounded-md overflow-hidden">
                            <div class="overflow-hidden rounded-md">
                                @if ($firstItem->feature_photo)
                                <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$firstItem->feature_photo)}}" alt="">
                                @else
                                <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                                @endif
                            </div>
                            <div class="mt-1 pt-5 flex justify-center absolute bottom-0 left-1/2 -translate-x-1/2 bg-gradient-to-t to-transparent from-black w-full text-center">
                                <h3 class="text-lg font-bold group-hover:text-blue-500 text-white">{{$firstItem->headline}}</h3>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="w-full md:w-1/2 grid grid-cols-2 gap-2">
                        @foreach ($secondPlace as $secondItem)
                        <a href="{{ route('singleNews', ['category' => $secondItem->cslug, 'slug' => $secondItem->nslug]) }}" class="relative group h-fit flex flex-col gap-1 border-b rounded-md overflow-hidden">
                            <div class="overflow-hidden rounded-md">
                                @if ($secondItem->feature_photo)
                                <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$secondItem->feature_photo)}}" alt="">
                                @else
                                <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                                @endif
                            </div>
                            <div class="mt-1 pt-5 flex justify-center absolute bottom-0 left-1/2 -translate-x-1/2 bg-gradient-to-t to-transparent from-black w-full text-center">
                                <h3 class="text-md font-bold group-hover:text-blue-500 text-white">{{$secondItem->headline}}</h3>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-2 md:px-0">
                @if ($ad1 != null)
                    <a href="{{$ad1->add_url}}" class="w-full flex items-center overflow-hidden border rounded-md">
                        <img class="w-full" src="{{asset('advertise/'.$ad1->image)}}" alt="{{$ad1->title}}">
                    </a>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush
