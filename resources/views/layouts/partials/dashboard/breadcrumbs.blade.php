<div class="flex justify-between items-center mb-6">
    <h4 class="text-slate-900 text-lg font-medium">@yield('header')</h4>

    <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
        <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500">Notun Khobor</a>
        <i class="bx bx-chevron-right text-lg flex-shrink-0 text-slate-400"></i>
        {{ $slot }}
    </div>
</div>