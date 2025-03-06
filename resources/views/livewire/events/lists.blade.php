<div class="">
    <div class="flex flex-wrap items-center h-[40rem] relative justify-center max-xl:h-[32rem] max-lg:h-[28rem] max-md:h-96 tab:h-80 mob:h-60 2sm:h-52 max-3sm:h-48 bg-center bg-no-repeat bg-cover bg-subbg9">
        <div class="text-center text-white mt-[-2em] tab:mt-0">
            <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto">행사일정</h3>
        </div>
    </div>
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16">
        <div class="container2 max-w-cont">
            <h4 class="tit4">행사일정</h4>
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
                <ul class="border-t-[3px] text-lg	font-bold font-titleO tab:font-noto">
                    @foreach($schedules as $index => $schedule)
                        <li class="border-b border-cc">
                            <a href="{{ route('events.details', ['id' => $schedule->id]) }}" class="py-[1.6rem] text-center flex flex-wrap max-lg:py-[1.3rem] tab:text-left tab:px-[0.5rem]">
                                <span class="block text-xl w-[3rem] text-grizzle-800 max-lg:text-inhe tab:w-fit tab:mr-[0.5rem] tab:text-sm">{{ ($schedules->currentPage() - 1) * $schedules->perPage() + $loop->index + 1 }}</span>
                                <span class=" block text-xl text-point-100 w-[10rem] border-x border-grizzle-300 max-lg:text-inhe max-lg:w-[9rem] tab:w-fit tab:border-x-0 tab:text-sm">{{ date('Y.m.d', strtotime($schedule->effective_date)) }}</span>
                                <span class="relative block pl-[2rem] pr-[3rem] w-calcN text-left max-lg:w-calcN-lg tab:w-full tab:pl-0 tab:pr-[2.3rem] tab:mt-[0.5rem]">
                                    <span class="block font-nanumS txtOver1 tab:font-noto tab:font-normal"><!--span class="inline-block text-white bg-point-100 px-[0.8rem] mr-1 rounded-[1rem] tab:text-sm">공지</span-->{{ $schedule->name }}</span>
                                    <span class="absolute right-1 block material-symbols-rounded text-[2rem] top-1/2 translate-y-center text-grizzle-800">arrow_right_alt</span>
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @auth
                @if(auth()->user()->admin)
                    <livewire:events.new-event />
                @endif
            @endauth
            {{ $schedules->links() }}
        </div>
    </div>
</div>