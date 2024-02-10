@extends('layouts.web')

@section('content')
   <section class="w-full mt-4 h-[900px]">
      <div class="container mx-auto flex justify-center gap-2">
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
         <div class="w-1/4">
            <div class="flex flex-col gap-2">
               <div class="rounded-md flex flex-col gap-1 p-2 border">
                  <div class="rounded-md overflow-hidden">
                     <img class="w-full" src="{{asset('frontend/images/news1.webp')}}" alt="">
                  </div>
                  <div class="mt-1">
                     <h3 class="text-xl font-bold">'শীতলক্ষ্যা ধ্বংসে পরিবেশ অধিদপ্তরও জড়িত'</h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="w-1/4"></div>
      </div>
      
   </section>
@endsection