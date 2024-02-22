<section class="w-full py-4 top-0 z-50 bg-white non_sticky_nav drop-shadow-md border-b">
    <div class="container mx-auto flex justify-between font-bold px-20">
        <a href="{{route('homepage')}}">
            <i class="fa-solid fa-home"></i>
        </a>
        <a class="hover:text-blue-700 border-b-2 border-white hover:border-blue-700 focus:text-blue-700 focus:border-blue-700" href="{{route('allNews')}}">
            সর্বশেষ
        </a>
        @foreach ($primaryMenu as $item)
        <a class="hover:text-blue-700 border-b-2 border-white hover:border-blue-700 focus:text-blue-700 focus:border-blue-700" href="{{route('newsBy', $item->slug)}}">
            {{$item->ban_name}}
        </a>
        @endforeach
        
        <div class="group px-4">
            <a href="#" class="megamenu">
                <i class="fa-solid fa-bars"></i>
            </a>

            <div class="container absolute right-0 left-0 px-4 mx-auto border hidden group-hover:block rounded-md bg-white z-50 shadow-xl">
                <div class="border-b w-full py-3 flex items-center">
                    <h3 class="text-lg font-semibold">{{banglaDay(date('D')).', '.bangla_date(time(), 'en').', '.bangla_date(time(), 'bn')}}</h3>
                </div>
                <div class="grid grid-cols-7 gap-3 my-2 font-semibold">
                    @foreach ($menu as $item)
                    <a href="{{route('newsBy', $item->slug)}}" class="text-start hover:text-blue-700">{{$item->ban_name}}</a>
                    @endforeach
                </div>
                <div  class="w-full flex justify-center items-center gap-10 py-3 border-t font-semibold">
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-video"></i>
                        ভিডিও স্টোরি
                    </a>
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-camera-retro"></i>
                        ফটো স্টোরি
                    </a>
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-images"></i>
                        ফটো গ্যালারি
                    </a>
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-film"></i>
                        ভিডিও গ্যালারি
                    </a>
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-brands fa-soundcloud"></i>
                        অডিও
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full py-3 bg-white fixed hidden top-0 z-50 sticky_nav drop-shadow-md border-b">
    <div class="container mx-auto flex justify-between font-bold">
        <div class="flex justify-between items-center gap-2">
            <a href="{{route('homepage')}}">
                @if ($siteInfo->site_logo)
            <img class="w-24" src="{{asset('uploads/'.$siteInfo->site_logo)}}" alt="Logo">
            @else
            <img class="w-24" src="{{asset('frontend/images/notunkhobor.png')}}" alt="Logo">
            @endif
            </a>
            <h4>| {{bangla_date(time(), 'en')}}</h4>
        </div>
        <a href="{{route('homepage')}}">
            <i class="fa-solid fa-home"></i>
        </a>
        <a href="{{route('allNews')}}">
            সর্বশেষ
        </a>
        @foreach ($primaryMenu as $item)
        <a href="{{route('newsBy', $item->slug)}}">
            {{$item->ban_name}}
        </a>
        @endforeach
        <div class="group px-4">
            <a href="#" class="megamenu">
                <i class="fa-solid fa-bars"></i>
            </a>
            <div class="container absolute right-0 left-0 px-4 mx-auto border hidden group-hover:block rounded-md bg-white z-50 shadow-xl">
                <div class="border-b w-full py-3 flex items-center">
                    <h3 class="text-lg font-semibold">{{banglaDay(date('D')).', '.bangla_date(time(), 'en').', '.bangla_date(time(), 'bn')}}</h3>
                </div>
                <div class="grid grid-cols-7 gap-3 my-2 font-semibold">
                    @foreach ($menu as $item)
                    <a href="{{route('newsBy', $item->slug)}}" class="text-start">{{$item->ban_name}}</a>
                    @endforeach
                </div>
                <div  class="w-full flex justify-center items-center gap-10 py-3 border-t font-semibold">
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-video"></i>
                        ভিডিও স্টোরি
                    </a>
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-camera-retro"></i>
                        ফটো স্টোরি
                    </a>
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-images"></i>
                        ফটো গ্যালারি
                    </a>
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-film"></i>
                        ভিডিও গ্যালারি
                    </a>
                    <a href="#" class="flex gap-4 text-lg">
                        <i class="fa-brands fa-soundcloud"></i>
                        অডিও
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="megamenu absolute w-full">
    
    
</section> --}}