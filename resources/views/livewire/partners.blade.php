<div id="m_sec4" class="py-[5rem]">
    <h3 class="tit1 mb-[1.2em]">
        <span>한국전문신문협회 회원사</span>
    </h3>
    <div 
        class="container2"
        x-data="{
            swiper: null,
            selected_consonant_id: @entangle('selected_consonant_id'),
            consonants: @entangle('consonants')
        }"
        x-init="
            swiper = new Swiper($refs.partners, {
                slidesPerView: 6,
                navigation: {
                    nextEl: '.partner_next',
                    prevEl: '.partner_prev',
                },
                loop: false, // Enable loop mode
                breakpoints: {
                    640: {
                        slidesPerView: 8,
                    },
                    768: {
                        slidesPerView: 9,
                    },
                    1024: {
                        slidesPerView: 10,
                    },
                },
            });

            // Reinitialize Swiper when consonants change
            $watch('consonants', (newConsonants) => {
                swiper.update();      // Update swiper instance
            });
        "
    >
        <div class="flex justify-center max-w-[1150px] mx-auto mb-[5.6rem] max-lg:mb-10 gap-10" wire:ignore >
            <button class="partner_prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7"/>
                </svg>
            </button>
            <div class="swiper" x-ref="partners">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <template x-for="(consonant, index) in consonants" :key="consonant.id">
                        <div class="swiper-slide">
                            <button 
                                class="border flex items-center justify-center w-[2.1em] h-[2.1em] rounded-full duration-500 text-[1.25rem] hover:border-point"
                                :class="consonant.id === selected_consonant_id ? 'bg-point-100 border-point-100 text-white' : 'bg-white border-cc'"
                                @click="$wire.changeConsonant(consonant.id)"
                                x-text="consonant.consonant">
                            </button>
                        </div>
                    </template>
                </div>
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
            <button class="partner_next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h13M12 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
        <div class="grid grid-cols-4 gap-6 max-w-[1150px] mx-auto max-lg:gap-4 max-md:grid-cols-3 mob:grid-cols-2">
            @foreach($consonant_partnerships as $consonant_partnership)
                <div class="duration-500 border border-transparent border-2 aspect-[47/19] hover:border-point-100">
                    @if($consonant_partnership->partnership->url)
                    <a href="{{ $consonant_partnership->partnership->url->url }}" class="block w-full h-full" target="_blank">
                        <img class="object-cotain w-full h-full" src="{{asset('storage/'.$consonant_partnership->partnership->img_path)}}" alt="{{ $consonant_partnership->partnership->name }}">
                    </a>
                    @endif
                </div>
            @endforeach
        </div>
        @if ($consonant_partnerships->hasMorePages())
            <div class="mt-8 flex justify-center">
                <button wire:click="loadMore" class="bg-transparent border-bb leading-[3.5] w-[14em] rounded-[1.7em] moreBtn hover:bg-point-100 hover:font-white">View more<span class="material-symbols-rounded">arrow_right_alt</span></button>            
            </div>
        @endif
        <div wire:loading wire:target="loadMore">
            Loading...
        </div>
    </div>
</div>