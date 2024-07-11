<div id="m_sec4" class="pt-[10rem] max-xl:pt-[7rem] max-lg:pt-[5rem]">
    <h3 class="tit1 mb-[1.2em]">
        <span>회원사 소개</span>
    </h3>
    <div class="max-w-3xl mx-auto">
        <div
            wire:ignore 
            class="flex items-center justify-between gap-4"
            x-data="{swiper:null}"
            x-init="
                swiper = new Swiper($refs.container, {
                    slidesPerView: 6,
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.next',
                        prevEl: '.prev',
                    },
                    loop: true,
                    breakpoints: {
                        640: {
                            slidesPerView: 8,
                            spaceBetween: 20,
                        },
                        768: {
                        slidesPerView: 9,
                        spaceBetween: 40,
                        },
                        1024: {
                        slidesPerView: 10,
                        spaceBetween: 30,
                        },
                    },
                });
            "
        >
            <button class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H6M12 5l-7 7 7 7"/></svg></button>
            <div class="swiper" x-ref="container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @foreach($consonants as $consonant)
                        <div class="swiper-slide"><button class="bg-white border-[#ccc] border flex items-center justify-center w-[2.1em] h-[2.1em] rounded-full duration-500 cursor-pointer text-[1.25rem] hover:border-point" wire:click="changeConsonant({{$consonant->id}})">{{$consonant->consonant}}</button></div>
                    @endforeach
                </div>

                <!-- If we need navigation buttons -->
                

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
            <button class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h13M12 5l7 7-7 7"/></svg></button>
        </div>
    </div>
    <div class="container2 mt-8">
        <div class="mb-[5.6rem] f-clear max-lg:mb-16 text-center">
            @foreach($partnerships as $partnership)
                <div class="inline-block duration-500 border border-transparent border-2 m-[10px] w-[272px] h-[112px] hover:border-point max-xl:w-calc10 max-xl:h-[97px] max-lg:h-[72px] max-md:w-calc4 overflow-hidden"><a href="" class="block w-full h-full"><img class="w-full h-full" src="{{asset('storage/partnership/'.$partnership->img_path)}}" alt="배너이름1"></a></div>
            @endforeach
        </div>
    </div>
</div>