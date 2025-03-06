<div class="">
    <x-headers.communications />
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16">
        <div class="container2 max-w-cont">
            <h4 class="tit4">보도자료</h4>
            <div class="flex flex-wrap justify-end text-lg mb-9 tab:text-inhe 2sm:flex-nowrap"
                x-data="{
                    search:@entangle('search').defer,
                    sort:@entangle('sort').defer
                }"
            >
                <div class="relative h-[3rem] ml-3 w-[20rem] max-lg:h-[2.5rem] tab:ml-1">
                    <input x-model="search" class="rounded-lg border-cc w-full h-full pr-[2rem] p-2 outline-none" placeholder="검색어를 입력하세요" type="search" @keyup.enter="$wire.mediaSearch" />
                    <button @click="$wire.mediaSearch" class="absolute right-0 inset-y-0 w-[2rem] text-center"><span class="align-middle text-point-100 material-symbols-rounded">search</span></button>
                </div>
            </div>
            <div class="mb-6">
                @if(count($medias))
                    <ul class="border-t-[3px] text-lg	font-bold font-titleO tab:font-noto">
                        @foreach($medias as $media)
                            <li class="border-b border-cc">
                                <div class="py-[1.6rem] text-center flex flex-wrap max-lg:py-[1.3rem] tab:text-left tab:px-[0.5rem]">
                                    <span class="block text-xl w-[3rem] text-grizzle-800 max-lg:text-inhe tab:w-fit tab:mr-[0.5rem] tab:text-sm">{{ ($medias->currentPage() - 1) * $medias->perPage() + $loop->index + 1 }}</span>
                                    <span class="block text-xl text-point-100 w-[10rem] border-x border-grizzle-300 max-lg:text-inhe max-lg:w-[9rem] tab:w-fit tab:border-x-0 tab:text-sm">{{ \Carbon\Carbon::parse($media->created_at)->format('Y.m.d') }}</span>
                                    <span class="relative block pl-[2rem] pr-[3rem] w-calcN text-left max-lg:w-calcN-lg tab:w-full tab:pl-0 tab:pr-[2.3rem] tab:mt-[0.5rem]">
                                        <a target="_blank" href="{{ $media->url }}" class="font-nanumS tab:font-noto tab:font-normal max-w-fit">{{ $media->title }}</a>
                                        @auth
                                            @if(auth()->user()->admin)
                                                <button wire:click="deleteMedia({{$media->id}})" class="text-xs font-medium">삭제</button>
                                            @endif
                                        @endauth
                                        <a target="_blank" href="{{ $media->url }}" class="absolute right-1 block material-symbols-rounded text-[2rem] top-1/2 translate-y-center text-grizzle-800">arrow_right_alt</a>
                                    </span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            @auth
                @if(auth()->user()->admin)
                    <div class="flex justify-end mb-3 text-grizzle-800 tab:mb-8">
                        <button class="ml-3 btn1" wire:click="writeMedia">보도자료 추가</button>
                    </div>
                @endif
            @endauth
            {{ $medias->links() }}
        </div>
    </div>
    <div 
        class="" 
        x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.title.focus(), 250)"
    >
        <x-jet-dialog-modal wire:model="writeMediaModal">
            <x-slot name="title">
                <div class="flex items-center justify-between">
                    <h2>{{ __('보도자료 추가') }}</h2>
                    <button wire:click="$toggle('writeMediaModal')" wire:loading.attr="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
            </x-slot>
            <x-slot name="content">
                <div x-data="{photoName: null, photoPreview: null}" class="">
                    <x-jet-input type="text" class="block w-full"
                        placeholder="{{ __('제목을 입력해주세요') }}"
                        wire:model.defer="title"
                        wire:keydown.enter="logoutOtherBrowserSessions" 
                    />
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
                        "
                    />
                    <x-jet-input type="text" class="mt-2 block w-full"
                        placeholder="{{ __('관련기사 링크를 적어주세요.') }}"
                        wire:model.defer="url"
                    />
                    <x-jet-input-error for="url" class="mt-2" />
                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="block rounded-lg w-full aspect-video bg-cover bg-no-repeat bg-center"
                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('대표화면을 선택해주세요') }}
                    </x-jet-secondary-button>
                    <x-jet-input-error for="photo" class="mt-2" />
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-button class="ml-3"
                            wire:click="save"
                            wire:loading.attr="disabled">
                    {{ __('추가') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>