@extends('layouts.web')

@push('css')

@endpush

@section('content')
    <section class="w-full my-5">
        <div class="container flex justify-between gap-6 mx-auto">
            <div class="w-3/4 flex flex-col pb-2 border-b">
                <div class="flex justify-between items-center py-2 border-b-4 border-black">
                    <a href="#" class="flex justify-start items-center gap-4">
                        <i class="fa-solid fa-landmark fa-xl"></i>
                        <h3 class="text-2xl font-bold">জাতীয়</h3>
                    </a>
                    <a href="#" class="text-xl font-bold">
                        <i class="fa-solid fa-arrow-right ms-2 rounded-full border-2 border-black p-2"></i></span>
                    </a>
                </div>
                <div class="grid grid-cols-5 gap-4 mt-4">
                    <a href="#" class="group flex flex-col gap-3 rounded-md border">
                        <div class="w-full overflow-hidden">
                            <img class="w-full" src="{{asset('frontend/images/news2.webp')}}" alt="">
                        </div>
                        <div class="p-2">
                            <h2 class="text-2xl font-bold mb-4">এখনই বড় কর্মসূচিতে যাচ্ছে না বিএনপি</h2>
                            <p class="text-sm">৭ জানুয়ারির দ্বাদশ জাতীয় সংসদ নির্বাচনকে 'একতরফা' আখ্যা...</p>
                        </div>
                    </a>
                    <a href="#" class="group flex flex-col gap-3 rounded-md border">
                        <div class="w-full overflow-hidden">
                            <img class="w-full" src="{{asset('frontend/images/news3.webp')}}" alt="">
                        </div>
                        <div class="p-2">
                            <h2 class="text-2xl font-bold mb-4">এখনই বড় কর্মসূচিতে যাচ্ছে না বিএনপি</h2>
                            <p class="text-sm">৭ জানুয়ারির দ্বাদশ জাতীয় সংসদ নির্বাচনকে 'একতরফা' আখ্যা...</p>
                        </div>
                    </a>
                    <a href="#" class="group flex flex-col gap-3 rounded-md border">
                        <div class="w-full overflow-hidden">
                            <img class="w-full" src="{{asset('frontend/images/news4.webp')}}" alt="">
                        </div>
                        <div class="p-2">
                            <h2 class="text-2xl font-bold mb-4">এখনই বড় কর্মসূচিতে যাচ্ছে না বিএনপি</h2>
                            <p class="text-sm">৭ জানুয়ারির দ্বাদশ জাতীয় সংসদ নির্বাচনকে 'একতরফা' আখ্যা...</p>
                        </div>
                    </a>
                    <a href="#" class="group flex flex-col gap-3 rounded-md border">
                        <div class="w-full overflow-hidden">
                            <img class="w-full" src="{{asset('frontend/images/news5.webp')}}" alt="">
                        </div>
                        <div class="p-2">
                            <h2 class="text-2xl font-bold mb-4">এখনই বড় কর্মসূচিতে যাচ্ছে না বিএনপি</h2>
                            <p class="text-sm">৭ জানুয়ারির দ্বাদশ জাতীয় সংসদ নির্বাচনকে 'একতরফা' আখ্যা...</p>
                        </div>
                    </a>
                    <a href="#" class="group flex flex-col gap-3 rounded-md border">
                        <div class="w-full overflow-hidden">
                            <img class="w-full" src="{{asset('frontend/images/news6.webp')}}" alt="">
                        </div>
                        <div class="p-2">
                            <h2 class="text-2xl font-bold mb-4">এখনই বড় কর্মসূচিতে যাচ্ছে না বিএনপি</h2>
                            <p class="text-sm">৭ জানুয়ারির দ্বাদশ জাতীয় সংসদ নির্বাচনকে 'একতরফা' আখ্যা...</p>
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
