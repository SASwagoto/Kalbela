<section class="w-full py-2 border-b border-t">
    <div class="md:container mx-10 md:mx-auto">
        <div class="flex no-scrollbar overflow-x-auto whitespace-nowrap justify-between wrap items-center">
            <div class="footer_logo w-40">
                @if ($siteInfo->site_logo)
                <img class="w-full" src="{{asset('uploads/'.$siteInfo->site_logo)}}" alt="Logo">
                @else
                <img class="w-full" src="{{asset('frontend/images/notunkhobor.png')}}" alt="Logo">
                @endif
            </div>
            <div class="flex justify-end items-center gap-4 font-bold">
                <a href="{{route('homepage')}}}">
                    নতুন খবর
                </a>
                @foreach ($pages as $page)
                <a href="{{route('pages.view',$page->slug)}}">
                    {{$page->page_title_b}}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="py-5 border-b">
    <div class="md:container mx-10 md:mx-auto">
        <div class="flex flex-col md:flex-row justify-center md:justify-between">
            <div class="w-full md:w-1/2 md:pe-10">
                <h3 class="text-lg font-bold">সম্পাদক ও প্রকাশক মোঃ সাদিকুর রহমান বকুল</h3>
                <span>{{$siteInfo->address}}</span>
            </div>
            <div class="w-full md:w-1/2 text-center md:text-end">
                <span>ফোন : {{$siteInfo->phone_a}}, {{$siteInfo->phone_b}} ।<br>
                    ফ্যাক্স : {{$siteInfo->fax_a}}, {{$siteInfo->fax_b}} । ই-মেইল: {{$siteInfo->email}} <br>
                    বিজ্ঞাপন বিভাগ: ফোন: {{$siteInfo->adv_phone_a}}, {{$siteInfo->adv_phone_b}} । ই-মেইল: {{$siteInfo->adv_email}} <br>
                    সার্কুলেশন : ফোন: {{$siteInfo->mobile_a}}।</span>
            </div>
        </div>
    </div>
</section>
<section class="w-full py-5">
    <div class="md:container mx-10 md:mx-auto">
        <div class="w-full flex flex-col md:flex-row justify-between gap-6">
            <div class="social_icon flex flex-col items-center gap-2">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-circle-nodes fa-xl"></i>
                    <h2 class="text-xl font-bold">| সোশ্যাল মিডিয়া</h2>
                </div>
                <div class="flex gap-2 items-center">
                    <a href="{{$siteInfo->fb_links}}">
                        <i class="fa-brands fa-square-facebook fa-2xl"></i>
                    </a>
                    <a href="{{$siteInfo->x_links}}">
                        <i class="fa-brands fa-square-x-twitter fa-2xl"></i>
                    </a>
                    <a href="{{$siteInfo->ln_links}}">
                        <i class="fa-brands fa-linkedin fa-2xl"></i>
                    </a>
                    <a href="{{$siteInfo->inst_links}}">
                        <i class="fa-brands fa-square-instagram fa-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="flex justify-between gap-4 md:gap-10">
                <div class="w-1/2 flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-envelope-open fa-xl"></i>
                        <h2 class="text-xl font-bold">| নিউজলেটার</h2>
                    </div>
                    <span class="md:w-60">নতুন খবর থেকে প্রতিদিন মেইলে আপডেট পেতে সাবস্ক্রাইব করুন।</span>
                </div>
                <div class="w-1/2 flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-mobile-screen-button fa-xl"></i>
                        <h2 class="text-xl font-bold">| মোবাইল এপস</h2>
                    </div>
                    <a href="#" class="flex items-center gap-4">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        অ্যান্ড্রয়েড
                    </a>
                    <a href="#" class="flex items-center gap-4">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        আইফোন
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="w-full py-5">
    <div  class="md:container mx-10 md:mx-auto flex flex-col-reverse md:flex-row justify-between">
        <span>স্বত্ব &copy; {{$siteInfo->copyright}} {{bangla_date(time(), 'en', 'y')}}</span>
        <span>{{$siteInfo->footer_credit}}</span>
    </div>
</footer>