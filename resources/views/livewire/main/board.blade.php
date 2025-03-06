<div class="py-[10rem] max-xl:py-[7rem] max-lg:py-[5rem] bg-grizzle-200">
    <!--div class="container">
        <div class="grid grid-cols-3 gap-6 max-lg:grid-cols-2 mob:grid-cols-1">
            <div class="max-lg:col-span-2 mob:col-auto">
                <div class="flex justify-end mb-[1.3rem]"><a href="{{route('intro.greetings')}}" class="moreBtn">View more</a></div>
                <div class="mt-[1.3rem] border border-[#ddd] bg-cover bg-right-bottom bg-white bg-mainintro bg-no-repeat h-intcalc 2xl:bg-mainintro2 2xl:bg-auto">
                    <div class="h-full py-[2.7rem] 2xl:py-10 px-[1.5rem] max-xl:py-8 bg-left-bottom bg-no-repeat bg-[length:auto_100%] max-lg:bg-mainintro3 mob:bg-[-21%] max-3sm:bg-none">
                        <h4 class="tit5 text-white mb-[-1em] 2xl:mb-[1.38em] mob:mb-4 max-3sm:text-bb">인사말</h4>
                        <div class="pl-[50%] flex flex-col justify-center h-full tracking-tight flex-wrap text-right 2xl:pl-0 2xl:h-auto">
                            <p class="h-[1.4rem] mb-[1.4em] mt-[-6em] 2xl:mt-0 2xl:order-3 2xl:mt-[3em] mob:order-1 mob:mt-[-1em] 2sm:order-3 2sm:mt-[1em]"><img class="inline-block h-full" src="{{ asset('storage/company/logo_small_black.png') }}" alt="한국전문신문협회"></p>
                            <p class="font-titleO leading-[1.5] mb-[1em] text-[1.6rem] mob:text-[1.5rem] mob:leading-tight mob:mb-3 mob:order-2 mob:tracking-[-0.1em] 2sm:order-1">더 나은 협회와 <br>회사를 만드는데 최선의 <br>노력을 기울이겠습니다.</p>
                            <p class="font-score leading-[1.5] tracking-tighter mob:tracking-[-0.1em] mob:order-3 mob:mb-[3em] 2sm:mb-[1em] 2sm:order-2">우리 협회는 능동적인 자세와 <br class="2xl:hidden mob:block max-3sm:hidden">진취적인 각오로 스스로 <br class="hidden mob:block max-3sm:hidden">전문신문의 <br class="2xl:hidden max-lg:block mob:hidden max-3sm:hidden">위상을 높이고 <br class="block mob:block max-3sm:hidden">사회적 책임과 사명을 <br class="2xl:hidden mob:block max-3sm:hidden">다할 수 있도록 노력하겠습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="flex justify-end mb-[1.3rem]"><a href="{{ route('boards.announcements') }}" class="moreBtn">View more</a></div>
                <div class="mt-[1.3rem] bg-white py-[2.7rem] 2xl:py-10 px-[1.8rem] border border-[#ddd] max-xl:py-8 h-intcalc">
                    <h4 class="tit5">공지사항</h4>
                    <ul class="font-bold more2box mob:text-lg">
                        @foreach($announcements as $announcement)
                            <li class="mb-[1em]">
                                <a href="{{ route('boards.announces', ['id' => $announcement->id ]) }}" class="flex items-center bg-grizzle-200 py-[1.3em] px-[0.8em] 2xl:py-[1em] max-lg:pl-[10px]">
                                    <span class="font-titleO text-point-100 block w-[5.5em] border-r border-[#ccc]">{{ date('y.m.d', strtotime($announcement->created_at) )}}</span>
                                    <span class="txtOver1 block w-calc1 px-[1.3em] max-xl:px-[0.8em] max-xl:w-calc6">{{ $announcement->title }}</span>
                                    <span class="material-symbols-rounded moreBtn2">add</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="">
                <div class="flex justify-end mb-[1.3rem]"><a href="{{ route('events.schedules') }}" class="moreBtn">View more</a></div>
                <div class="mt-[1.3rem] bg-white py-[2.7rem] 2xl:py-10 px-[1.8rem] border border-[#ddd] max-xl:py-8 h-intcalc">
                    <h4 class="tit5">행사일정</h4>
                    <div 
                        class="" 
                        x-data="{
                            days:['일', '월', '화', '수', '목', '금', '토'],
                            currentMonth: (new Date()).getMonth(),
                            currentYear: (new Date()).getFullYear(),
                            events: @entangle('events'),
                            weeks: [],
                            generateCalendar() {
                                const today = new Date();
                                const startOfMonth = new Date(this.currentYear, this.currentMonth, 1);
                                const endOfMonth = new Date(this.currentYear, this.currentMonth + 1, 0);
                                const numDays = endOfMonth.getDate();
                                const startDay = startOfMonth.getDay();
                                const eventArray = [];
                                for (let i = 0; i < this.events.length; i++) {
                                    eventArray.push({ date: new Date(this.events[i]['date']) });
                                }
                                this.weeks = [];
                                let week = [];
                                for (let i = 0; i < startDay; i++) {
                                    week.push({ date: '', isToday: false, isEvent: false });
                                }
                                for (let i = 1; i <= numDays; i++) {
                                    const date = new Date(this.currentYear, this.currentMonth, i);
                                    const isToday = date.toDateString() === today.toDateString();
                                    const isEvent = eventArray.some(event => event.date.toDateString() === date.toDateString());

                                    week.push({
                                        date: i,
                                        isToday: isToday,
                                        isEvent: isEvent
                                    });

                                    if (week.length === 7) {
                                        this.weeks.push(week);
                                        week = [];
                                    }
                                }
                                while (week.length < 7) {
                                    week.push({ date: '', isToday: false, isEvent: false });
                                }
                                if (week.length > 0) {
                                    this.weeks.push(week);
                                }
                            },
                            nextMonth() {
                                if (this.currentMonth === 11) {
                                    this.currentMonth = 0;
                                    this.currentYear++;
                                } else {
                                    this.currentMonth++;
                                }
                                $wire.getDaysOfMonth(this.currentYear, this.currentMonth+1).then(() => {
                                    this.generateCalendar();
                                });
                            },
                            prevMonth() {
                                if (this.currentMonth === 0) {
                                    this.currentMonth = 11;
                                    this.currentYear--;
                                } else {
                                    this.currentMonth--;
                                }
                                $wire.getDaysOfMonth(this.currentYear, this.currentMonth+1).then(() => {
                                    this.generateCalendar();
                                });
                            }
                        }" 
                        x-init="generateCalendar()"
                    >
                        <div class="w-full overflow-hidden rounded-lg shadow-lg font-montH">
                            <div class="bg-white">
                                <div class="flex items-center px-4 bg-[#231f20] text-white text-[1.8em] py-[0.4em] justify-center">
                                    <button aria-label="calendar backward" class="" @click="prevMonth">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <polyline points="15 6 9 12 15 18" />
                                        </svg>
                                    </button>
                                    <span tabindex="0" class="px-[0.8em]"><b x-text="currentYear"></b><span class="font-montL" x-text="'.'+('0' + (currentMonth+1)).slice(-2)"></span></span>
                                    <button aria-label="calendar forward" class="" @click="nextMonth">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <polyline points="9 6 15 12 9 18" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex items-center justify-between pt-8 pb-4 overflow-x-auto text-center mob:text-lg">
                                    <table class="w-full">
                                        <thead class="font-titleO">
                                            <tr>
                                                <template x-for="day,i in days">
                                                    <th>
                                                        <div class="flex justify-center w-full">
                                                            <p class="" :class="i == 0 ? 'text-point-200' : i == 6 ? 'text-point-200' : ''" x-text="day"></p>
                                                        </div>
                                                    </th>    
                                                </template>
                                            </tr>
                                        </thead>
                                        <tbody class="leading-[2] 2xl:leading-[1.5] mt-4">
                                            <template x-for="week in weeks">
                                                <tr>
                                                    <template x-for="(day,index) in week">
                                                        <td class="">
                                                            <template x-if="day.isEvent">
                                                                <div class="flex justify-center w-full px-2 py-2">
                                                                    <a href="{{route('events.schedules')}}" class="flex items-center justify-center w-8 h-8 text-white rounded-full shadow-sh1 bg-bb focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#555] focus:bg-grizzle-800 hover:bg-grizzle-800" x-text="day.date"></a>
                                                                </div>
                                                            </template>
                                                            <template x-if="!day.isEvent">
                                                                <div class="flex justify-center w-full px-2 py-2">
                                                                    <span :class="{'text-point-200': index%7 === 0 || index%7 === 6}" x-text="day.date"></span>
                                                                </div>
                                                            </template>
                                                        </td>
                                                    </template>
                                                </tr>
                                            </template>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <div class="max-w-7xl mx-auto">
        <div class="w-full flex flex-wrap justify-center gap-4">
            <div class="basis-96 max-w-96 grow">
                <div class="flex justify-end mb-[1.3rem]"><a href="{{ route('boards.announcements') }}" class="moreBtn">View more</a></div>
                <div class="bg-white py-4 px-3 border border-[#ddd] max-xl:py-8 h-intcalc">
                    <h4 class="font-titleO text-2xl">공지사항</h4>
                    <div class="mt-4 font-bold grid gap-2">
                        @foreach($announcements as $announcement)
                            <div class="w-full flex items-center justify-between bg-grizzle-200 px-3 py-4">
                                <div class="flex items-center gap-2 text-sm">
                                    <span class="text-point-100 block border-r-2 border-[#ccc] font-titleO pr-2">{{ date('y.m.d', strtotime($announcement->created_at) )}}</span>
                                    <p class="line-clamp-1 font-score">{{ $announcement->title }}</p>
                                </div>
                                <a href="{{ route('boards.announces', ['id' => $announcement->id ]) }}" class="rounded-full bg-stone-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-white" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="basis-96 max-w-96 grow">
                <div class="flex justify-end mb-[1.3rem]"><a href="{{ route('events.photos') }}" class="moreBtn">View more</a></div>
                <div class="bg-white py-4 px-3 border border-[#ddd] max-xl:py-8 h-intcalc">
                    <h4 class="font-titleO text-2xl">행사사진</h4>
                    <div class="mt-4 font-bold"
                        x-data="{
                            swiper: null
                        }"
                        x-init="
                            swiper = new Swiper($refs.event_photos, {
                                slidesPerView: 1,
                                spaceBetween: 30,
                                loop: true,
                                navigation: {
                                    nextEl: '.button-next',
                                    prevEl: '.button-prev',
                                },
                            });
                        "
                    >
                        <div class="swiper" x-ref="event_photos">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @foreach($event_photos as $event_photo)
                                    <div class="swiper-slide bg-gray-200">
                                        <div class="w-full aspect-video bg-black bg-no-repeat bg-center bg-cover" style="background-image:url({{ asset('storage/'.$event_photo->first_event_photo->img_path) }})"></div>
                                        <div class="px-2 py-4">
                                            <p class="text-gray-500 font-normal">{{ (new DateTime($event_photo->date))->format('Y.m.d') }}</p>
                                            <h4 class="mt-2 text-2xl line-clamp-1">{{$event_photo->title}}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="absolute z-10 top-1/4 left-0 button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                            </button>
                            <button class="absolute z-10 top-1/4 right-0 button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basis-96 max-w-96 grow">
                <div class="flex justify-end mb-[1.3rem]"><a href="{{ route('pdf') }}" class="moreBtn">View more</a></div>
                <div class="bg-white py-4 px-3 border border-[#ddd] max-xl:py-8 h-intcalc">
                    <h4 class="font-titleO text-2xl">협회보 PDF</h4>
                    <div class="mt-4 flex gap-4"
                        x-data="{
                            swiper: null
                        }"
                        x-init="
                            swiper = new Swiper($refs.pdfs, {
                                slidesPerView: 1,
                                loop: true,
                                pagination: {
                                    el: '.swiper-pagination',
                                    clickable: true,
                                },
                            });
                        "
                    >
                        <div class="w-2/5 flex-none">
                            <div class="swiper" x-ref="pdfs">
                                <div class="swiper-wrapper">
                                    @foreach($pdfs as $pdf)
                                        <div class="swiper-slide border">
                                            <div class="w-full aspect-[21/29.7] bg-no-repeat bg-cover bg-center" style="background-image:url({{asset('storage/'.$pdf->preview_file_path)}})"></div>
                                        </div>
                                    @endforeach    
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="w-3/5 flex flex-col justify-between border-y divide-y font-semibold">
                            @foreach($pdfs as $index => $pdf)
                                <div class="flex items-center justify-between py-2" @mouseenter="swiper.slideTo({{$index}})">
                                    <p class="text-sm">[협회보 제 {{$pdf->id}}호]</p>
                                    <a href="storage/{{$pdf->file_path}}" target="_blank" class="w-5 h-5 rounded-full bg-black flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h13M12 5l7 7-7 7"/></svg></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{--
                <div class="basis-96 max-w-96 grow">
                    <div class="flex justify-end mb-[1.3rem]"><a href="{{ route('events.schedules') }}" class="moreBtn">View more</a></div>
                    <div class="bg-white py-8 px-[1.8rem] border border-[#ddd] max-xl:py-8 h-intcalc">
                        <h4 class="tit5">행사일정</h4>
                        <div 
                            class="mt-4" 
                            x-data="{
                                days:['일', '월', '화', '수', '목', '금', '토'],
                                currentMonth: (new Date()).getMonth(),
                                currentYear: (new Date()).getFullYear(),
                                events: @entangle('events'),
                                weeks: [],
                                generateCalendar() {
                                    const today = new Date();
                                    const startOfMonth = new Date(this.currentYear, this.currentMonth, 1);
                                    const endOfMonth = new Date(this.currentYear, this.currentMonth + 1, 0);
                                    const numDays = endOfMonth.getDate();
                                    const startDay = startOfMonth.getDay();
                                    const eventArray = [];
                                    for (let i = 0; i < this.events.length; i++) {
                                        eventArray.push({ date: new Date(this.events[i]['date']) });
                                    }
                                    this.weeks = [];
                                    let week = [];
                                    for (let i = 0; i < startDay; i++) {
                                        week.push({ date: '', isToday: false, isEvent: false });
                                    }
                                    for (let i = 1; i <= numDays; i++) {
                                        const date = new Date(this.currentYear, this.currentMonth, i);
                                        const isToday = date.toDateString() === today.toDateString();
                                        const isEvent = eventArray.some(event => event.date.toDateString() === date.toDateString());

                                        week.push({
                                            date: i,
                                            isToday: isToday,
                                            isEvent: isEvent
                                        });

                                        if (week.length === 7) {
                                            this.weeks.push(week);
                                            week = [];
                                        }
                                    }
                                    while (week.length < 7) {
                                        week.push({ date: '', isToday: false, isEvent: false });
                                    }
                                    if (week.length > 0) {
                                        this.weeks.push(week);
                                    }
                                },
                                nextMonth() {
                                    if (this.currentMonth === 11) {
                                        this.currentMonth = 0;
                                        this.currentYear++;
                                    } else {
                                        this.currentMonth++;
                                    }
                                    $wire.getDaysOfMonth(this.currentYear, this.currentMonth+1).then(() => {
                                        this.generateCalendar();
                                    });
                                },
                                prevMonth() {
                                    if (this.currentMonth === 0) {
                                        this.currentMonth = 11;
                                        this.currentYear--;
                                    } else {
                                        this.currentMonth--;
                                    }
                                    $wire.getDaysOfMonth(this.currentYear, this.currentMonth+1).then(() => {
                                        this.generateCalendar();
                                    });
                                }
                            }" 
                            x-init="generateCalendar()"
                        >
                            <div class="w-full overflow-hidden rounded-lg shadow-lg font-montH">
                                <div class="bg-white">
                                    <div class="flex items-center px-4 bg-[#231f20] text-white text-[1.8em] py-[0.4em] justify-center">
                                        <button aria-label="calendar backward" class="" @click="prevMonth">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="15 6 9 12 15 18" />
                                            </svg>
                                        </button>
                                        <span tabindex="0" class="px-[0.8em]"><b x-text="currentYear"></b><span class="font-montL" x-text="'.'+('0' + (currentMonth+1)).slice(-2)"></span></span>
                                        <button aria-label="calendar forward" class="" @click="nextMonth">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="9 6 15 12 9 18" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex items-center justify-between overflow-x-auto text-center min-h-60">
                                        <table class="w-full">
                                            <thead class="font-titleO">
                                                <tr class="">
                                                    <template x-for="day,i in days">
                                                        <th class="pb-4">
                                                            <div class="flex justify-center w-full">
                                                                <p class="" :class="i == 0 ? 'text-point-200' : i == 6 ? 'text-point-200' : ''" x-text="day"></p>
                                                            </div>
                                                        </th>    
                                                    </template>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                <template x-for="week in weeks">
                                                    <tr class="">
                                                        <template x-for="(day,index) in week">
                                                            <td class="py-1">
                                                                <template x-if="day.isEvent">
                                                                    <div class="flex justify-center w-full px-2">
                                                                        <a href="{{route('events.schedules')}}" class="flex items-center justify-center w-6 h-6 text-white rounded-full shadow-sh1 bg-bb focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#555] focus:bg-grizzle-800 hover:bg-grizzle-800" x-text="day.date"></a>
                                                                    </div>
                                                                </template>
                                                                <template x-if="!day.isEvent">
                                                                    <div class="flex justify-center w-full px-2">
                                                                        <span :class="{'text-point-200': index%7 === 0 || index%7 === 6}" x-text="day.date"></span>
                                                                    </div>
                                                                </template>
                                                            </td>
                                                        </template>
                                                    </tr>
                                                </template>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            --}}
        </div>
    </div>
</div>