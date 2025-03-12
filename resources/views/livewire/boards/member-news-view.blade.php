<div>
    <x-headers.communications />
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16"
        x-data="{
            modify:false,
            title:$wire.entangle('title').defer,
            froala_editor_content:$wire.entangle('froala_editor_content').defer,
        }"
    >
        <h4 class="tit4">회원사 소식</h4>
        <div class="container2 max-w-cont ">
            <div class="flex flex-wrap items-end justify-between text-[2.5rem] pb-[1em] mt-[4em] max-lg:text-[2rem] max-lg:px-4 max-md:pb-4 max-md:mt-[3.5em] mob:text-[1.5rem] 2sm:mt-[2em] max-3sm:px-0">
                <h3 x-show="!modify" class="tracking-tight w-calc11 pr-[1em] max-md:w-full "><strong x-text="title"></strong></h3>
                <input type="text" class="text-3xl tracking-tight w-calc11 pr-[1em] max-md:w-full" x-show="modify" x-model="title">
                <div class="text-right w-30 text-[1.1rem] max-lg:text-base max-md:w-full max-md:flex max-md:justify-between max-md:mt-3">
                    @auth
                        @if(auth()->user()->admin)
                            <div x-show="!modify" class="mb-2 text-cc max-lg:mb-0 max-md:order-2">
                                <button @click="modify = true" class="mr-2 cursor-pointer hover:text-grizzle-800"><span class="align-middle material-symbols-rounded text-[1em]">edit_square</span>수정</button>
                                <button @click="if(confirm('회원사 소식을 삭제하시겠습니까?')) { $wire.delete(); }" class="cursor-pointer hover:text-point-200"><span class="align-middle material-symbols-rounded text-[1em]">delete</span>삭제</button>
                            </div>
                            <div x-show="modify" class="mb-2 text-cc max-lg:mb-0 max-md:order-2"><button @click="$wire.modify;$nextTick(() => { modify = false; });" class="mr-2 cursor-pointer hover:text-grizzle-800"><span class="align-middle material-symbols-rounded text-[1em]">edit_square</span>수정</button><button class="cursor-pointer hover:text-point-200" @click="modify = false"><span class="align-middle material-symbols-rounded text-[1em]">close</span>{{ __('취소') }}</button></div>
                        @endif
                    @endauth
                    <span class="block max-md:order-1 max-md:text-grizzle-800 2sm:text-sm">{{ date('Y.m.d', strtotime($member_news->created_at)) }}</span>
                </div>
            </div>
            <div class="leading-[1.5] border-t-[2px] border-b border-b-cc text-[17px] tab:text-base mob:font-noto">
                <div x-show="!modify" class="max-w-5xl mx-auto py-16 px-8 lg:px-4 lg:py-12 py-8 sm:px-0 sm:py-4">
                    {!! nl2br($content) !!}
                </div>
                <div class="" x-show="modify">
                    <x-froala-editor id="froala_editor_content" model="froala_editor_content" path="/board/store-image" />
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-between mt-20 text-[17px] max-md:mt-8">
                <div class="w-calc12 max-md:w-fit">
                    @if($previous_member_news)
                        <a href="{{ route('boards.member-news-view', ['id' => $previous_member_news->id]) }}">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl"><span class="align-middle material-symbols-rounded">chevron_left</span>PREV</span>
                            <span class="block txtOver1 max-md:hidden">{{ $previous_member_news->title }}</span>
                        </a>
                    @else
                        <span class="text-gray-400">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl"><span class="align-middle material-symbols-rounded">chevron_left</span>PREV</span>
                            <span class="block txtOver1 max-md:hidden">처음 자료입니다.</span>
                        </span>
                    @endif
                </div>
                <div class="w-20 h-20 overflow-hidden duration-500 rounded-full bg-point-100 hover:bg-point-300 max-md:h-14 max-md:w-14 mob:w-11 mob:h-11">
                    <a class="flex flex-col items-center justify-center w-full h-full" href="{{route('boards.member-news')}}">
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-0"></span>
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-[4px]"></span>
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-0"></span>
                    </a>
                </div>
                <div class="text-right w-calc12 max-md:w-fit">
                    @if($next_member_news)
                        <a href="{{ route('boards.member-news-view', ['id' => $next_member_news->id]) }}">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl">NEXT<span class="align-middle material-symbols-rounded">chevron_right</span></span>
                            <span class="block txtOver1 max-md:hidden">{{ $next_member_news->title }}</span>
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
</div>
