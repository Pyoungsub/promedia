<div>
    <div class="flex flex-wrap items-center h-[40rem] relative justify-center max-xl:h-[32rem] max-lg:h-[28rem] max-md:h-96 tab:h-80 mob:h-60 2sm:h-52 max-3sm:h-48 bg-center bg-no-repeat bg-cover bg-subbg9">
        <div class="text-center text-white mt-[-2em] tab:mt-0">
            <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto">자료실</h3>
        </div>
    </div>
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16">
        <h4 class="tit4">자료실</h4>
        <div class="container2 max-w-cont ">
            <div class="flex flex-wrap items-end justify-between text-[2.5rem] pb-[1em] mt-[4em] max-lg:text-[2rem] max-lg:px-4 max-md:pb-4 max-md:mt-[3.5em] mob:text-[1.5rem] 2sm:mt-[2em] max-3sm:px-0">
                <h3 class="tracking-tight	w-calc11 pr-[1em] max-md:w-full "><strong>{{ $article->title }}</strong></h3>
                <div class="text-right w-30 text-[1.1rem] max-lg:text-base max-md:w-full max-md:flex max-md:justify-between max-md:mt-3">
                    @auth
                        @if(auth()->user()->admin)
                            <div class="mb-2 text-cc max-lg:mb-0 max-md:order-2">
                                {{--<button class="mr-2 cursor-pointer hover:text-grizzle-800"><span class="align-middle material-symbols-rounded text-[1em]">edit_square</span>수정</button>--}}
                                <button wire:click="delete" class="cursor-pointer hover:text-point-200"><span class="align-middle material-symbols-rounded text-[1em]">delete</span>삭제</button>
                            </div>
                        @endif
                    @endauth
                    <span class="block max-md:order-1 max-md:text-grizzle-800 2sm:text-sm">2024.06.20</span>
                </div>
            </div>
            <div class="leading-[1.5] border-t-[2px] border-b border-b-cc text-[17px] tab:text-base mob:font-noto">
                <!-- 첨부파일이존재할 경우 -->
                 @if($article->file_path)
                    <div class=" py-[1.8em] px-[2em] flex border-b border-cc max-lg:px-[1em] max-lg:py-[1.3em] mob:py-[1em] max-3sm:px-0 max-3sm:text-sm">
                        <span class="mr-8 font-bold"><span class="mr-2 align-middle text-point-100 material-symbols-rounded mob:text-[1.5em]">upload_file</span>첨부파일</span>
                        <ul class="underline text-grizzle-800 ">
                            <li><button wire:click="download">{{ str_replace( 'references/', '', $article->file_path) }}</button></li>
                        </ul>
                    </div>
                @endif
                <div class=" py-[4em] px-[2em] max-lg:px-[1em] max-lg:py-[3em] mob:py-[2em] max-3sm:px-0 max-3sm:py-[1em]">
                    {!! $article->description !!}
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-between mt-20 text-[17px] max-md:mt-8">
                <div class="w-calc12 max-md:w-fit">
                    @if($previousReference)
                        <a href="{{ route('boards.articles', ['id' => $previousReference->id]) }}">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl"><span class="align-middle material-symbols-rounded">chevron_left</span>PREV</span>
                            <span class="block txtOver1 max-md:hidden">{{ $previousReference->title }}</span>
                        </a>
                    @else
                        <span class="text-gray-400">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl"><span class="align-middle material-symbols-rounded">chevron_left</span>PREV</span>
                            <span class="block txtOver1 max-md:hidden">처음 자료입니다.</span>
                        </span>
                    @endif
                </div>
                <div class="w-20 h-20 overflow-hidden duration-500 rounded-full bg-point-100 hover:bg-point-300 max-md:h-14 max-md:w-14 mob:w-11 mob:h-11">
                    <a class="flex flex-col items-center justify-center w-full h-full" href="{{route('boards.references')}}">
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-0"></span>
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-[4px]"></span>
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-0"></span>
                    </a>
                </div>
                <div class="text-right w-calc12 max-md:w-fit">
                    @if($nextReference)
                        <a href="{{ route('boards.articles', ['id' => $nextReference->id]) }}">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl">NEXT<span class="align-middle material-symbols-rounded">chevron_right</span></span>
                            <span class="block txtOver1 max-md:hidden">{{ $nextReference->title }}</span>
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
