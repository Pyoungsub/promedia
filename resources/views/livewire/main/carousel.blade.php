@push('scripts')
    <!-- jQuery 2.2.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endpush
<div id="m_banner" class="h-[47.3rem] relative overflow-hidden 2xl:h-2xlcalc">
    <div id="m_banner_ul" class="text-white banner_ul">
        <div class="banner_li h-[47.3rem] bg-center bg-cover bg-no-repeat 2xl:h-2xlcalc max-md:after:content-[''] max-md:after:block" style="background-image: url({{asset('storage/carousel/main_banner_bg_01.jpg')}})">
            <span class="container h-full">
            <span class="bg-right bg-cover bg-no-repeat h-full flex justify-center w-100 pl-[38%] flex-col max-xl:bg-full max-md:pl-0 max-md:text-center max-md:bg-none "  style="background-image: url({{asset('storage/carousel/main_banner_bg_01_02.png')}}">
                <span class="font-titleO text-[5rem] mb-[0.4em] pt-[1em] 2xl:text-[4rem] w-full block">“산업발전의 든든한 동반자”</span>
                <span class="font-score text-[1.6rem] pl-[2rem] leading-[1.5]  2xl:text-[1.5rem] max-xl:pl-0">협회는 우리 전문신문들이 정보의 홍수 속에서 독자들에게 <br>신뢰성 있는 정보를 제공하고 산업발전의 든든한 동반자로서 <br>사회를 선도하는 매체가 될 수 있도록 지원하고 함께 나아가겠습니다.</span>
            </span>
            </span>
        </div>
        <div class="banner_li h-[47.3rem] bg-center bg-cover bg-no-repeat 2xl:h-2xlcalc" style="background-image: url({{asset('storage/carousel/main_banner_bg_02.jpg')}}">
            <span class="container h-full">
            <span class="bg-right bg-cover bg-no-repeat h-full flex justify-center w-100 pl-[38%] flex-col max-xl:bg-full"  style="background-image: url({{asset('storage/carousel/main_banner_bg_01_02.png')}})">
                <span class="font-titleO text-[5rem] mb-[0.4em] pt-[1em]  2xl:text-[4rem] w-full block">“산업발전의 든든한 동반자”</span>
                <span class="font-score text-[1.6rem] pl-[2rem] leading-[1.5]  2xl:text-[1.5rem]">내용1</span>
            </span>
            </span>
        </div>
        <div class="banner_li h-[47.3rem] bg-center bg-cover bg-no-repeat 2xl:h-2xlcalc" style="background-image: url({{asset('storage/carousel/main_banner_bg_03.jpg')}})">
            <a href="" class="container h-full">
            <span class="bg-right bg-cover bg-no-repeat h-full flex justify-center w-100 pl-[38%] flex-col max-xl:bg-full"  style="background-image: url({{asset('storage/carousel/main_banner_bg_01_02.png')}})">
                <span class="font-titleO text-[5rem] mb-[0.4em] pt-[1em]  2xl:text-[4rem] w-full block">“산업발전의 든든한 동반자”</span>
                <span class="font-score text-[1.6rem] pl-[2rem] leading-[1.5]  2xl:text-[1.5rem]">내용2</span>
            </span>
            </a>
        </div>
        <div class="banner_li h-[47.3rem] bg-center bg-cover bg-no-repeat 2xl:h-2xlcalc" style="background-image: url({{asset('storage/carousel/main_banner_bg_04.jpg')}})">
            <span class="container h-full">
            <span class="bg-right bg-cover bg-no-repeat h-full flex justify-center w-100 pl-[38%] flex-col max-xl:bg-full"  style="background-image: url({{asset('storage/carousel/main_banner_bg_01_02.png')}})">
                <span class="font-titleO text-[5rem] mb-[0.4em] pt-[1em]  2xl:text-[4rem] w-full block">“산업발전의 든든한 동반자”</span>
                <span class="font-score text-[1.6rem] pl-[2rem] leading-[1.5]  2xl:text-[1.5rem]">내용3</span>
            </span>
            </span>
        </div>
        <div class="banner_li h-[47.3rem] bg-center bg-cover bg-no-repeat 2xl:h-2xlcalc" style="background-image: url({{asset('storage/carousel/main_banner_bg_05.jpg')}})">
            <span class="container h-full">
            <span class="bg-right bg-cover bg-no-repeat h-full flex justify-center w-100 pl-[38%] flex-col max-xl:bg-full"  style="background-image: url({{asset('storage/carousel/main_banner_bg_01_02.png')}})">
                <span class="font-titleO text-[5rem] mb-[0.4em] pt-[1em]  2xl:text-[4rem] w-full block">“산업발전의 든든한 동반자”</span>
                <span class="font-score text-[1.6rem] pl-[2rem] leading-[1.5]  2xl:text-[1.5rem]">내용4</span>
            </span>
            </span>
        </div>
    </div>
    <div class="m_banner_btn_wrap"></div>
</div>
@push('scripts-bottom')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endpush
