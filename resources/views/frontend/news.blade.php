@extends('layouts.web')

@push('css')

    <style>
        p{
            font-size: 20px;
            text-align: justify;
        }
    </style>
@endpush

@section('content')
<section class="w-full my-4">
    <div class="container mx-auto flex flex-col md:flex-row justify-between gap-10 px-2 md:px-0">
        <div class="w-full md:w-1/6 flex flex-col gap-2">
            <div class="w-full flex flex-col gap-2">
                <div class="breducrubms flex gap-2">
                    <a href="{{route('homepage')}}"><i class="fa-solid fa-home"></i></a>
                    <span>/</span>
                    @if($news->pbname)
                    <a href="{{route('newsBy', $news->pslug)}}" class="text-md font-bold text-blue-700">{{$news->pbname}}</a>
                    <span>/</span>
                    <h3 class="text-md font-bold text-blue-700">{{$news->cbname}}</h3>
                    @else
                    <h3 class="text-md font-bold text-blue-700">{{$news->cbname}}</h3>
                    @endif
                </div>
                <div class="author flex gap-2 items-center">
                    <i class="fa-solid fa-user-circle"></i>
                    <h4 class="text-md font-bold">{{$news->name}}</h4>
                </div>
                <div class="published flex border-b">
                    <h4 class="text-md font-bold">প্রকাশঃ {{date('d M Y, h:i A', strtotime($news->published_at))}}</h4>
                </div>
            </div>
            <div class="w-full md:flex flex-col mt-6 hidden">
                <div class="border-l-4 border-gray-400">
                    <h4 class="text-lg font-bold ms-2">এ সম্পর্কিত আরও খবর</h4>
                </div>
                <div class="flex flex-col gap-4 px-2 py-4 border rounded-md mt-4">
                    @forelse ($relatedNews as $item)
                    <a href="{{ route('singleNews', ['category' => $item->cslug, 'slug' => $item->nslug]) }}" class="flex justify-between gap-2 pb-2 border-b">
                        <div class="w-1/3 flex items-center rounded-md overflow-hidden">
                            <img class="w-full" src="{{asset('media/'.$item->feature_photo)}}" alt="">
                        </div>
                        <div class="w-2/3 flex items-start">
                            <h3 class="text-md font-bold">{{Str::of($item->headline)->words(5, ' ...')}}</h3>
                        </div>
                    </a>
                    @empty
                    <h4 class="text-lg font-bold ms-2">দুঃখিত! এ সম্পর্কিত আর কোন খবর নেই।</h4>
                    @endforelse
                </div>
            </div>
            <div class="w-full mt-4 hidden md:block">
                @if ($ad7 != null)
                    <a href="{{$ad7->add_url}}" class="w-full flex items-center overflow-hidden border rounded-md">
                        <img class="w-full" src="{{asset('advertise/'.$ad7->image)}}" alt="{{$ad7->title}}">
                    </a>
                @endif
            </div>
        </div>
        <div class="w-full md:w-3/6 flex flex-col gap-2">
            <div class="main_article flex flex-col gap-4">
                <div class="headline px-3 md:px-0">
                    <h2 class="text-4xl font-bold">{{$news->headline}}</h2>
                    <div class="flex justify-end items-center gap-2 mt-2">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{$url}}" target="_blank" class="flex items-center bg-black py-2 px-3 rounded-full text-white"><i class="fa-brands fa-facebook-f "></i></a>
                        <a href="https://api.whatsapp.com/send?text={{$news->headline}}%20{{$url}}" target="_blank" class="flex items-center bg-black py-2 px-3 rounded-full text-white"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{$url}}&text={{$news->headline}}" target="_blank" class="flex items-center bg-black py-2 px-3 rounded-full text-white"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{$url}}" target="_blank" class="flex items-center bg-black py-2 px-3 rounded-full text-white"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://t.me/share/url?url={{$url}}&text={{$news->headline}}" target="_blank" class="flex items-center bg-black py-2 px-3 rounded-full text-white"><i class="fa-solid fa-paper-plane"></i></a>
                    </div>
                    
                    {{-- <div class="flex justify-end text-3xl my-2">{!! $shareButtons !!}</div> --}}
                </div>
                <div class="feature_photo flex items-center py-2 px-10">
                    @if ($news->feature_photo)
                        <img class="w-full" src="{{asset('media/'.$news->feature_photo)}}" alt="">
                    @endif
                </div>
                <div class="article px-3 md:px-0">
                    {!! $news->article !!}
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col mt-6 md:hidden">
            <div class="border-l-4 border-gray-400">
                <h4 class="text-lg font-bold ms-2">এ সম্পর্কিত আরও খবর</h4>
            </div>
            <div class="flex flex-col gap-4 px-2 py-4 border rounded-md mt-4">
                @forelse ($relatedNews as $item)
                <a href="{{ route('singleNews', ['category' => $item->cslug, 'slug' => $item->nslug]) }}" class="flex justify-between gap-2 pb-2 border-b">
                    <div class="w-1/3 flex items-center rounded-md overflow-hidden">
                        <img class="w-full" src="{{asset('media/'.$item->feature_photo)}}" alt="">
                    </div>
                    <div class="w-2/3 flex items-start">
                        <h3 class="text-md font-bold">{{Str::of($item->headline)->words(5, ' ...')}}</h3>
                    </div>
                </a>
                @empty
                <h4 class="text-lg font-bold ms-2">দুঃখিত! এ সম্পর্কিত আর কোন খবর নেই।</h4>
                @endforelse
            </div>
        </div>
        <div class="w-full md:w-2/6 flex flex-col gap-6">
            <div class="w-full border rounded-md">
                @if ($ad6 != null)
                    <a href="{{$ad6->add_url}}" class="w-full flex items-center overflow-hidden border rounded-md">
                        <img class="w-full" src="{{asset('advertise/'.$ad6->image)}}" alt="{{$ad6->title}}">
                    </a>
                @endif
            </div>
            <div class="w-full">
                @include('frontend.common.latest')
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')

@endpush