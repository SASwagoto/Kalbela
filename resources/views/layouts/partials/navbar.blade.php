<section class="w-full py-3 top-0 bg-white non_sticky_nav drop-shadow-md border-b">
    <div class="container mx-auto flex justify-between font-bold px-20">
        <a href="#">
            <i class="fa-solid fa-home"></i>
        </a>
        <a href="#">
            সর্বশেষ
        </a>
        <a href="#">
            জাতীয়
        </a>
        <a href="#">
            রাজনীতি
        </a>
        <a href="#">
            সারাদেশ
        </a>
        <a href="#">
            বিশ্ব
        </a>
        <a href="#">
            বিনোদন
        </a>
        <a href="#">
            খেলা
        </a>
        <a href="#">
            বাণিজ্য
        </a>
        <a href="#">
            চাকরি
        </a>
        <a href="#">
            মতামত
        </a>
        <a href="#">
            ভিডিও
        </a>
        <a href="#">
            অডিও
        </a>
        <a href="#" class="megamenu">
            <i class="fa-solid fa-bars"></i>
        </a>
    </div>
</section>

<section class="w-full py-3 bg-white fixed hidden top-0 sticky_nav drop-shadow-md border-b">
    <div class="container mx-auto flex justify-between font-bold">
        <div class="flex justify-between gap-2">
            <a href="{{route('homepage')}}">
                <img class="w-6" src="{{asset('frontend/images/sitesym.webp')}}" alt="Site Icon">
            </a>
            <h4>| {{bangla_date(time(), 'en')}}</h4>
        </div>
        <a href="#">
            <i class="fa-solid fa-home"></i>
        </a>
        <a href="#">
            সর্বশেষ
        </a>
        <a href="#">
            জাতীয়
        </a>
        <a href="#">
            রাজনীতি
        </a>
        <a href="#">
            সারাদেশ
        </a>
        <a href="#">
            বিশ্ব
        </a>
        <a href="#">
            বিনোদন
        </a>
        <a href="#">
            খেলা
        </a>
        <a href="#">
            বাণিজ্য
        </a>
        <a href="#">
            চাকরি
        </a>
        <a href="#">
            মতামত
        </a>
        <a href="#">
            ভিডিও
        </a>
        <a href="#">
            অডিও
        </a>
        <div class="group">
            <a href="#" class="megamenubtn relative">
                <i class="fa-solid fa-bars"></i>
            </a>
            <div class="container absolute right-0 px-4 mx-auto border hidden group-hover:block duration-300 rounded-md bg-white z-50 shadow-xl">
                <div class="border-b w-full py-3 flex items-center">
                    <h3 class="text-lg font-semibold">{{banglaDay(date('D')).', '.bangla_date(time(), 'en').', '.bangla_date(time(), 'bn')}}</h3>
                </div>
                <div class="grid grid-cols-7 gap-3 my-2 font-semibold">
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                    <div class="text-start">বাংলাদেশ</div>
                </div>
                <div  class="w-full flex justify-center items-center gap-10 py-3 border-t font-semibold">
                    <a href="" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-video"></i>
                        ভিডিও স্টোরি
                    </a>
                    <a href="" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-camera-retro"></i>
                        ফটো স্টোরি
                    </a>
                    <a href="" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-images"></i>
                        ফটো গ্যালারি
                    </a>
                    <a href="" class="flex gap-4 text-lg">
                        <i class="fa-solid fa-film"></i>
                        ভিডিও গ্যালারি
                    </a>
                    <a href="" class="flex gap-4 text-lg">
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