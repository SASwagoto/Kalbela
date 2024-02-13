@extends('layouts.admin')



@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
    @section('header')
    Dashboard
    @endsection
    <a href="#" class="text-sm font-medium text-slate-700" aria-current="page">Dashboard</a>
@endcomponent


@endsection