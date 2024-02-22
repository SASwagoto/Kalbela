<section class="w-full py-2 border-b border-t">
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <div class="footer_logo w-40">
                @if ($siteInfo->site_icon)
                <img class="w-full" src="{{asset('uploads/'.$siteInfo->site_logo)}}" alt="Logo">
                @else
                <img class="w-full" src="{{asset('frontend/images/notunkhobor.png')}}" alt="Logo">
                @endif
            </div>
            <div class="flex justify-end items-center gap-4 font-bold">
                <a href="{{route('homepage')}}}">
                    নতুন খবর
                </a>
                <a href="#">
                    গোপনীয়তার নীতি
                </a>
                <a href="">
                    শর্তাবলি
                </a>
                <a href="">
                    মন্তব্য প্রকাশের নীতিমালা
                </a>
                <a href="#">
                    বাংলা কনভার্টার
                </a>
                <a href="">
                    বিজ্ঞাপন
                </a>
                <a href="">
                    যোগাযোগ
                </a>
            </div>
        </div>
    </div>
</section>
<section class="py-5 border-b">
    <div class="container mx-auto">
        <div class="flex justify-between">
            <div class="w-1/2 pe-10">
                <h3 class="text-lg font-bold">সম্পাদক ও প্রকাশক : সন্তোষ শর্মা । বিভাগীয় প্রধান (অনলাইন): পলাশ মাহমুদ</h3>
                <p>{{$siteInfo->address}}</p>
            </div>
            <div class="w-1/2">
                <p>ফোন : {{$siteInfo->phone_a}}, {{$siteInfo->phone_b}} ।<br>
                    <p>ফ্যাক্স : {{$siteInfo->fax_a}}, {{$siteInfo->fax_b}} । ই-মেইল: {{$siteInfo->email}} <br>
                    বিজ্ঞাপন বিভাগ: ফোন: {{$siteInfo->adv_phone_a}}, {{$siteInfo->adv_phone_b}} । ই-মেইল: {{$siteInfo->adv_email}} <br>
                    সার্কুলেশন : ফোন: {{$siteInfo->mobile_a}}।</p>
            </div>
        </div>
    </div>
</section>
<section class="w-full py-5">
    <div class="container mx-auto">
        <div class="w-full flex justify-between items-center">
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
            <div class="flex justify-end gap-10">
                <div class=" flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-envelope-open fa-xl"></i>
                        <h2 class="text-xl font-bold">| নিউজলেটার</h2>
                    </div>
                    <p class="w-60">নতুন খবর থেকে প্রতিদিন মেইলে আপডেট পেতে সাবস্ক্রাইব করুন।</p>
                </div>
                <div class="flex flex-col justify-end gap-2">
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
    <div  class="container mx-auto flex justify-between">
        <p>স্বত্ব &copy; নতুন খবর মিডিয়া লিমিটেড {{bangla_date(time(), 'en', 'y')}}</p>
        <p>এই ওয়েবসাইটের কোনো লেখা, ছবি, ভিডিও অনুমতি ছাড়া ব্যবহার বেআইনি।</p>
    </div>
</footer>