@extends('layouts.admin')

@push('css')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/DataTables/datatables.min.css')}}" />
<style>
  select[name="example_length"]{
    width: 70px;
  }
</style>
@endpush

@section('content')
@component('layouts.partials.dashboard.breadcrumbs')
    @section('header')
        All Pages
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="fa-solid fa-angle-right text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Pages</a>
@endcomponent

<section class="w-full flex flex-col gap-2">
    <div class="w-full flex justify-end gap-2">
        <a href="{{route('page.create')}}" class="py-2 px-4 bg-blue-700 rounded-md text-white">Add New Page <i class="fa-solid fa-add text-white ms-2"></i></a>
        <a href="#" class="py-2 px-4 bg-blue-700 rounded-md text-white">Trash <i class="fa-solid fa-trash text-white ms-2"></i></a>
    </div>
    <div class="w-full border p-4 rounded-md bg-gray-100">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Title Bangla</th>
                    <th>Title English</th>
                    <th>Slug</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $key => $page)
                <tr class="group">
                    <td>{{$key+1}}</td>
                    <td>{{$page->page_title_b}}</td>
                    <td>{{$page->page_title_e}}</td>
                    <td>{{$page->slug}}</td>
                    <td>{{$page->created_at}}</td>
                    <td>
                        <div class="flex justify-end gap-2">
                            <a href="{{route('page.edit', $page->slug)}}" class="text-blue-700"><i class="fa-solid fa-pencil fa-lg"></i></a>
                            <form action="{{route('page.delete', $page->slug)}}" id="deleteForm{{$key}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteForm({{$key}});" class="text-red-600"><i class="fa-solid fa-trash fa-lg"></i></button>
                            </form>
                        </div>
                    </td>
               </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</section>

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('backend/assets/plugins/DataTables/datatables.min.js')}}"></script>
    <script>
       new DataTable('#example', {
            columnDefs: [
                {
                    targets: [0],
                    orderData: [0, 1]
                },
                {
                    targets: [1],
                    orderData: [1, 0]
                },
                {
                    targets: [4],
                    orderData: [4, 0]
                }
            ]
        });
    </script>
    <script>
        function deleteForm(key)
        {
            new Swal({
                title: 'Are You Sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                    if (result.isConfirmed) {
                        $('#deleteForm'+key).submit();
                    }
                });
        }
    </script>
@endpush