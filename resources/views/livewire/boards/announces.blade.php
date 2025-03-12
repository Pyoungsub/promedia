<div>
    <x-headers.communications />
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16"
        x-data="{
            modify:false,
            title:$wire.entangle('title').defer,
            content:$wire.entangle('description').defer,
            delete()
            {

            }
        }"
    >
        <h4 class="tit4">공지사항</h4>
        <div class="container2 max-w-cont ">
            <div class="flex flex-wrap items-end justify-between text-[2.5rem] pb-[1em] mt-[4em] max-lg:text-[2rem] max-lg:px-4 max-md:pb-4 max-md:mt-[3.5em] mob:text-[1.5rem] 2sm:mt-[2em] max-3sm:px-0">
                <h3 x-show="!modify" class="tracking-tight w-calc11 pr-[1em] max-md:w-full "><strong x-text="title"></strong></h3>
                <input type="text" class="text-3xl tracking-tight w-calc11 pr-[1em] max-md:w-full" x-show="modify" x-model="title">
                <div class="text-right w-30 text-[1.1rem] max-lg:text-base max-md:w-full max-md:flex max-md:justify-between max-md:mt-3">
                    @auth
                        @if(auth()->user()->admin)
                            <button class="mb-2" wire:click="showPopup">팝업</button>
                            <div x-show="!modify" class="mb-2 text-cc max-lg:mb-0 max-md:order-2"><button @click="modify = true" class="mr-2 cursor-pointer hover:text-grizzle-800"><span class="align-middle material-symbols-rounded text-[1em]">edit_square</span>수정</button><button @click="if(confirm('공지사항을 삭제하시겠습니까?')) { $wire.delete(); }" class="cursor-pointer hover:text-point-200"><span class="align-middle material-symbols-rounded text-[1em]">delete</span>삭제</button></div>
                            <div x-show="modify" class="mb-2 text-cc max-lg:mb-0 max-md:order-2"><button @click="$wire.modify(title, content);$nextTick(() => { modify = false; });" class="mr-2 cursor-pointer hover:text-grizzle-800"><span class="align-middle material-symbols-rounded text-[1em]">edit_square</span>수정</button><button class="cursor-pointer hover:text-point-200" @click="modify = false"><span class="align-middle material-symbols-rounded text-[1em]">close</span>{{ __('취소') }}</button></div>
                        @endif
                    @endauth
                    <span class="block max-md:order-1 max-md:text-grizzle-800 2sm:text-sm">{{ date('Y.m.d', strtotime($announce->created_at)) }}</span>
                </div>
            </div>
            @if($announce->announcementFile)
                <a href="{{ asset('storage/'. $announce->announcementFile->file_path) }}" class="block w-fit mb-4 rounded-lg px-4 py-2 bg-blue-700 text-white" download>첨부자료 내려받기</a>
            @endif
            <div class="leading-[1.5] border-t-[2px] border-b border-b-cc text-[17px] tab:text-base mob:font-noto">
                <div x-show="!modify" class=" py-[4em] px-[2em] max-lg:px-[1em] max-lg:py-[3em] mob:py-[2em] max-3sm:px-0 max-3sm:py-[1em]">
                    {!! nl2br($description) !!}
                </div>
                <textarea 
                    x-show="modify" 
                    name="" 
                    id="" 
                    x-ref="test"
                    x-model="content"
                    rows="30"
                    class="w-full rounded resize-none"
                ></textarea>
            </div>
            <div class="flex flex-wrap items-center justify-between mt-20 text-[17px] max-md:mt-8">
                <div class="w-calc12 max-md:w-fit">
                    @if($previousAnnounce)
                        <a href="{{ route('boards.announces', ['id' => $previousAnnounce->id]) }}">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl"><span class="align-middle material-symbols-rounded">chevron_left</span>PREV</span>
                            <span class="block txtOver1 max-md:hidden">{{ $previousAnnounce->title }}</span>
                        </a>
                    @else
                        <span class="text-gray-400">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl"><span class="align-middle material-symbols-rounded">chevron_left</span>PREV</span>
                            <span class="block txtOver1 max-md:hidden">처음 자료입니다.</span>
                        </span>
                    @endif
                </div>
                <div class="w-20 h-20 overflow-hidden duration-500 rounded-full bg-point-100 hover:bg-point-300 max-md:h-14 max-md:w-14 mob:w-11 mob:h-11">
                    <a class="flex flex-col items-center justify-center w-full h-full" href="{{route('boards.announcements')}}">
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-0"></span>
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-[4px]"></span>
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-0"></span>
                    </a>
                </div>
                <div class="text-right w-calc12 max-md:w-fit">
                    @if($nextAnnounce)
                        <a href="{{ route('boards.announces', ['id' => $nextAnnounce->id]) }}">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl">NEXT<span class="align-middle material-symbols-rounded">chevron_right</span></span>
                            <span class="block txtOver1 max-md:hidden">{{ $nextAnnounce->title }}</span>
                        </a>
                    @else
                        <span class="text-gray-400">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl">NEXT<span class="align-middle material-symbols-rounded">chevron_right</span></span>
                            <span class="block txtOver1 max-md:hidden">마지막 자료입니다.</span>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="announcePopupModal" maxWidth="xl">
        <x-slot name="title">
            <div class="flex items-center justify-between">
                <h2>{{ __('팝업 추가') }}</h2>
                <button wire:click="$toggle('announcePopupModal')" wire:loading.attr="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
        </x-slot>
        <x-slot name="content">
            <x-jet-label for="date" value="{{__('팝업 종료 일')}}" />
            <x-jet-input id="date" wire:model="end_date" type="date" class="block w-full"/>
            <x-jet-input-error for="end_date" class="mt-2" />
            <div x-data="{photoName: null, photoPreview: null}" class="">
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
                
                <!-- Current Profile Photo -->
                @if($announce->announcementModal)
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{ asset('storage/'.$announce->announcementModal->img_path) }}" alt="{{ $announce->title }}" class=" w-full aspect-[5/7] object-cover">
                    </div>
                @endif
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-full aspect-[5/7] bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>
                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('사진선택') }}
                </x-jet-secondary-button>    
                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="ml-3"
                        wire:click="save"
                        wire:loading.attr="disabled">
                {{ __('작성') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
