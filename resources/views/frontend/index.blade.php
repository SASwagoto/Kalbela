@extends('layouts.web')

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/plugins/swiperjs/swiper-bundle.min.css') }}">
@endpush

@section('content')
    <section class="my-4 w-full">
        <div class="container mx-auto flex flex-col md:flex-row justify-center gap-2">
            <div class="flex md:w-2/4 flex-col gap-4">
                @foreach ($firstPlace as $feature)
                <a href="{{ route('singleNews', ['category' => $feature->cslug, 'slug' => $feature->nslug]) }}" class="headnews flex md:flex-row flex-col gap-2 rounded-md border p-2">
                    <div class="w-full md:w-3/5 overflow-hidden rounded-md">
                        @if ($feature->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$feature->feature_photo)}}" alt="">
                        @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                        @endif
                    </div>
                    <div class="w-full md:w-2/5">
                        <h2 class="text-xl md:text-3xl font-bold">{{$feature->headline}}</h2>
                        <p class="mt-2 text-sm">{!! Str::of($feature->article)->words(18, ' ...') !!}</p>
                    </div>
                </a>
                @endforeach
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 rounded-md border p-2">
                    @foreach ($thirdPlace as $third)
                    <a href="{{ route('singleNews', ['category' => $third->cslug, 'slug' => $third->nslug]) }}" class="flex flex-col gap-2">
                        <div class="w-full overflow-hidden rounded-md">
                            @if ($third->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$third->feature_photo)}}" alt="">
                            @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="">
                            <h3 class="text-md md:text-lg font-bold">{{$third->headline}}</h3>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="w-full md:w-1/4">
                <div class="flex flex-col rounded-md border p-2">
                    @foreach ($secondPlace as $second)
                    <a href="{{ route('singleNews', ['category' => $second->cslug, 'slug' => $second->nslug]) }}" class="flex flex-col gap-1 border-b py-2">
                        <div class="overflow-hidden rounded-md">
                            @if ($second->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$second->feature_photo)}}" alt="">
                            @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">{{$second->headline}}</h3>
                        </div>
                    </a>
                    @endforeach
                    
                    @foreach ($fourthPlace as $fourth)
                    <a href="{{ route('singleNews', ['category' => $fourth->cslug, 'slug' => $fourth->nslug]) }}" class="flex gap-2 border-b py-2">
                        <div class="w-1/3 overflow-hidden">
                            @if ($fourth->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$fourth->feature_photo)}}" alt="">
                            @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="mt-1 w-2/3">
                            <h3 class="text-lg font-bold">{{$second->headline}}</h3>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="hidden md:block w-full md:w-1/4">
                <div class="flex w-full flex-col gap-6">
                    @if ($ad1 != null)
                    <a href="{{$ad1->add_url}}" class="w-full flex items-center overflow-hidden border rounded-md">
                        <img class="w-full" src="{{asset('advertise/'.$ad1->image)}}" alt="{{$ad1->title}}">
                    </a>
                    @endif
                    @if ($ad2 != null)
                    <a href="{{$ad2->add_url}}" class="w-full flex items-center overflow-hidden border rounded-md">
                        <img class="w-full" src="{{asset('advertise/'.$ad2->image)}}" alt="{{$ad2->title}}">
                    </a>
                    @endif
                    @if ($ad3 != null)
                    <a href="{{$ad3->add_url}}" class="w-full flex items-center overflow-hidden border rounded-md">
                        <img class="w-full" src="{{asset('advertise/'.$ad3->image)}}" alt="{{$ad3->title}}">
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 w-full">
        <div class="container mx-auto rounded-md border p-2">
            <div class="flex items-center justify-between py-2">
                <h2 class="flex w-1/2 gap-2 text-xl font-bold">
                    <i class="fa-solid fa-video"></i>
                    ভিডিও
                </h2>
                <a href="{{route('newsBy', 'video')}}" class="text-xl font-bold">
                    সব ভিডিও
                    <i class="fa-solid fa-arrow-right ms-2 rounded-full border border-black p-2"></i></span>
                </a>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($videonews as $item)
                    <a href="{{ route('singleNews', ['category' => $item->cslug, 'slug' => $item->nslug]) }}" class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            @if ($item->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$item->feature_photo)}}" alt="">
                            @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">{{$item->headline}}</h3>
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    {{-- <section class="my-5 w-full">
        <div class="container mx-auto flex justify-between gap-4">
            <div class="w-1/3 flex flex-col p-2 border rounded-md">
                <div class="flex items-center gap-2 py-2 border-b-2 border-red-700">
                    <i class="fa-solid fa-comments fa-xl"></i>
                    <h3 class="text-xl font-bold">মতামত</h3>
                </div>
                <div class="w-full h-[600px] flex my-4">
                    <div class="swiper motamotSlider">
                        <div class="swiper-wrapper overflow-hidden">
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="flex w-full justify-between gap-4 rounded-b-lg border-b-4 border-red-600 bg-yellow-100">
                                    <div class="flex w-1/3 flex-col items-center justify-center gap-2 py-2">
                                        <div class="mx-auto h-auto w-1/2 overflow-hidden rounded-full border border-red-600">
                                            <img src="{{ asset('frontend/images/avater.jpg') }}" alt="">
                                        </div>
                                        <div class="flex flex-col items-center justify-center">
                                            <h3 class="text-lg font-bold">খন্দকার ইসমাইল</h3>
                                            <h5 class="text-sm">উপস্থাপক</h5>
                                        </div>
                                    </div>
                                    <div class="flex w-2/3 flex-col items-center justify-center gap-2">
                                        <h1 class="text-lg font-bold">ঐতিহাসিক পার্বত্য শান্তিচুক্তি ও অস্ত্র জমাদান</h1>
                                        <p class="text-sm">আমি তখন বাংলাদেশ টেলিভিশনের নিয়মিত অনুষ্ঠান ঘোষক ও উপস্থাপক। বিভিন্ন
                                            সময়ে পত্রিকার মাধ্যমে জেনেছি</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 rounded-md border p-2">
                <div class="flex items-center gap-2 py-2 border-b-2 border-red-700">
                    <i class="fa-solid fa-square-poll-vertical fa-xl"></i>
                    <h3 class="text-xl font-bold">অনলাইন জরিপ</h3>
                </div>
                <div class="flex flex-col rounded-md border p-2 mt-2">
                    <div class="flex justify-between items-center">
                        <div>
                            <i class="fa-regular fa-clock"></i>
                            <span class="text-md">{{bangla_date(time(), 'en').', '. strtotime(time())}}</span>
                        </div>
                        <a href="#">
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </div>
                    <div class="w-full rounded-md overflow-hidden my-2">
                        <img src="{{asset('frontend/images/cover_photo-1505.jpg')}}" alt="">
                    </div>
                    <div class="title">
                        <h2 class="text-xl font-bold">আপনি কাকে পাকিস্তানের প্রধানমন্ত্রী দেখতে চান?</h2>
                    </div>
                    <div class="polls my-4">
                        <div class="flex items-center gap-2 mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <div class="w-full px-2">
                                <span class="">ইমরান খান</span>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <div class="w-full px-2">
                                <span class="">ইমরান খান</span>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <div class="w-full px-2">
                                <span class="">ইমরান খান</span>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center text-center">
                        <h3>মোট ভোটারঃ ১২,৫৮২ জন</h3>
                        <div class="w-full flex justify-center gap-2 mt-2">
                            <a href="#">
                                <i class="fa-brands fa-square-facebook fa-2xl"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-x-twitter fa-2xl"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin fa-2xl"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram fa-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 rounded-md border p-2">
                @include('frontend.common.latest')
            </div>
        </div>
    </section> --}}
    <section class="w-full my-5">
        <div class="container flex justify-between gap-6 mx-auto px-2">
            <div class="w-full md:w-3/4 flex flex-col pb-2 border-b">
                <div class="flex justify-between items-center py-2 border-b-4 border-black">
                    <div class="flex justify-start items-center gap-4">
                        <i class="fa-solid fa-landmark fa-xl"></i>
                        <h3 class="text-2xl font-bold">সারাদেশ</h3>
                    </div>
                    <a href="{{route('newsBy', 'country')}}" class="text-xl font-bold">
                        <i class="fa-solid fa-arrow-right ms-2 rounded-full border-2 border-black p-2"></i></span>
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-4">
                    @foreach ($country as $item)
                    <a href="{{ route('singleNews', ['category' => $item->cslug, 'slug' => $item->nslug]) }}" class="group flex flex-col gap-2 rounded-md border">
                        <div class="w-full overflow-hidden">
                            @if ($item->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$item->feature_photo)}}" alt="">
                            @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="px-2">
                            <h2 class="text-md md:text-lg font-bold">{{$item->headline}}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="w-full hidden md:block md:w-1/4">
                <div class="w-full flex flex-col border p-4 rounded-md">
                    <div class="m-4 border-l-4 border-yellow-200">
                        <h3 class="text-xl font-bold ms-4">আমার এলাকার সংবাদ</h3>
                    </div>
                    <form action="#">
                        <select class="w-full p-2 border rounded-md mb-4" name="division" id="division">
                            <option value="">বিভাগ</option>
                        </select>
                        <select class="w-full p-2 border rounded-md mb-4" name="division" id="division">
                            <option value="">বিভাগ</option>
                        </select>
                        <select class="w-full p-2 border rounded-md mb-4" name="division" id="division">
                            <option value="">বিভাগ</option>
                        </select>
                        <button type="submit" class="w-full py-2 rounded-md bg-yellow-200 flex items-center justify-center gap-4 text-xl font-bold">অনুসন্ধান <i class="fa-solid fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full my-5">
        <div class="container flex flex-col md:flex-row justify-between gap-6 mx-auto px-2">
            <div class="w-full md:w-3/4 flex flex-col pb-2 border-b">
                <div class="flex justify-between items-center py-2 border-b-4 border-black">
                    <div class="flex justify-start items-center gap-4">
                        <i class="fa-brands fa-old-republic fa-xl"></i>
                        <h3 class="text-2xl font-bold">রাজনীতি</h3>
                    </div>
                    <a href="{{route('newsBy', 'politics')}}" class="text-xl font-bold">
                        <i class="fa-solid fa-arrow-right ms-2 rounded-full border-2 border-black p-2"></i></span>
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-4">
                    @foreach ($politics as $item)
                    <a href="{{ route('singleNews', ['category' => $item->cslug, 'slug' => $item->nslug]) }}" class="group flex flex-col gap-3 rounded-md border">
                        <div class="w-full overflow-hidden">
                            @if ($item->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$item->feature_photo)}}" alt="">
                            @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="px-2">
                            <h2 class="text-md md:text-lg font-bold">{{$item->headline}}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="w-full md:w-1/4">
                @if ($ad4 != null)
                    <a href="{{$ad4->add_url}}" class="w-full flex items-center overflow-hidden border rounded-md">
                        <img class="w-full" src="{{asset('advertise/'.$ad4->image)}}" alt="{{$ad4->title}}">
                    </a>
                @endif
            </div>
        </div>
    </section>

    <section class="w-full my-5">
        <div class="container flex flex-col md:flex-row justify-between gap-6 mx-auto p-2">
            <div class="w-full md:w-3/4 flex flex-col pb-2 border-b">
                <div class="flex justify-between items-center py-2 border-b-4 border-black">
                    <div class="flex justify-start items-center gap-4">
                        <i class="fa-solid fa-landmark fa-xl"></i>
                        <h3 class="text-2xl font-bold">জাতীয়</h3>
                    </div>
                    <a href="{{route('newsBy', 'national')}}" class="text-xl font-bold">
                        <i class="fa-solid fa-arrow-right ms-2 rounded-full border-2 border-black p-2"></i></span>
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-4">
                    @foreach ($nationals as $item)
                    <a href="{{ route('singleNews', ['category' => $item->cslug, 'slug' => $item->nslug]) }}" class="group flex flex-col gap-3 rounded-md border">
                        <div class="w-full overflow-hidden">
                            @if ($item->feature_photo)
                            <img class="w-full group-hover:opacity-75" src="{{asset('media/'.$item->feature_photo)}}" alt="">
                            @else
                            <img class="w-full" src="{{asset('frontend/images/preview.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="px-2">
                            <h2 class="text-md md:text-lg font-bold">{{$item->headline}}</h2>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="w-full md:w-1/4">
                @if ($ad5 != null)
                    <a href="{{$ad5->add_url}}" class="w-full flex items-center overflow-hidden border rounded-md">
                        <img class="w-full" src="{{asset('advertise/'.$ad5->image)}}" alt="{{$ad5->title}}">
                    </a>
                @endif
            </div>
        </div>
    </section>

    
@endsection

@push('js')
    <script src="{{ asset('frontend/plugins/swiperjs/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/customSlider.js') }}"></script>
@endpush
