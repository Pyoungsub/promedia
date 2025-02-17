<!--div class="py-[10rem] max-xl:py-[7rem] max-lg:py-[5rem] bg-mainsec3 bg-cover bg-no-repeat bg-center">
    <h3 class="tit1 mb-[1em]">
        <span>협회 행사사진</span>
    </h3>
    <div 
        class="container"
        x-data="{swiper:null}"
        x-init="
            swiper = new Swiper($refs.events, {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.slick-next',
                    prevEl: '.slick-prev',
                },
                loop: false,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });
        "
    >
        <div class="list_slide1_tab flex justify-end mb-[2.8rem] tab:justify-between tab:mb-4">
            <div class="relative flex mr-8 arrowWrap max-lg:mr-4 tab:order-last">
                <button class="slick-prev" type="button"></button>
                <button class="slick-next" type="button"></button>
            </div>
            <a href="{{ route('events.photos') }}" class="moreBtn">View more</a>
        </div>
        <div class="">
            <div class="swiper" x-ref="events">
                <div wire:ignore class="swiper-wrapper">
                    @foreach($events as $event)
                        <div class="swiper-slide">
                            <div class="relative duration-500 border-2 border-transparent w-calc4 mr-mcalc4 hover:border-point-100 hover:shadow-md w-full">
                                <button wire:click="showMore({{$event->id}})" class="w-full block bg-grizzle-200">
                                    <span class="block overflow-hidden h-[240px] max-xl:h-[200px]"><img class="block object-cover w-full h-full" src="@if($event->first_event_photo) {{ asset('storage/'.$event->first_event_photo->img_path) }} @endif" alt="협회 행사 썸네일 1"></span>
                                    <span class="block py-8 px-[1.3rem] tracking-tighter">
                                        <span class="block text-[1.2rem] mb-[1.5em] max-xl:text-[1.1rem] max-xl:mb-[1em]">{{ \Carbon\Carbon::parse($event->date)->format('Y.m.d') }}</span>
                                        <span class="block txtOver2 font-bold text-2xl max-xl:text-xl max-xl:h-[3.5rem] mb-[3em] h-16 2xl:mb-[2em]">{{$event->title}}</span>
                                        <span class="moreBtn3">VIEW MORE<span class="material-symbols-rounded">arrow_right_alt</span></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>      
        </div>
    </div>
    @if($selected_event)
        <x-jet-dialog-modal wire:model="photosModal" maxWidth="3xl">
            <x-slot name="title">
                {{ $selected_event->title }} {{ $selected_event->id }}
            </x-slot>
            <x-slot name="content">
                <div 
                    wire:ignore
                    class=""
                    x-data="{
                        swiper:null,
                        photos:@entangle('photos'),
                    }"
                    x-init="
                        swiper = new Swiper($refs.event_photo, {
                            spaceBetween: 30,
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                        });
                        $watch('photos', value => {
                            swiper.destroy();
                            swiper = new Swiper($refs.event_photo, {
                                pagination: {
                                    el: '.swiper-pagination',
                                    dynamicBullets: true,
                                },
                            });
                        });
                    "
                >
                    <div x-ref="event_photo" class="swiper">
                        <div class="text-white swiper-wrapper">
                            <template x-for="(photo, index) in photos" :key="index">
                                <div class="swiper-slide">
                                    <div class="bg-center bg-cover bg-no-repeat w-full aspect-video" :style="`background-image: url( {{ asset('storage') }}/${photo})`"></div>
                                </div>
                            </template>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('photosModal', false)" wire:loading.attr="disabled">
                    {{ __('닫기') }}
                </x-jet-secondary-button>
            </x-slot>
        </x-jet-dialog-modal>
    @endif
</div-->