<div class="">
    <x-headers.intro/>
    <div class="pt-32 text-lg bg-right-bottom bg-no-repeat bg-[length:30%] font-nanumS bg-mark"
        x-data="{
            jobTitle:'ceo',
            scrollTo(refName) {
                const element = this.$refs[refName]
                if (element) {
                    this.jobTitle = refName;
                    window.scrollTo({
                        top: element.offsetTop - 147,  // Adjust offset for smooth scrolling above the div
                        behavior: 'smooth'
                    });
                }
            }
        }"
    >
        <div class="pb-20 container2">
            <h4 class="tit4">연혁</h4>
            <div class="flex justify-center text-xl leading-[2] mb-60">
                <div class="p-[5px] bg-tabbox bg-full">
                    <div class="relative flex flex-wrap items-center">
                        <button class="px-[2em]" :class="jobTitle == 'ceo' ? 'text-white font-bold h-full bg-tab bg-full' : ''" @click="scrollTo('ceo')">회장단</button>
                        <button class="px-[2em]" :class="jobTitle == 'advisory' ? 'text-white font-bold h-full bg-tab bg-full' : ''" @click="scrollTo('advisory')">고문</button>
                        <button class="px-[2em]" :class="jobTitle == 'vice-chairman' ? 'text-white font-bold h-full bg-tab bg-full' : ''" @click="scrollTo('vice-chairman')">부회장</button>
                        <button class="px-[2em]" :class="jobTitle == 'auditor' ? 'text-white font-bold h-full bg-tab bg-full' : ''" @click="scrollTo('auditor')">감사</button>
                        <button class="px-[2em]" :class="jobTitle == 'director' ? 'text-white font-bold h-full bg-tab bg-full' : ''" @click="scrollTo('director')">이사</button>
                    </div>
                </div>
            </div>
            <div x-ref="ceo" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-400 border-point mb-16 ">회장단</h5>
                <div class="flex flex-wrap justify-center ml-36">
                    <div class="flex justify-end w-1/2 p-5">
                        <div class="flex">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                            <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_01.jpg')}}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em]">
                            <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">회장</span>
                            <p class="my-1 text-2xl font-ChosunKm">김광탁</p>
                            <p class="mb-2"><strong>내외뉴스통신</strong> 발행인</p>
                            <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_01_ba.png')}}" alt="내외뉴스통신"></span>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-1/2 p-5">
                        <div class="flex">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                            <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_02.jpg')}}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em]">
                            <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">명예회장</span>
                            <p class="my-1 text-2xl font-ChosunKm">박두환</p>
                            <p class="mb-2"><strong>원예산업신문</strong> 발행인</p>
                            <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_02_ba.png')}}" alt="원예산업신문 로고"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-ref="advisory" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-400 border-point mb-16 ">고문</h5>
                <div class="flex flex-wrap justify-center ml-36">
                    <div class="flex justify-end w-1/2 p-5">
                        <div class="flex">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                            <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_03.jpg')}}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em]">
                            <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">고문</span>
                            <p class="my-1 text-2xl font-ChosunKm">김시중</p>
                            <p class="mb-2"><strong>한국섬유신문</strong> 명예회장</p>
                            <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_03_ba.png')}}" alt="한국섬유신문 로고"></span>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-1/2 p-5">
                        <div class="flex">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                                <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_04.jpg')}}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em]">
                                <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">고문</span>
                                <p class="my-1 text-2xl font-ChosunKm">양영근</p>
                                <p class="mb-2"><strong>가스신문</strong> 발행인</p>
                                <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_04_ba.png')}}" alt="가스신문 로고"></span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end w-1/2 p-5">
                        <div class="flex">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                                <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_05.jpg')}}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em]">
                                <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">고문</span>
                                <p class="my-1 text-2xl font-ChosunKm">함태원</p>
                                <p class="mb-2"><strong>약업신문/뷰티누리</strong> 발행인</p>
                                <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_05_ba.png')}}" alt="약업신문 로고"><img class="h-[1em]" src="{{asset('storage/logos/mem_05_ba2.png')}}" alt="뷰티누리 로고"></span>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-1/2 p-5">
                        <div class="flex">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                                <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_06.jpg')}}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em]">
                                <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">상임고문</span>
                                <p class="my-1 text-2xl font-ChosunKm">방재홍</p>
                                <p class="mb-2"><strong>독서신문/이뉴스투데이</strong> 발행인</p>
                                <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_06_ba.png')}}" alt="독서신문 로고"><img class="h-[1em]" src="{{asset('storage/logos/mem_06_ba2.png')}}" alt="이뉴스투데이 로고"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-ref="vice-chairman" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-400 border-point mb-16 ">부회장</h5>
                <div class="flex flex-wrap justify-center ml-36">
                    <div class="flex justify-end w-1/2 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                            <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_07.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">부회장</span>
                        <p class="my-1 text-2xl font-ChosunKm">김관홍</p>
                        <p class="mb-2"><strong>메디칼 업저버</strong> 발행인</p>
                        </div>
                    </div>
                    </div>
                    <div class="flex w-1/2 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_08.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">부회장</span>
                        <p class="my-1 text-2xl font-ChosunKm">김종철</p>
                        <p class="mb-2"><strong>한국임업신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_08_ba.png')}}" alt="한국임업신문 로고"></span>
                        </div>
                    </div>
                    </div>
                    <div class="flex justify-end w-1/2 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_09.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">부회장</span>
                        <p class="my-1 text-2xl font-ChosunKm">정재환</p>
                        <p class="mb-2"><strong>화광신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_09_ba.png')}}" alt="화광신문 로고"><img class="h-[1em]" src="{{asset('storage/member/')}}mem_05_ba2.png" alt="뷰티누리 로고"></span>
                        </div>
                    </div>
                    </div>
                    <div class="flex w-1/2 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_10.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">부회장</span>
                        <p class="my-1 text-2xl font-ChosunKm">함정기</p>
                        <p class="mb-2"><strong>정보통신신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_10_ba.png')}}" alt="정보통신신문 로고"></span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div x-ref="auditor" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-400 border-point mb-16 ">감사</h5>
                <div class="flex flex-wrap justify-center ml-36">
                    <div class="flex justify-end w-1/2 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_11.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">감사</span>
                        <p class="my-1 text-2xl font-ChosunKm">백용태</p>
                        <p class="mb-2"><strong>국토매일</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_11_ba.png')}}" alt="국토매일"></span>
                        </div>
                    </div>
                    </div>
                    <div class="flex w-1/2 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_12.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">감사</span>
                        <p class="my-1 text-2xl font-ChosunKm">오경섭</p>
                        <p class="mb-2"><strong>일요저널/국민앵커</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_12_ba.png')}}" alt="일요저널 로고"></span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div x-ref="director" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-400 border-point mb-16 ">이사</h5>
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-end w-1/3 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_13.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">이사</span>
                        <p class="my-1 text-2xl font-ChosunKm">강현옥</p>
                        <p class="mb-2"><strong>농촌여성신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_13_ba.png')}}" alt="농촌여성신문 로고"></span>
                        </div>
                    </div>
                    </div>
                    <div class="flex justify-center w-1/3 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                            <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_noimage.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">이사</span>
                        <p class="my-1 text-2xl font-ChosunKm">김중규</p>
                        <p class="mb-2"><strong>장업신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"></span>
                        </div>
                    </div>
                    </div>
                    <div class="flex w-1/3 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_14.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">이사</span>
                        <p class="my-1 text-2xl font-ChosunKm">박연준</p>
                        <p class="mb-2"><strong>의학신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_14_ba.png')}}" alt="의학신문"></span>
                        </div>
                    </div>
                    </div>
                    <div class="flex justify-end w-1/3 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_15.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">이사</span>
                        <p class="my-1 text-2xl font-ChosunKm">방두철</p>
                        <p class="mb-2"><strong>독서신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_15_ba.png')}}" alt="독서신문 로고"></span>
                        </div>
                    </div>
                    </div>
                    <div class="flex justify-center w-1/3 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_16.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">이사</span>
                        <p class="my-1 text-2xl font-ChosunKm">이군호</p>
                        <p class="mb-2"><strong>식품음료신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_16_ba.png')}}" alt="식품음료신문"></span>
                        </div>
                    </div>
                    </div>
                    <div class="flex w-1/3 p-5">
                    <div class="flex">
                        <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg">
                        <img class="object-cover w-full h-full" src="{{asset('storage/member/mem_17.jpg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-start justify-end w-[15em]">
                        <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center">이사</span>
                        <p class="my-1 text-2xl font-ChosunKm">홍 준</p>
                        <p class="mb-2"><strong>한국대학신문</strong> 발행인</p>
                        <span class="text-[1.8rem]"><img class="h-[1em]" src="{{asset('storage/logos/mem_17_ba.png')}}" alt="한국대학신문"></span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
