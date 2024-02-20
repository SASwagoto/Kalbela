@extends('layouts.admin')

@push('css')

@endpush

@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
    @section('header')
        Settings
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Settings</a>
@endcomponent



@endsection

@push('js')

@endpush