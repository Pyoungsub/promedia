<div>
    <div class="bg-center bg-no-repeat bg-cover bg-subbg9">
        <div class="container2 flex flex-wrap items-center h-[40rem] relative justify-center">
        <div class="text-center text-white">
            <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto" >행사일정</h3>
        </div>
        </div>
    </div> 
    <div class="py-32">
        <h4 class="tit4">행사일정</h4>
        <div class="max-w-screen-lg text-lg container2 font-nanumS"
            x-data="{
                days:['일', '월', '화', '수', '목', '금', '토'],
                currentYear: (new Date()).getFullYear(),
                currentMonth: (new Date()).getMonth(),
                schedules: @entangle('schedules'),
                month: [],
                generateCalendar() {
                    const startOfMonth = new Date(this.currentYear, this.currentMonth, 1);
                    const endOfMonth = new Date(this.currentYear, this.currentMonth + 1, 0);
                    const numDays = endOfMonth.getDate();
                    const startDay = startOfMonth.getDay();
                    this.month = [];
                    for (let i = 0; i < startDay; i++) {
                        this.month.push({ date: '', isEvent: false, during: false });
                    }
                    for (let i = 1; i <= numDays; i++) {
                        const date = new Date(this.currentYear, this.currentMonth, i);
                        const filteredArray = this.schedules.filter(subArray => new Date(subArray.effective_date).toDateString() === date.toDateString());
                        if(filteredArray.length > 0)
                        {
                            this.month.push({
                                date: i,
                                isEvent: true,
                                eventsArray: filteredArray
                            });
                        }
                        else
                        {
                            this.month.push({
                                date: i,
                                isEvent: false
                            });
                        }
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
                },
                morningAfternoon(from, to) {
                    const [hours1, minutes1, seconds1] = from.split(':').map(Number);
                    const [hours2, minutes2, seconds2] = to.split(':').map(Number);
                    if (hours1 < 12 && hours2 >= 12) {
                        return 'day';
                    }
                    else if (hours1 >= 12) {
                        return 'pm';
                    }
                    else {
                        return 'am';
                    }
                }
            }"
            x-init="
                generateCalendar();
                $watch('schedules', value =>  {
                    console.log(value);
                });
            "
        >
            <div class="px-4 text-[1.8em] py-[0.4em] text-center relative">
                <div class="absolute bottom-0 left-0 flex flex-wrap">
                <button aria-label="calendar backward" class="flex items-center justify-center w-10 h-10 border border-cc" @click="prevMonth">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <button aria-label="calendar forward" class="flex items-center justify-center w-10 h-10 border border-l-0 w border-cc" @click="nextMonth">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
                <span class="block h-10 px-3 ml-1 text-sm leading-10 border border-cc bg-grizzle-200 text-cc">오늘</span>
                <!-- 금월이 아닐 경우 bg-white  -->
                </div>
                <span tabindex="0" class="font-titleO"><span x-text="currentYear"></span>년 <span x-text="currentMonth+1"></span>월</span>
            </div>
            <div class="pt-3 pb-4">
                <div class="grid grid-cols-7 gap-px font-bold text-center border-t-2 bg-grizzle-300 border-x border-x-grizzle-300">
                    <template x-for="(day, index) in days">
                        <div class="flex items-center justify-center w-full h-16 bg-grizzle-200">
                            <p class="" :class="{'text-ca-sun' : index === 0, 'text-ca-sat' : index === 6}" x-text="day"></p>
                        </div>
                    </template>
                </div>
                <div class="grid grid-cols-7 gap-px text-right border bg-grizzle-300 border-grizzle-300">
                    <template x-for="(day, index) in month">
                        <div class="w-full aspect-square p-1 bg-white">
                            <p :class="{'text-ca-sun' : index%7 === 0, 'text-ca-sat' : index%7 === 6}" x-text="day.date"></p>
                            <template x-if="day.isEvent">
                                <template x-for="event in day.eventsArray">
                                    <div class="static"
                                        x-data="{show:false}"
                                        @mouseleave="show = false"
                                    >
                                        <button 
                                            x-data="{
                                                result: morningAfternoon(event.from, event.to)
                                            }"
                                            x-init="console.log(result)"
                                            class="w-full flex items-center justify-between px-1 text-sm text-black" 
                                            :class="result == 'am' ? 'bg-sche1' : result == 'pm' ? 'bg-sche2' : 'bg-sche3'"
                                            @mouseenter="show = true"
                                        >
                                            <span class="block txtOver1" x-text="event.name"></span>
                                            <span class="block w-[3.5em] text-4b" x-text="event.from.slice(0,5)"></span>
                                        </button>
                                        <div x-show="show" class="absolute bg-white border border-cc max-w-sm text-left">
                                            <p class="p-2 font-bold text-center bg-[#d9e2eb]" x-text="'행사일자 : '+event.effective_date"></p>
                                            <div class="px-3 py-4">
                                                <div class="pb-2 border-b border-cc">
                                                <p class="mb-2 text-xl"><strong x-text="event.name"></strong></p>
                                                <p><strong>행사시간:</strong> <span x-text="event.from.slice(0,5)"></span> ~ <span x-text="event.to.slice(0,5)"></span></p>
                                                <p><strong>행사장소:</strong> <span x-text="event.place"></span></p>
                                                </div>
                                                <template x-if="event.description">
                                                    <div class="pt-2 text-center">
                                                        <p class="mb-4 text-left txtOver3"><strong>행사내용: </strong><span x-text="event.description"></span></p>
                                                        <a class="px-2 py-1 font-bold border border-cc" href="./view.php">자세히보기<span class="align-middle material-symbols-rounded">chevron_right</span></a>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </template>
                        </div>
                    </template>
                </div>
            </div>
            <div class="mt-4 text-lg font-bold text-right">
                <span class="mr-4"><span class="inline-block w-12 h-3 bg-sche1 mr-[0.5em] align-middle"></span>: 오전</span>
                <span class="mr-4"><span class="inline-block w-12 h-3 bg-sche2 mr-[0.5em] align-middle"></span>: 오후</span>
                <span class=""><span class="inline-block w-12 h-3 bg-sche3 mr-[0.5em] align-middle"></span>: 종일</span>
            </div>
        </div>
    </div>
</div>