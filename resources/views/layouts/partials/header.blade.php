<header class="w-full mt-3 border sm:relative">
    <div class="md:container md:mx-auto py-2 mx-10 flex items-center justify-between">
        <a href="{{route('homepage')}}" class="logo">
            @if ($siteInfo->site_logo)
            <img class="w-40 md:w-60" src="{{asset('uploads/'.$siteInfo->site_logo)}}" alt="Logo">
            @else
            <img class="w-40 md:w-60" src="{{asset('frontend/images/notunkhobor.png')}}" alt="Logo">
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
        <div class="block md:hidden">
            <a href="#" id="megamenuToggle">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
    <div id="megamenu" class="w-full md:hidden lg:hidden px-4 py-4 absolute left-0 bg-white z-50 hidden">
        <form action="#" method="GET" class="search flex justify-center items-center mt-2">
            <input type="text" class="w-[90%] rounded-l-lg">
            <button type="submit" class="w-[10%] bg-red-600 text-white p-[9px] rounded-r-lg"><i class="fas fa-search"></i></button>
        </form>
        <div class="grid grid-cols-2 gap-4 px-10 my-5">
            @foreach ($menu as $item)
                <a href="{{route('newsBy', $item->slug)}}" class="text-start hover:text-blue-700 font-bold border-b">{{$item->ban_name}}</a>
            @endforeach
        </div>
        <div class="grid grid-cols-2 gap-4">
            <a href="#" class="flex gap-4 text-lg border-b font-bold">
                <i class="fa-solid fa-video"></i>
                ভিডিও স্টোরি
            </a>
            <a href="#" class="flex gap-4 text-lg border-b font-bold">
                <i class="fa-solid fa-camera-retro"></i>
                ফটো স্টোরি
            </a>
            <a href="#" class="flex gap-4 text-lg border-b font-bold">
                <i class="fa-solid fa-images"></i>
                ফটো গ্যালারি
            </a>
            <a href="#" class="flex gap-4 text-lg border-b font-bold">
                <i class="fa-solid fa-film"></i>
                ভিডিও গ্যালারি
            </a>
            <a href="#" class="flex gap-4 text-lg border-b font-bold">
                <i class="fa-brands fa-soundcloud"></i>
                অডিও
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const megamenuToggle = document.getElementById("megamenuToggle");
        const megamenu = document.getElementById("megamenu");

        let isToggled = false;

        megamenuToggle.addEventListener("click", function (e) {
            e.preventDefault();
            megamenu.classList.toggle("hidden");
            toggleButtonIcon();
        });

        function toggleButtonIcon() {
                if (isToggled) {
                    megamenuToggle.innerHTML = '<i class="fas fa-bars"></i>'; // Change to bars icon
                } else {
                    megamenuToggle.innerHTML = '<i class="fas fa-times"></i>'; // Change to times icon
                }
                // Toggle the flag value
                isToggled = !isToggled;
            }
    });
</script>
