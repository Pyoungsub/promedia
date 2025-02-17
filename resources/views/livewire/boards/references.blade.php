<div class="">
    <x-headers.boards />
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16">
        <div class="container2 max-w-cont">
            <h4 class="tit4">자료실</h4>
            <div class="flex flex-wrap justify-end text-lg mb-9 tab:text-inhe 2sm:flex-nowrap">
                <div class="h-[3rem] px-2 w-[9rem] max-lg:h-[2.5rem] tab:w-[7rem]">
                    <select class="rounded-lg border-cc w-full h-full outline-none cursor-pointer" name="search_section" id="search_section" title="검색 분류">
                        <option value="">제목</option>
                        <option value="p_sec_1">제목+내용</option>
                    </select>
                </div>
                <div class="relative h-[3rem] ml-3 w-[20rem] max-lg:h-[2.5rem] tab:ml-1">
                    <input class="rounded-lg border-cc w-full h-full pr-[2rem] p-2 outline-none" placeholder="검색어를 입력하세요" type="search" value="">
                    <button class="absolute right-0 inset-y-0 w-[2rem] text-center"><span class="align-middle text-point-100 material-symbols-rounded">search</span></button>
                </div>
            </div>
            <div class="mb-6">
                @if(count($references))
                    <ul class="border-t-[3px] text-lg	font-bold font-titleO tab:font-noto">
                        @foreach($references as $reference)
                            <li class="border-b border-cc">
                                <a href="{{route('boards.articles', ['id' => $reference->id])}}" class="py-[1.6rem] text-center flex flex-wrap max-lg:py-[1.3rem] tab:text-left tab:px-[0.5rem]">
                                <span class="block text-xl w-[3rem] text-grizzle-800 max-lg:text-inhe tab:w-fit tab:mr-[0.5rem] tab:text-sm">{{ $reference->id }}</span>
                                <span class=" block text-xl text-point-100 w-[10rem] border-x border-grizzle-300 max-lg:text-inhe max-lg:w-[9rem] tab:w-fit tab:border-x-0 tab:text-sm">{{ \Carbon\Carbon::parse($reference->created_at)->format('Y.m.d') }}</span>
                                <span class="relative block pl-[2rem] pr-[3rem] w-calcN text-left max-lg:w-calcN-lg tab:w-full tab:pl-0 tab:pr-[2.3rem] tab:mt-[0.5rem]">
                                    <span class="block font-nanumS txtOver1 tab:font-noto tab:font-normal">{{ $reference->title }}</span>
                                    <span class="absolute right-1 block material-symbols-rounded text-[2rem] top-1/2 translate-y-center text-grizzle-800">arrow_right_alt</span>
                                </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            @auth
                @if(auth()->user()->admin)
                    <div class="flex justify-end mb-3 text-grizzle-800 tab:mb-8">
                        <button class="ml-3 btn1" wire:click="writeArticle">글쓰기</button>
                    </div>
                @endif
            @endauth
            {{ $references->links() }}
        </div>
    </div>
    <div 
        class="" 
        x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.title.focus(), 250)"
    >
        <x-jet-dialog-modal wire:model="writeArticleModal">
            <x-slot name="title">
                <div class="flex items-center justify-between">
                    <h2>{{ __('자료 추가') }}</h2>
                    <button wire:click="$toggle('writeArticleModal')" wire:loading.attr="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                </div>
            </x-slot>
            <x-slot name="content">
                <x-jet-input type="text" class="block w-full"
                    placeholder="{{ __('제목을 입력해주세요') }}"
                    wire:model.defer="title"
                    wire:keydown.enter="logoutOtherBrowserSessions" />
                <x-jet-input type="file" 
                    class="block w-full border mt-4 p-2
                        text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100" 
                    wire:model="file"
                />
                <textarea wire:model.defer="description" type="text" rows="10" class="mt-4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-full resize-none" placeholder="자료를 설명해해주세요."></textarea>
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
</div>
