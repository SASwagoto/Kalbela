<div class="flex items-center gap-2 py-2 border-b-2 border-red-700">
    <i class="fa-solid fa-earth-oceania fa-xl"></i>
    <h3 class="text-xl font-bold">সর্বশেষ</h3>
</div>
<div class="h-[550px] flex flex-col overflow-y-scroll">
    @forelse ($latestNews as $key => $item)
    <a href="{{ route('singleNews', ['category' => $item->cslug, 'slug' => $item->nslug]) }}" class="py-3 border-b flex justify-start gap-4">
        <h4 class="px-3 my-auto flex items-center rounded-full bg-gray-400 text-gray-600 text-xl font-bold">{{$key+1}}</h4>
        <h1 class="text-xl font-bold pe-10">{{$item->headline}}</h1>
    </a>
    @empty
        <h4 class="text-center text-lg font-bold">কোন খবর নেই</h4>
    @endforelse
    
 
</div>
<div class="flex justify-center mt-2">
    <a href="{{route('allNews')}}" class="w-full border py-2 bg-gray-400 text-gray-600 rounded-md text-center font-bold text-2xl">
        সর্বশেষ সব খবর
    </a>
</div>