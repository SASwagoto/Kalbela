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
        Category
    @endsection
    <a href="{{route('dashboard')}}" class="text-sm font-medium text-slate-500" aria-current="page">Dashboard</a>
    <i class="bx bx-chevron-right text-lg flex-shrink-0 text-slate-400"></i>
    <a href="javascript:void(0)" class="text-sm font-medium text-slate-700" aria-current="page">Categories</a>
@endcomponent

<section class="w-full flex justify-between gap-10">
    <div class="w-2/5 border p-4 rounded-md bg-gray-100">
        <form class="flex flex-col gap-4" action="#">
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="eng_name">Category Name <span>&#40;English&#41;</span></label>
                <div class="w-3/4">
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="eng_name" placeholder="Politics">
                    <span class="text-sm">The name is how it appears on your site.</span>
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="ban_name">Category Name <span>&#40;Bangla&#41;</span></label>
                <div class="w-3/4">
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="ban_name" placeholder="রাজনীতি">
                    <span class="text-sm">এই নামটি সাইটে প্রদর্শিত হবে।</span>
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="ban_name">Slug</label>
                <div class="w-3/4">
                    <input type="text" class="w-full mb-1 form-input rounded-md bg-gray-100" name="slug" placeholder="polistics">
                    <span class="text-sm">The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</span>
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="ban_name">Parent Category</label>
                <div class="w-3/4">
                    <select class="w-full mb-1 form-input rounded-md bg-gray-100" name="parent_id" id="">
                        <option value="">None</option>
                        <option value="1">Abc</option>
                        <option value="2">Bcd</option>
                        <option value="3">Cab</option>
                    </select>
                    <span class="text-sm">Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</span>
                </div>
            </div>
            <div class="flex justify-start items-start gap-2">
                <label class="w-1/4 mt-2 text-nowrap texl-lg" for="ban_name">Description</label>
                <div class="w-3/4">
                    <textarea class="w-full mb-1 form-input rounded-md bg-gray-100" name="description" id="" rows="4"></textarea>
                    <span class="text-sm">The description is not prominent by default; however, some themes may show it.</span>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="py-2 px-6 rounded-md bg-blue-800 text-white text-lg font-bold">Submit</button>
            </div>
        </form>
    </div>

    <div class="w-3/5 border p-4 rounded-md bg-gray-100">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Parent</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>320800</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@endsection

@push('js')
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
@endpush