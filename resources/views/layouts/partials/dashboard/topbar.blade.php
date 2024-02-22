<header class="app-header flex items-center px-5 gap-4">

    <!-- Brand Logo -->
    <a href="index.html" class="logo-box">
        <img src="{{asset('backend')}}/assets/images/logo-sm.png" class="h-6" alt="Small logo">
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-toggle-menu" class="nav-link p-2 waves-effect me-auto">
        <span class="sr-only">Menu Toggle Button</span>
        <span class="flex items-center justify-center h-6 w-6">
            <i class="fa-solid fa-bars fa-xl"></i>
        </span>
    </button>

    <!-- Topbar Search -->
    <div class="md:flex hidden items-center relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <i class="fa-solid fa-search fa-xl"></i>
        </div>
        <input type="search" class="form-input px-8 rounded-full  bg-gray-500/10 border-transparent focus:border-transparent" placeholder="Search...">
        <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
            <i class="ph ph-microphone text-base hover:text-black"></i>
        </button>
    </div>

    <!-- Language Dropdown Button -->
    {{-- <div class="relative">
        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2 waves-effect fc-dropdown">
            <span class="flex items-center justify-center h-6 w-6">
                <img src="{{asset('backend')}}/assets/images/flags/us.jpg" alt="flags img" class="h-4 w-6">
            </span>
        </button>
        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 mt-3 transition-[margin,opacity] duration-300 bg-white shadow-lg border border-gray-200 rounded-lg p-2">
            <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                <img src="{{asset('backend')}}/assets/images/flags/germany.jpg" alt="flags img" class="h-4">
                <span class="align-middle">German</span>
            </a>
            <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                <img src="{{asset('backend')}}/assets/images/flags/italy.jpg" alt="flags img" class="h-4">
                <span class="align-middle">Italian</span>
            </a>
            <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                <img src="{{asset('backend')}}/assets/images/flags/spain.jpg" alt="flags img" class="h-4">
                <span class="align-middle">Spanish</span>
            </a>
            <a href="javascript:void(0);" class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100">
                <img src="{{asset('backend')}}/assets/images/flags/russia.jpg" alt="flags img" class="h-4">
                <span class="align-middle">Russian</span>
            </a>
        </div>
    </div> --}}

    <!-- Fullscreen Toggle Button -->
    <div class="md:flex hidden">
        <button data-toggle="fullscreen" type="button" class="nav-link p-2 waves-effect">
            <span class="sr-only">Fullscreen Mode</span>
            <span class="flex items-center justify-center h-6 w-6">
                <i class="fa-solid fa-maximize fa-xl"></i>
            </span>
        </button>
    </div>

    <!-- Profile Dropdown Button -->
    <div class="relative">
        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link flex items-center gap-2.5 waves-effect p-2">
            <img src="{{asset('backend')}}/assets/images/avater.jpg" alt="user-image" class="rounded-full h-8 w-8">
            <span class="md:flex items-center hidden">
                <span class="font-medium text-base">{{ Auth::user()->name }}</span>
                <i class='ph ph-chevron-down'></i>
            </span>
        </button>
        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 transition-[margin,opacity] duration-300 mt-2 bg-white shadow-lg border rounded-lg p-2">
            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="{{route('profile.edit')}}">
                Profile
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="javascript:void(0)" onclick="event.preventDefault();
                this.closest('form').submit();" class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100" href="#">
                    Log Out
                </a>
            </form>
        </div>
    </div>
</header>