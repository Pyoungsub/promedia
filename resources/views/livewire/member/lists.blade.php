<div class="">
    <x-headers.communications />
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16">
        <div class="container2 max-w-cont">
            <h4 class="tit4">회원사</h4>
            <div class="flex flex-wrap justify-end text-lg mb-9 tab:text-inhe 2sm:flex-nowrap">
                <div class="relative h-[3rem] ml-3 w-[20rem] max-lg:h-[2.5rem] tab:ml-1"
                    x-data="{
                        search:@entangle('search').defer
                    }"
                >
                    <input x-model="search" class="rounded-lg border-cc w-full h-full pr-[2rem] p-2 outline-none" placeholder="검색어를 입력하세요" type="search" @keyup.enter="$wire.memberSearch" />
                    <button @click="$wire.memberSearch" class="absolute right-0 inset-y-0 w-[2rem] text-center"><span class="align-middle text-point-100 material-symbols-rounded">search</span></button>
                </div>
            </div>
            <div class="mb-6">
                @if(count($partnerships))
                    <ul class="border-t-[3px] text-lg font-bold font-titleO tab:font-noto"
                        x-data="{
                            deletePartner(id)
                            {
                                if (confirm('회원사를 삭제하시겠습니까?')) {
                                    alert('회원사가 삭제 되었습니다.');
                                    $wire.delete(id);
                                } else {
                                    alert('회원사를 삭제하지 않습니다.');
                                }
                            }
                        }"
                    >
                        @foreach($partnerships as $partnership)
                            <li class="border-b border-cc">
                                <span class="py-[1.6rem] text-center flex flex-wrap max-lg:py-[1.3rem] tab:text-left tab:px-[0.5rem]">
                                    <span class="block text-xl w-[3rem] text-grizzle-800 max-lg:text-inhe tab:w-fit tab:mr-[0.5rem] tab:text-sm">{{ ($partnerships->currentPage() - 1) * $partnerships->perPage() + $loop->index + 1 }}</span>
                                    <span class=" block text-xl text-point-100 w-[10rem] border-x border-grizzle-300 max-lg:text-inhe max-lg:w-[9rem] tab:w-fit tab:border-x-0 tab:text-sm">{{ \Carbon\Carbon::parse($partnership->created_at)->format('Y.m.d') }}</span>
                                    <span class="relative block pl-[2rem] pr-[3rem] w-calcN text-left max-lg:w-calcN-lg tab:w-full tab:pl-0 tab:pr-[2.3rem] tab:mt-[0.5rem]">
                                        <div class="flex items-center gap-2">
                                            @if($partnership->url)
                                                <a href="{{ $partnership->url->url }}" target="_blank" class="block font-nanumS txtOver1 tab:font-noto tab:font-normal">{{ $partnership->name }}</a>
                                            @else
                                                <span class="block font-nanumS txtOver1 tab:font-noto tab:font-normal">{{ $partnership->name }}</span>
                                            @endif
                                            @auth
                                                @if(auth()->user()->admin)
                                                    <button class="font-normal text-sm" wire:click="modify({{$partnership->id}})">{{ __('수정') }}</button>
                                                    <button class="font-normal text-sm" @click="deletePartner({{$partnership->id}})">{{ __('삭제') }}</button>
                                                @endif
                                            @endauth
                                        </div>
                                        @if($partnership->url)
                                            <a href="{{ $partnership->url->url }}" target="_blank" class="absolute right-1 block material-symbols-rounded text-[2rem] top-1/2 translate-y-center text-grizzle-800">arrow_right_alt</a>
                                        @endif
                                    </span>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            @auth
                @if(auth()->user()->admin)
                    <div class="flex justify-end mb-3 text-grizzle-800 tab:mb-8">
                        <button class="ml-3 btn1" wire:click="addPartnership">회원사 추가</button>
                    </div>
                @endif
            @endauth
            {{ $partnerships->links() }}
        </div>
    </div>
    <div 
        class="" 
        x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.title.focus(), 250)"
    >
        <x-jet-dialog-modal wire:model="modifyModal">
            <x-slot name="title">
                <div class="flex items-center justify-between">
                    <h2>{{ __('회원사 수정') }}</h2>
                    <button wire:click="$toggle('modifyModal')" wire:loading.attr="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
            </x-slot>
            <x-slot name="content">
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class=""
                        x-data="{
                            consonants: @entangle('consonants')
                        }"
                    >
                        <x-jet-label for="name" value="{{ __('초성') }}" />
                        <select name="" class="p-2 border border-cc outline-point-400 block w-full" id="" wire:model.defer="consonant_id">
                            <template x-for="(consonant, index) in consonants" :key="consonant.id">
                                <option :value="consonant.id" x-text="consonant.consonant"></option>
                            </template>
                        </select>
                    </div>
                    <div class="">
                        <x-jet-label for="name" value="{{ __('신문사명') }}" />
                        <x-jet-input id="name" type="text" class="block w-full"
                            placeholder="{{ __('이름을 입력해주세요.') }}"
                            wire:model.defer="name"
                            wire:keydown.enter="logoutOtherBrowserSessions" />
                    </div>    
                </div>
                <x-jet-input-error for="name" class="mt-2" />
                <x-jet-label for="url" value="{{ __('URL') }}" class="mt-2" />
                <x-jet-input type="text" class="block w-full"
                    placeholder="{{ __('url 주소를 입력해주세요.') }}"
                    wire:model.defer="url"
                />
                <x-jet-input-error for="url" class="mt-2" />
                <div 
                    x-data="{
                        photoName: null, 
                        photoPreview: @entangle('photoPreview'),
                        deleteItem()
                        {
                            if (confirm('로고를 삭제하시겠습니까?')) {
                                alert('로고가 삭제 되었습니다.');
                                $wire.deleteLogo();
                            } else {
                                alert('로고를 삭제하지 않습니다.');
                            }
                        }
                    }"
                    class="mt-4"
                >
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                                wire:model="logo"
                                x-ref="logo"
                                x-on:change="
                                        photoName = $refs.logo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.logo.files[0]);
                                " />
                    <!-- Current Profile Photo -->
                    @if ($img_path)
                        <x-jet-label for="logo" value="{{ __('로고') }}" />
                        <div class="mt-2 aspect-[47/19]" x-show="! photoPreview">
                            <img src="{{ asset('storage/'.$img_path) }}" alt="{{ $name }}" class="object-cotain w-full h-full">
                        </div>
                    @endif
                    <!-- New Profile Photo Preview -->
                    <div class="mt-2 aspect-[47/19]" x-show="photoPreview" style="display: none;">
                        <span class="block w-full h-full bg-cover bg-no-repeat bg-center"
                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.logo.click()">
                        {{ __('사진선택') }}
                    </x-jet-secondary-button>

                    @if ($img_path)
                        <x-jet-secondary-button type="button" class="mt-2" @click="deleteItem()">
                            {{ __('사진삭제') }}
                        </x-jet-secondary-button>
                    @endif
                    <x-jet-input-error for="logo" class="mt-2" />
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-button class="ml-3"
                            wire:click="modified"
                            wire:loading.attr="disabled">
                    {{ __('수정') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
    <div 
        class="" 
        x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.title.focus(), 250)"
    >
        <x-jet-dialog-modal wire:model="addPartnershipModal">
            <x-slot name="title">
                <div class="flex items-center justify-between">
                    <h2>{{ __('회원사 추가') }}</h2>
                    <button wire:click="$toggle('addPartnershipModal')" wire:loading.attr="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
            </x-slot>
            <x-slot name="content">
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class=""
                        x-data="{
                            consonants: @entangle('consonants')
                        }"
                    >
                        <x-jet-label for="name" value="{{ __('초성') }}" />
                        <select name="" class="p-2 border border-cc outline-point-400 block w-full" id="" wire:model.defer="consonant_id">
                            <template x-for="(consonant, index) in consonants" :key="consonant.id">
                                <option :value="consonant.id" x-text="consonant.consonant"></option>
                            </template>
                        </select>
                        <x-jet-input-error for="consonant_id" class="mt-2" />
                    </div>
                    <div class="">
                        <x-jet-label for="name" value="{{ __('신문사명') }}" />
                        <x-jet-input id="name" type="text" class="block w-full"
                            placeholder="{{ __('이름을 입력해주세요.') }}"
                            wire:model.defer="name"
                            autocomplate="off"
                            wire:keydown.enter="logoutOtherBrowserSessions" />
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>
                </div>
                <x-jet-label for="url" value="{{ __('URL') }}" class="mt-2" />
                <x-jet-input-error for="url" class="mt-2" />
                <x-jet-input type="text" class="block w-full"
                    placeholder="{{ __('url 주소를 입력해주세요.') }}"
                    wire:model.defer="url"
                />
                <x-jet-input-error for="url" class="mt-2" />
                <div 
                    x-data="{
                        photoName: null, 
                        photoPreview: @entangle('photoPreview'),
                        deleteItem()
                        {
                            if (confirm('로고를 삭제하시겠습니까?')) {
                                alert('로고가 삭제 되었습니다.');
                                $wire.deleteLogo();
                            } else {
                                alert('로고를 삭제하지 않습니다.');
                            }
                        }
                    }"
                    class="mt-4"
                >
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                                wire:model="logo"
                                x-ref="logo"
                                x-on:change="
                                        photoName = $refs.logo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.logo.files[0]);
                                " />
                    <!-- Current Profile Photo -->
                    @if ($img_path)
                        <x-jet-label for="logo" value="{{ __('로고') }}" />
                        <div class="mt-2 aspect-[47/19]" x-show="! photoPreview">
                            <img src="{{ asset('storage/'.$img_path) }}" alt="{{ $name }}" class="object-cotain w-full h-full">
                        </div>
                    @endif
                    <!-- New Profile Photo Preview -->
                    <div class="mt-2 aspect-[47/19]" x-show="photoPreview" style="display: none;">
                        <span class="block w-full h-full bg-cover bg-no-repeat bg-center"
                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.logo.click()">
                        {{ __('사진선택') }}
                    </x-jet-secondary-button>

                    @if ($img_path)
                        <x-jet-secondary-button type="button" class="mt-2" @click="deleteItem()">
                            {{ __('사진삭제') }}
                        </x-jet-secondary-button>
                    @endif
                    <x-jet-input-error for="logo" class="mt-2" />
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-button class="ml-3"
                            wire:click="add"
                            wire:loading.attr="disabled">
                    {{ __('추가') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>