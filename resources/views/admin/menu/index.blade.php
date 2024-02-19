@extends('layouts.admin')

@push('css')

@endpush

@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
@section('header')
    Primary Menu
@endsection
<a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
<i class="fa-solid fa-angle-right text-slate-400"></i>
<a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Primary Menu</a>
@endcomponent
<section class="w-full">
    <div class="flex justify-between items-center gap-5">
        <div class="w-1/2 flex flex-col gap-2 border p-2 rounded-md">
            <div class="border-b text-center">Select to Add Menu</div>
            @forelse ($all as $item)
            <button class="py-1 px-4 border rounded-md hover:bg-green-200">{{$item->ban_name}}</button>
            @empty
                <span>No Data Available</span>
            @endforelse
        </div>
        <div class="w-1/2 flex flex-col gap-2 border p-2 rounded-md">
            <div class="border-b text-center">Primary Menu List</div>
            @forelse ($menus as $menu)
            <button class="py-1 px-4 border rounded-md hover:bg-green-200">{{$menu->ban_name}}</button>
            @empty
                <span>No Data Available</span>
            @endforelse
        </div>
    </div>
</section>

@endsection

@push('js')
    
@endpush