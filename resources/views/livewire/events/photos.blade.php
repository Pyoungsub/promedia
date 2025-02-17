<div class="">
    <div class="flex flex-wrap items-center h-[40rem] relative justify-center max-xl:h-[32rem] max-lg:h-[28rem] max-md:h-96 tab:h-80 mob:h-60 2sm:h-52 max-3sm:h-48 bg-center bg-no-repeat bg-cover bg-subbg8">
        <div class="text-center text-white mt-[-2em] tab:mt-0">
            <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto">행사사진</h3>
        </div>
    </div>
    <div class="pt-32 max-lg:pt-28 max-md:pt-24 tab:pt-20 2sm:pt-16">
        <h4 class="tit4">행사사진</h4>
        <div class="pt-24 pb-32 bg-grizzle-200 max-lg:pb-28 max-md:pb-24 tab:pb-20 2sm:pb-16">
            <div class="max-w-screen-xl container2 font-nanumS6"
                x-data="{
                    confirmDeletion(id) {
                        if (confirm('삭제하시겠습니까?')) {
                            $wire.deleteEvent(id);
                        }
                    }
                }"
            >
                @if(count($events) > 0)
                    <ul class="grid grid-cols-3 mb-16 gap-9 max-md:grid-cols-2 tab:gap-6 mob:grid-cols-1">
                        @foreach($events as $event)
                            <li class="relative group border border-cc hover:border-point-100 hover:outline-2 hover:outline-point-100 hover:outline-offset-0 hover:outline hover:bg-white">
                                @auth
                                    @if(auth()->user()->admin)
                                    <div class="absolute right-0">
                                        <button wire:click="saveMemories({{$event->id}})" class="p-2">수정</button>
                                        <button @click="confirmDeletion({{$event->id}})" class="p-2">삭제</button>
                                    </div>
                                    @endif
                                @endauth
                                <button wire:click="showMore({{$event->id}})" class="block py-11 px-[1.3rem] tracking-tighter max-lg:py-8 tab:py-6">
                                    <span class="mb-7 bg-bb h-[2px] w-8 block"></span>
                                    <span class="block txtOver2 font-bold text-2xl h-[4rem] mb-[1.5em] max-md:text-xl max-md:h-[3.5rem]">{{$event->title}}</span>
                                    <span class="flex items-center justify-between">
                                        <span class="block text-[1.2rem] max-md:text-base">{{ (new DateTime($event->date))->format('Y.m.d') }}</span>
                                        <svg class="w-12 max-md:w-10 fill-none group-hover:fill-[#00a1e4]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="#00a1e4" d="M12 2l9 4.9V17L12 22l-9-4.9V7z"/>
                                            <path class="stroke-[#00a1e4] group-hover:stroke-white" d="M8 12h8M13 9l3 3-3 3"/>
                                        </svg>
                                    </span>
                                </button>
                                <span class="block overflow-hidden w-full aspect-[9/5]">
                                    @if($event->first_event_photo)
                                        <img class="block object-cover w-full h-full" src="{{ asset('storage/'.$event->first_event_photo->img_path) }}" alt="{{$event->title}} 이미지"></span>
                                    @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
                @auth
                    @if(auth()->user()->admin)
                        <div class="flex justify-end mb-3 text-grizzle-800 tab:mb-8">
                            <button wire:click="saveMemories" class="ml-3 btn1">글쓰기</button>
                        </div>
                    @endif
                @endauth
                {{ $events->links() }}
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="saveMemory">
        <x-slot name="title">
            <div class="flex items-center justify-between">
                <h2>{{ $modal_title }}</h2>
                <button wire:click="$toggle('saveMemory')" wire:loading.attr="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-3 gap-2" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.title.focus(), 250)">
                <x-jet-input type="text" class="block w-full col-span-2"
                            placeholder="{{ __('제목을 입력해주세요') }}"
                            x-ref="title"
                            wire:model.defer="title"
                            wire:keydown.enter="logoutOtherBrowserSessions" />
                <x-jet-input type="date" class="block w-full"
                    placeholder="{{ __('날짜를 선택해주세요') }}"
                    x-ref="date"
                    wire:model.defer="date" />    
            </div>
            <div class="mt-4 h-64 grid place-items-center rounded-md border border-dashed">
                <input id="photos" class="hidden" type="file" wire:model="photos" x-ref="photos" multiple>
                <div class="w-full h-full mt-4 flex items-center overflow-x-scroll gap-2 p-2">
                    @foreach($photos as $photo)
                        <div class="border flex-none h-full aspect-[9/5] bg-cover bg-center relative" style="background-image: url({{ $photo->temporaryUrl() }})">
                            <button type="button" class="absolute top-0 right-0 border border-black bg-white" wire:click.prevent="removeImg({{$loop->index}})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                    @endforeach
                    @if(count($event_photos) > 0)
                        @foreach($event_photos as $photo)
                            <div class="border flex-none h-full aspect-[9/5] bg-cover bg-center relative" style="background-image: url({{ asset('storage/'.$photo->img_path) }})">
                                <button type="button" class="absolute top-0 right-0 border border-black bg-white" wire:click.prevent="deleteImg({{$photo->id}})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <button class="w-full text-gray-500 bg-gray-50 hover:bg-white" x-on:click.prevent="$refs.photos.click()">사진을 추가해 주세요</button>
            </div>
            <x-jet-input-error for="title" class="mt-2" />
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="ml-3"
                        wire:click="submit"
                        wire:loading.attr="disabled">
                {{ __('작성') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
    @if($selected_event)
        <x-jet-dialog-modal wire:model="photosModal" maxWidth="3xl">
            <x-slot name="title">
                {{ $selected_event->title }}
            </x-slot>
            <x-slot name="content">
                <div 
                    wire:ignore
                    class=""
                    x-data="{
                        swiper:null,
                        selected_photos:@entangle('selected_photos'),
                    }"
                    x-init="
                        swiper = new Swiper($refs.event_photo, {
                            spaceBetween: 30,
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                        });
                        $watch('selected_photos', value => {
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
                            <template x-for="(photo, index) in selected_photos" :key="index">
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
</div>
