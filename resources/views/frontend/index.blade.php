@extends('layouts.web')

@section('content')
   <section class="w-full mt-4">
      <div class="container mx-auto flex justify-between">
         <div class="w-2/4">
            <div class="headnews border rounded-md flex gap-2 p-2">
               <div class="w-3/5 overflow-hidden rounded-md">
                  <img class="w-full" src="{{asset('frontend/images/headnews.jpg')}}" alt="">
               </div>
               <div class="w-2/5">
                  <h2 class="font-bold text-3xl">ইমরান খানকে ঠেকাতে মরিয়া নওয়াজ, নিচ্ছেন নয়া কৌশল</h2>
                  <p class="mt-2 text-sm">পাকিস্তানে নির্বাচনে পিছিয়ে থেকেও এককভাবে সবচেয়ে বেশি আসন পাওয়ার দাবি করেছেন দেশটির সাবেক প্রধানমন্ত্রী ও পিএমএল (এন)-এর নেতা নওয়াজ..</p>
               </div>
            </div>
         </div>
         <div class="w-1/4"></div>
         <div class="w-1/4"></div>
      </div>
      
   </section>
@endsection