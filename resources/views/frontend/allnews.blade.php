@extends('layouts.web')

@push('css')

@endpush

@section('content')
    <section class="w-full my-5">
        <div class="container flex justify-between gap-6 mx-auto">
            <div class="w-3/4 flex flex-col pb-2 border-b">
                <div class="w-full flex gap-2">
                    <a href="{{route('homepage')}}"><i class="fa-solid fa-home"></i></a>
                    <span>/</span>
                    <h3 class="text-lg font-bold text-blue-700">সর্বশেষ সব খবর</h3>
                </div>
                <div class="grid grid-cols-2 gap-6 mt-4">
                    <a href="#" class="flex gap-2">
                        <div class="image w-1/3 overflow-hidden rounded-md">
                            <img class="w-full" src="{{asset('frontend/images/news1.webp')}}" alt="">
                        </div>
                        <div class="w-2/3 flex flex-col gap-2">
                            <h2 class="text-2xl font-bold">তামিম-সাকিব লড়াই নিয়ে যা বললেন মুশফিক</h2>
                            <div class="flex gap-2 items-center">
                                <i class="fa-regular fa-clock"></i>
                                <span>{{bangla_date(time(), 'en')}}</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="flex gap-2">
                        <div class="image w-1/3 overflow-hidden rounded-md">
                            <img class="w-full" src="{{asset('frontend/images/news1.webp')}}" alt="">
                        </div>
                        <div class="w-2/3 flex flex-col gap-2">
                            <h2 class="text-2xl font-bold">তামিম-সাকিব লড়াই নিয়ে যা বললেন মুশফিক</h2>
                            <div class="flex gap-2 items-center">
                                <i class="fa-regular fa-clock"></i>
                                <span>{{bangla_date(time(), 'en')}}</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="flex gap-2">
                        <div class="image w-1/3 overflow-hidden rounded-md">
                            <img class="w-full" src="{{asset('frontend/images/news1.webp')}}" alt="">
                        </div>
                        <div class="w-2/3 flex flex-col gap-2">
                            <h2 class="text-2xl font-bold">তামিম-সাকিব লড়াই নিয়ে যা বললেন মুশফিক</h2>
                            <div class="flex gap-2 items-center">
                                <i class="fa-regular fa-clock"></i>
                                <span>{{bangla_date(time(), 'en')}}</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="flex gap-2">
                        <div class="image w-1/3 overflow-hidden rounded-md">
                            <img class="w-full" src="{{asset('frontend/images/news1.webp')}}" alt="">
                        </div>
                        <div class="w-2/3 flex flex-col gap-2">
                            <h2 class="text-2xl font-bold">তামিম-সাকিব লড়াই নিয়ে যা বললেন মুশফিক</h2>
                            <div class="flex gap-2 items-center">
                                <i class="fa-regular fa-clock"></i>
                                <span>{{bangla_date(time(), 'en')}}</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="flex gap-2">
                        <div class="image w-1/3 overflow-hidden rounded-md">
                            <img class="w-full" src="{{asset('frontend/images/news1.webp')}}" alt="">
                        </div>
                        <div class="w-2/3 flex flex-col gap-2">
                            <h2 class="text-2xl font-bold">তামিম-সাকিব লড়াই নিয়ে যা বললেন মুশফিক</h2>
                            <div class="flex gap-2 items-center">
                                <i class="fa-regular fa-clock"></i>
                                <span>{{bangla_date(time(), 'en')}}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-1/4">
                <div class="w-full h-[350px] border"></div>
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush
