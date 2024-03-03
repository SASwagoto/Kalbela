<header class="w-full mt-3 border">
    <div class="container mx-auto py-2 flex items-center md:justify-between justify-center">
        <a href="{{route('homepage')}}" class="logo">
            @if ($siteInfo->site_logo)
            <img class="max-w-60" src="{{asset('uploads/'.$siteInfo->site_logo)}}" alt="Logo">
            @else
            <img class="max-w-60" src="{{asset('frontend/images/notunkhobor.png')}}" alt="Logo">
            @endif
        </a>
        <div class="menu hidden md:flex justify-center gap-4">
            <a class="font-bold" href="#">
                <i class="fa-solid fa-table-list text-lg me-2"></i>
                আজকের পত্রিকা
            </a>
            <a class="font-bold" href="#">
                <i class="fa-solid fa-newspaper text-lg me-2"></i>
                ই-পেপার
            </a>
            <a class="font-bold" href="#">
                <i class="fa-solid fa-book text-lg me-2"></i>
                ম্যাগাজিন
            </a>
            <a class="font-bold" href="#">
                <i class="fa-solid fa-box-archive text-lg me-2"></i>
                আর্কাইভ
            </a>
            <a class="font-bold" href="#">
                <i class="fa-solid fa-thumbs-up text-lg me-2"></i>
                সোশ্যাল মিডিয়া
            </a>
            <a class="font-bold" href="#">
                <i class="fa-solid fa-language text-lg me-2"></i>
                বাংলা কনভার্টার
            </a>
        </div>
        <div class="social_icon hidden md:flex justify-end gap-4">
            <a href="#" class="border rounded-full py-1 px-2 bg-gray-300">
                <i class="fa-solid fa-search"></i>
            </a>
            <a href="#" class="border rounded-full py-1 px-2 bg-gray-300">
                <i class="fa-solid fa-bell"></i>
            </a>
        </div>
    </div>
</header>