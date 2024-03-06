@extends('layouts.web')

@push('css')

@endpush

@section('content')
    <section class="w-full my-5">
        <div class="container flex flex-col-reverse md:flex-row justify-between gap-6 mx-auto">
            <div class="w-full md:w-3/4 flex flex-col px-2 md:px-0">
                <div class="w-full flex gap-2">
                    <a href="{{route('homepage')}}"><i class="fa-solid fa-home"></i></a>
                    <span>/</span>
                    @if (!$category)
                    <h3 class="text-lg font-bold text-blue-700">সর্বশেষ সব খবর</h3>
                    @elseif($category->pbname)
                    <a href="{{route('newsBy', $category->pslug)}}" class="text-lg font-bold text-blue-700">{{$category->pbname}}</a>
                    <span>/</span>
                    <h3 class="text-lg font-bold text-blue-700">{{$category->cbname}}</h3>
                    @else
                    <h3 class="text-lg font-bold text-blue-700">{{$category->cbname}}</h3>
                    @endif
                    
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-6 my-4">
                    @forelse ($newses as $news)
                    <a href="{{ route('singleNews', ['category' => $news->cslug, 'slug' => $news->nslug]) }}" class="flex group gap-2">
                        <div class="image w-1/3 overflow-hidden rounded-md">
                            @if ($news->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$news->feature_photo)}}" alt="">
                            @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="w-2/3 flex flex-col gap-2">
                            <h2 class="text-lg md:text-2xl font-bold group-hover:text-blue-700">{{$news->headline}}</h2>
                            <div class="flex gap-2 items-center">
                                <i class="fa-regular fa-clock"></i>
                                <span class="text-md font-bold font-bangla">
                                   {{date('d M Y, h:i A', strtotime($news->published_at))}}
                                </span>
                            </div>
                        </div>
                    </a>
                    @empty
                        <h2 class="text-4xl font-bold">কোন খবর নেই</h2>
                    @endforelse
                </div>
                {{$newses->links()}}
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
