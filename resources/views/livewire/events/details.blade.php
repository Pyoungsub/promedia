<div>
    <div class="flex flex-wrap items-center h-[40rem] relative justify-center max-xl:h-[32rem] max-lg:h-[28rem] max-md:h-96 tab:h-80 mob:h-60 2sm:h-52 max-3sm:h-48 bg-center bg-no-repeat bg-cover bg-subbg9">
        <div class="text-center text-white mt-[-2em] tab:mt-0">
            <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto">행사일정</h3>
        </div>
    </div>
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16">
        <h4 class="tit4">행사일정</h4>
        <div class="container2 max-w-cont ">
            @if(auth()->user() && auth()->user()->admin)
                <div class=""
                    x-data="{
                        modify:false,
                        name:$wire.entangle('name').defer,
                        effective_date:$wire.entangle('effective_date').defer,
                        due_date:$wire.entangle('due_date').defer,
                        from:$wire.entangle('from').defer,
                        to:$wire.entangle('to').defer,
                        place:$wire.entangle('place').defer,
                        description:$wire.entangle('description').defer,
                        proceedModify()
                        {
                            $wire.name = this.name;
                            $wire.effective_date = this.effective_date;
                            $wire.due_date = this.due_date;
                            $wire.from = this.from;
                            $wire.to = this.to;
                            $wire.place = this.place;
                            $wire.description = this.description;
                            $wire.modify();
                        }
                    }"
                >
                    <div class="flex justify-between text-[2.5rem] pb-[1em] mt-[4em] max-lg:text-[2rem] max-lg:px-4 max-md:pb-4 max-md:mt-[3.5em] mob:text-[1.5rem] 2sm:mt-[2em] max-3sm:px-0">
                        <h3 class="tracking-tight w-calc11 pr-[1em] max-md:w-full">
                            <strong x-show="!modify">{{ $name }}</strong>
                            <input type="text" x-show="modify" x-model="name" class="text-4xl font-bold w-full">
                        </h3>
                        <div class="flex-none text-[1.1rem] max-lg:text-base max-md:w-full max-md:flex max-md:justify-between max-md:mt-3">
                            <div x-show="!modify" class="text-right">
                                <div class="mb-2 text-cc max-lg:mb-0 max-md:order-2">
                                    <button @click="modify = true" class="mr-2 cursor-pointer hover:text-grizzle-800"><span class="align-middle material-symbols-rounded text-[1em]">edit_square</span>수정</button>
                                    <button wire:click="delete" class="cursor-pointer hover:text-point-200"><span class="align-middle material-symbols-rounded text-[1em]">delete</span>삭제</button>
                                </div>
                                <div x-show="!modify" class="">
                                    @if( $effective_date == $due_date )
                                        <p class="">행사기간: {{ $effective_date }} 당일</p>
                                    @else
                                        <p class="">시작일: {{ $effective_date }} 종료일: {{ $due_date }}</p>
                                    @endif
                                    <p class="mt-2">{{ substr($from, 0, 5) }}~{{ substr($to, 0, 5) }}</p>
                                    <p class="mt-2">장소: {{ $place }}</p>
                                </div>
                            </div>
                            <div x-show="modify" class="">
                                <div class="mb-2 text-cc max-lg:mb-0 max-md:order-2 text-right">
                                    <button @click="proceedModify;$nextTick(() => { modify = false; });" class="mr-2 cursor-pointer hover:text-grizzle-800"><span class="align-middle material-symbols-rounded text-[1em]">edit_square</span>수정</button>
                                    <button class="cursor-pointer hover:text-point-200" @click="modify = false"><span class="align-middle material-symbols-rounded text-[1em]">close</span>{{ __('취소') }}</button>
                                </div>
                                <div class="flex">
                                    <div class="">
                                        <x-jet-label for="new_effective_date" value="시작일" />
                                        <input id="new_effective_date" type="date" class="max-md:order-1 max-md:text-grizzle-800 2sm:text-sm" x-model="effective_date" />
                                    </div>
                                    <div class="">
                                        <x-jet-label for="new_due_date" value="종료일" />
                                        <input id="new_due_date" type="date" class="max-md:order-1 max-md:text-grizzle-800 2sm:text-sm" x-model="due_date" />
                                    </div>
                                </div>
                                <div class="flex mt-4">
                                    <div class="">
                                        <x-jet-label for="new_from" value="시작시간" />
                                        <input id="new_from" type="time" class="max-md:order-1 max-md:text-grizzle-800 2sm:text-sm" x-model="from" />
                                    </div>
                                    <div class="">
                                        <x-jet-label for="new_to" value="종료시간" />
                                        <input id="new_to" type="time" class="max-md:order-1 max-md:text-grizzle-800 2sm:text-sm" x-model="to" />
                                    </div>
                                </div>
                                <div class="">
                                    <x-jet-label for="new_place" value="장소" />
                                    <input id="new_place" type="text" class="max-md:order-1 max-md:text-grizzle-800 2sm:text-sm" x-model="place" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leading-[1.5] border-t-[2px] border-b border-b-cc text-[17px] tab:text-base mob:font-noto">
                        <div x-show="!modify" class="py-[4em] px-[2em] max-lg:px-[1em] max-lg:py-[3em] mob:py-[2em] max-3sm:px-0 max-3sm:py-[1em]">
                            {!! $description !!}
                        </div>
                        <textarea x-show="modify" name="" id="" class="w-full rounded resize-none" rows="50" x-model="description"></textarea>
                    </div>
                </div>
            @else
                <div class="flex justify-between text-[2.5rem] pb-[1em] mt-[4em] max-lg:text-[2rem] max-lg:px-4 max-md:pb-4 max-md:mt-[3.5em] mob:text-[1.5rem] 2sm:mt-[2em] max-3sm:px-0">
                    <h3 class="tracking-tight w-calc11 pr-[1em] max-md:w-full">
                        <strong>{{ $name }}</strong>
                    </h3>
                    <div class="flex-none text-right text-[1.1rem] max-lg:text-base max-md:w-full max-md:flex max-md:justify-between max-md:mt-3">
                        @if( $effective_date == $due_date )
                            <p class="">행사기간: {{ $effective_date }} 당일</p>
                        @else
                            <p class="">시작일: {{ $effective_date }} 종료일: {{ $due_date }}</p>
                        @endif
                        <p class="mt-2">{{ substr($from, 0, 5) }}~{{ substr($to, 0, 5) }}</p>
                        <p class="mt-2">장소: {{ $place }}</p>
                    </div>
                </div>
                <div class="leading-[1.5] border-t-[2px] border-b border-b-cc text-[17px] tab:text-base mob:font-noto">
                    <!--div class=" py-[1.8em] px-[2em] flex border-b border-cc max-lg:px-[1em] max-lg:py-[1.3em] mob:py-[1em] max-3sm:px-0 max-3sm:text-sm">
                        <span class="mr-8 font-bold"><span class="mr-2 align-middle text-point-100 material-symbols-rounded mob:text-[1.5em]">upload_file</span>첨부파일</span>
                        <ul class="underline text-grizzle-800 ">
                            <li><a href="">파일이름.pdf</a></li>
                        </ul>
                    </div-->
                    
                    <div class=" py-[4em] px-[2em] max-lg:px-[1em] max-lg:py-[3em] mob:py-[2em] max-3sm:px-0 max-3sm:py-[1em]">
                        {!! $description !!}
                    </div>
                </div>
            @endif
            <div class="flex flex-wrap items-center justify-between mt-20 text-[17px] max-md:mt-8">
                <div class="w-calc12 max-md:w-fit">
                    @if($previousSchedule)
                        <a href="{{ route('events.details', ['id' => $previousSchedule->id]) }}">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl"><span class="align-middle material-symbols-rounded">chevron_left</span>PREV</span>
                            <span class="block txtOver1 max-md:hidden">{{ $previousSchedule->name }}</span>
                        </a>
                    @else
                        <span class="text-gray-400">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl"><span class="align-middle material-symbols-rounded">chevron_left</span>PREV</span>
                            <span class="block txtOver1 max-md:hidden">{{ __('이전 페이지가 없습니다.') }}</span>
                        </span>
                    @endif
                </div>
                <div class="w-20 h-20 overflow-hidden duration-500 rounded-full bg-point-100 hover:bg-point-300 max-md:h-14 max-md:w-14 mob:w-11 mob:h-11">
                    <a class="flex flex-col items-center justify-center w-full h-full" href="{{route('events.lists')}}">
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-0"></span>
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-[4px]"></span>
                        <span class="block w-8 h-[2px] bg-white my-1 max-md:w-6 mob:my-0"></span>
                    </a>
                </div>
                <div class="text-right w-calc12 max-md:w-fit">
                    @if($nextSchedule)
                        <a href="{{ route('events.details', ['id' => $nextSchedule->id]) }}">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl">NEXT<span class="align-middle material-symbols-rounded">chevron_right</span></span>
                            <span class="block txtOver1 max-md:hidden">{{ $nextSchedule->name }}</span>
                        </a>
                    @else
                        <span class="text-gray-400">
                            <span class="block mb-1 text-2xl font-montH mob:text-xl">NEXT<span class="align-middle material-symbols-rounded">chevron_right</span></span>
                            <span class="block txtOver1 max-md:hidden">{{ __('다음 페이지가 없습니다.') }}</span>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
