@extends('layouts.web')

@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/plugins/swiperjs/swiper-bundle.min.css') }}">
@endpush

@section('content')
    <section class="my-4 w-full">
        <div class="container mx-auto flex justify-center gap-2">
            <div class="flex w-2/4 flex-col gap-4">
                <a href="#" class="headnews flex gap-2 rounded-md border p-2">
                    <div class="w-3/5 overflow-hidden rounded-md">
                        <img class="w-full" src="{{ asset('frontend/images/headnews.jpg') }}" alt="">
                    </div>
                    <div class="w-2/5">
                        <h2 class="text-3xl font-bold">ইমরান খানকে ঠেকাতে মরিয়া নওয়াজ, নিচ্ছেন নয়া কৌশল</h2>
                        <p class="mt-2 text-sm">পাকিস্তানে নির্বাচনে পিছিয়ে থেকেও এককভাবে সবচেয়ে বেশি আসন পাওয়ার দাবি করেছেন
                            দেশটির সাবেক প্রধানমন্ত্রী ও পিএমএল (এন)-এর নেতা নওয়াজ..</p>
                    </div>
                </a>
                <div class="grid grid-cols-3 gap-4 rounded-md border p-2">
                    <a href="#" class="flex flex-col gap-2">
                        <div class="w-full overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/news2.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex flex-col gap-2">
                        <div class="w-full overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/news3.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex flex-col gap-2">
                        <div class="w-full overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/news4.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex flex-col gap-2">
                        <div class="w-full overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/news5.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex flex-col gap-2">
                        <div class="w-full overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/news6.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex flex-col gap-2">
                        <div class="w-full overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/news7.webp') }}" alt="">
                        </div>
                        <div class="">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-1/4">
                <div class="flex flex-col rounded-md border p-2">
                    <a href="#" class="flex flex-col gap-1 border-b py-2">
                        <div class="overflow-hidden rounded-md">
                            <img class="w-full" src="{{ asset('frontend/images/news1.webp') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex gap-2 border-b py-2">
                        <div class="w-1/3 overflow-hidden">
                            <img class="w-full" src="{{ asset('frontend/images/news3.webp') }}" alt="">
                        </div>
                        <div class="mt-1 w-2/3">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex gap-2 border-b py-2">
                        <div class="w-1/3 overflow-hidden">
                            <img class="w-full" src="{{ asset('frontend/images/news4.webp') }}" alt="">
                        </div>
                        <div class="mt-1 w-2/3">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex gap-2 border-b py-2">
                        <div class="w-1/3 overflow-hidden">
                            <img class="w-full" src="{{ asset('frontend/images/news7.webp') }}" alt="">
                        </div>
                        <div class="mt-1 w-2/3">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex gap-2 border-b py-2">
                        <div class="w-1/3 overflow-hidden">
                            <img class="w-full" src="{{ asset('frontend/images/news4.webp') }}" alt="">
                        </div>
                        <div class="mt-1 w-2/3">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                    <a href="#" class="flex gap-2 border-b py-2">
                        <div class="w-1/3 overflow-hidden">
                            <img class="w-full" src="{{ asset('frontend/images/news5.webp') }}" alt="">
                        </div>
                        <div class="mt-1 w-2/3">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-1/4">
                <div class="flex h-[700px] w-full flex-col gap-2 rounded-md border p-2">
                    <div class="flex justify-start gap-6 border-b">
                        <a href="#"
                            class="flex w-1/2 justify-center gap-2 font-bold active:border-b-4 active:border-red-800">
                            <i class="fa-solid fa-video"></i>
                            ভিডিও স্টোরি
                        </a>
                        <a href="#"
                            class="flex w-1/2 justify-center gap-2 font-bold active:border-b-4 active:border-red-800">
                            <i class="fa-solid fa-camera-retro"></i>
                            ফটো স্টোরি
                        </a>
                    </div>
                    <div class="h-full w-full overflow-hidden border">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 w-full">
        <div class="container mx-auto rounded-md border p-2">
            <div class="flex items-center justify-between py-2">
                <a href="#" class="flex w-1/2 gap-2 text-lg">
                    <i class="fa-solid fa-video"></i>
                    ভিডিও স্টোরি
                </a>
                <a href="#">
                    সব ভিডিও
                    <i class="fa-solid fa-arrow-right ms-2 rounded-full border border-black p-2"></i></span>
                </a>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1508.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1508.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1508.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                    <div class="swiper-slide flex flex-col justify-center">
                        <div class="overflow-hidden rounded-md">
                            <img src="{{ asset('frontend/images/cover_photo-1505.jpg') }}" alt="">
                        </div>
                        <div class="mt-1">
                            <h3 class="text-lg font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section class="my-5 w-full">
        <div class="container mx-auto flex justify-between gap-4">
            <div class="h-[500px] w-1/3 flex rounded-md border p-2">
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
            <div class="h-[400px] w-1/3 rounded-md border p-2"></div>
            <div class="h-[400px] w-1/3 rounded-md border p-2"></div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('frontend/plugins/swiperjs/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/customSlider.js') }}"></script>
    <script></script>
    <script></script>
@endpush
