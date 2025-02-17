<<<<<<< HEAD
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
=======
<div 
    id="m_banner" 
    class="relative overflow-hidden"
    wire:ignore
    x-data="{swiper:null}"
    x-init="
        swiper = new Swiper($refs.container, {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
        });
    "
>
    <div x-ref="container" class="mb_swiper">
        <div id="m_banner_ul" class="text-white swiper-wrapper">
            @if(count($carousels) > 0)
                @foreach($carousels as $carousel)
                    <div class="swiper-slide h-[47.3rem] bg-center bg-cover bg-no-repeat 2xl:h-2xlcalc max-md:h-[35rem] mob:h-[30rem]" style="background-image: url({{ asset('storage/'. $carousel->img_path) }});"
                        
                    >
                        @auth
                            @if(auth()->user()->admin)
                                <div class="absolute p-2 top-0 right-0 flex items-center gap-2"
                                    x-data="{
                                        deleteCarousel()
                                        {
                                            alert('해당 캐로셀을 삭제합니다.');
                                            if (confirm('삭제하시겠습니까?')) {
                                                $wire.delete({{ $carousel->id }})
                                                alert('삭제했습니다.');
                                            } else {
                                                alert('삭제하지 않습니다.');
                                            }
                                        }
                                    }"
                                >
                                    <button class="p-2 border rounded" wire:click="modify({{$carousel->id}})">{{ __('수정') }}</button>
                                    <button class="p-2 border rounded" @click="deleteCarousel">{{ __('삭제') }}</button>
                                </div>
                            @endif
                        @endauth
                        <span class="container block h-full max-md:bg-[rgba(6,40,75,0.3)]">
                            <span class="bg-right bg-cover bg-no-repeat h-full flex justify-center w-100 pl-[38%] flex-col max-xl:bg-full max-md:pl-0 max-md:text-center max-md:bg-none"  style="background-image: url({{ asset('storage/company/main_banner_bg_01_02.png') }});">
                            <span class="font-titleO text-[5rem] mb-[0.4em] pt-[1em] 2xl:text-[4rem] w-full block drop-shadow max-md:pt-0 tab:text-[3.5rem] mob:text-[2.8rem]">{{ $carousel->title }}</span>
                            <span class="max-w-3xl font-score text-[1.6rem] pl-[2rem] leading-[1.5] 2xl:text-[1.5rem] max-xl:pl-0 tab:text-[1.3rem] mob:text-[1.15rem]">{{ $carousel->sub_title }}</span>
                            </span>
                        </span>
                    </div>
                @endforeach
            @else
                <div class="swiper-slide h-[47.3rem] bg-center bg-cover bg-no-repeat 2xl:h-2xlcalc max-md:h-[35rem] mob:h-[30rem]" style="background-image: url({{ asset('storage/company/main_banner_bg_01.jpg') }});">
                    <span class="container block  h-full max-md:bg-[rgba(6,40,75,0.3)]">
                        <span class="bg-right bg-cover bg-no-repeat h-full flex justify-center w-100 pl-[38%] flex-col max-xl:bg-full max-md:pl-0 max-md:text-center max-md:bg-none"  style="background-image: url({{ asset('storage/company/main_banner_bg_01_02.png') }});">
                        <span class="font-titleO text-[5rem] mb-[0.4em] pt-[1em] 2xl:text-[4rem] w-full block drop-shadow max-md:pt-0 tab:text-[3.5rem] mob:text-[2.8rem]">“산업발전의 든든한 동반자”</span>
                        <span class="max-w-3xl font-score text-[1.6rem] pl-[2rem] leading-[1.5] 2xl:text-[1.5rem] max-xl:pl-0 tab:text-[1.3rem] mob:text-[1.15rem]">협회는 우리 전문신문들이 정보의 홍수 속에서 독자들에게 신뢰성 있는 정보를 제공하고 산업발전의 든든한 동반자로서 사회를 선도하는 매체가 될 수 있도록 지원하고 함께 나아가겠습니다.</span>
                        </span>
                    </span>
                </div>
            @endif
        </div>
        <div class="m_banner_btn_wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    @auth
        @if(auth()->user()->admin)
            <div class="absolute top-0 left-0 z-10 p-2">
                <button class="border bg-white p-2 rounded" wire:click="carousel">캐로셀 추가</button>
            </div>
            <x-jet-dialog-modal wire:model="addCarousel">
                <x-slot name="title">
                    {{ __('캐로셀 추가') }}
                </x-slot>
                <x-slot name="content">
                    <div x-data="{photoName: null, photoPreview: @entangle('photoPreview').defer}" class="">
                        <!-- Profile Photo File Input -->
                        <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />
                        <x-jet-label for="photo" value="{{ __('사진') }}" class="mt-2" />
                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block w-full aspect-video bg-center bg-cover bg-no-repeat"
                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                        </div>
                        <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                            {{ __('사진선택') }}
                        </x-jet-secondary-button>
                        <x-jet-input-error for="photo" class="mt-2" />
                    </div>
                    <x-jet-label class="mt-4" for="title" value="제목" />
                    <input id="title" type="text" wire:model.defer="title" class="mt-2 w-full p-2 border border-cc outline-point-400" />
                    
                    <x-jet-label for="sub_title" value="부제목" class="mt-4" />
                    <input id="sub_title" type="text" wire:model.defer="sub_title" class="mt-2 w-full p-2 border border-cc outline-point-400" />
                </x-slot>
                <x-slot name="footer">
                    <x-jet-secondary-button wire:click="$set('addCarousel', false)" wire:loading.attr="disabled">
                        {{ __('취소') }}
                    </x-jet-secondary-button>
                    <x-jet-button class="ml-2" wire:click="save" wire:loading.attr="disabled">
                        {{ __('등록') }}
                    </x-jet-button>
                </x-slot>
            </x-jet-dialog-modal>
        @endif
    @endauth
</div>
>>>>>>> bc662e7 (modified code)
