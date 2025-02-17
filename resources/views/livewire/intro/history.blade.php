<div class="">
    <x-headers.intro/>
<<<<<<< HEAD
    <div class="pt-32 text-lg bg-right-bottom bg-no-repeat bg-[length:30%] font-nanumS bg-mark">
        <div class="pb-20 container2">
            <h4 class="tit4">연혁</h4>
            <div class="flex justify-center text-xl leading-[2]">
            <div class="p-[5px] bg-tabbox bg-full">
                <div class="relative flex flex-wrap items-center">
                <div class="px-[2em] cursor-pointer text-white font-bold h-full bg-tab bg-full">2021-2030</div>
                <div class="px-[2em] cursor-pointer hover:text-point">2011-2020</div>
                <div class="px-[2em] cursor-pointer hover:text-point">2001-2010</div>
                <div class="px-[2em] cursor-pointer hover:text-point">1991-2000</div>
                <div class="px-[2em] cursor-pointer hover:text-point">1964-1990</div>
=======
    <div 
        class="pt-32 text-lg bg-right-bottom bg-no-repeat bg-[length:30%] font-nanumS bg-mark max-lg:pt-28 max-md:pt-24 tab:pt-20 2sm:pt-16 tab:font-noto"
        x-data="{selected:'2021'}"
    >
        <div class="pb-20 container2 mob:pb-12">
            <h4 class="tit4">연혁</h4>
            <div class="flex justify-center text-xl leading-loose tab:text-lg">
            <div class="p-[5px] bg-tabbox bg-full mob:bg-none">
                <div class="relative flex flex-wrap items-center mob:justify-center">
                    <button @click="selected = '2021'" class="px-[2em] cursor-pointer mob:mb-2 max-md:px-[1em]" :class="selected == '2021' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'">2021-2030</button>
                    <button @click="selected = '2011'" class="px-[2em] cursor-pointer mob:mb-2 max-md:px-[1em]" :class="selected == '2011' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'">2011-2020</button>
                    <button @click="selected = '2001'" class="px-[2em] cursor-pointer mob:mb-2 max-md:px-[1em]" :class="selected == '2001' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'">2001-2010</button>
                    <button @click="selected = '1991'" class="px-[2em] cursor-pointer mob:mb-2 max-md:px-[1em]" :class="selected == '1991' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'">1991-2000</button>
                    <button @click="selected = '1964'" class="px-[2em] cursor-pointer mob:mb-2 max-md:px-[1em]" :class="selected == '1964' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'">1964-1990</button>
>>>>>>> bc662e7 (modified code)
                </div>
            </div>
            </div>
            <!-- 년도 탭 클릭 시 해당 탭의 index와 동일한 tab[index] 보임.-->
            <!-- 년도 탭 클릭 시 해당 tab 에 bacgkround image 부여 / color 변경-->
        </div>
<<<<<<< HEAD
        <hr class="border-grizzle-300">
        <div id="tab1" class="container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2024</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>제60차 정기총회 개최</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">03월</b>김광탁(내외뉴스통신) 제31대 회장 취임</li>
                <li><b class="text-bb mr-[1.5em]">05월</b>한일합동세미나(경북 경주)</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2023</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
        <hr class="border-gray2">
        <div x-show="selected == '2021'" id="tab1" class="container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2 max-md:pl-32 max-md:after:left-16   max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16 mob:pl-16 mob:after:left-8">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
                <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">
                    2024
                </div>
                <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
                </div>
                <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                    <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>제60차 정기총회 개최</li>
                    <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">03월</b>김광탁(내외뉴스통신) 제31대 회장 취임</li>
                    <li><b class="text-bb mr-[1.5em]">05월</b>한일합동세미나(경북 경주)</li>
                </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2023</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>제59차 정기총회 개최</li>
                <li><b class="text-bb mr-[1.5em]">06월</b>전문신문 경영인 세미나(경북 청송)</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2022</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2022</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">03월</b>제58차 정기총회 개최</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">03월</b>박두환(원예산업신문) 제30대 회장 취임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">07월</b>전문신문 경영인 세미나(충북 단양)</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>제58주년 전문신문의 날 기념식</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2021</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2021</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li><b class="text-bb mr-[1.5em]">03월</b>제57차 정기총회 개최</li>
            </ul>
            </div>
        </div>
<<<<<<< HEAD
        <div id="tab2" class="hidden container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2020</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
        <div x-show="selected == '2011'" id="tab2" class="hidden container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2 max-md:pl-32 max-md:after:left-16   max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16 mob:pl-16 mob:after:left-8">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2020</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>제56차 정기총회 개최 / 양영근(가스신문) 제29대 회장 연임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">10월</b>전문신문 경영인 세미나(충남 부여)</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>창립56주년 기념 강연회 및 정부포상 시상식</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2019</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2019</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>제55차 정기총회 개최</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">06월</b>전문신문의 경영혁신전략 세미나 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>창립 55주년 기념식 및 정부포상 시상식</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2018</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2018</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">03월</b>제54차 정기총회 개최 / 양영근(가스신문) 제28대 회장 취임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">09월</b>전문신문의 인터넷신문 진흥방안 세미나 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>창립54주년 기념식, 강연회, 시상식</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2017</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2017</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>제53차 정기총회 개최</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">06월</b>한일 전문신문협회 합동연수회 개최</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">09월</b>제40회 전문신문 경영인세미나 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>창립 53주년 전문신문의 날 기념식ㆍ강연회ㆍ시상식</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2016</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2016</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>제52차 정기총회 개최 / 이덕수(타임즈코어) 제27대 회장 연임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>제39회 전문신문 경영인세미나 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>창립52주년 전문신문의 날 기념식 및 정부포상 시상식</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2015</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2015</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>제51차 정기총회 개최</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">07월</b>협회 사무실 구입(당산동) 및 입주기념식</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">09월</b>제38회 전문신문 경영인세미나 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>창립51주년 전문신문의 날 기념식 및 정부포상 시상식</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2014</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2014</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>이덕수(틴타임즈) 제26대 회장 취임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>창조경제활성화를 위한 간담회 개최(민관합동 창조경제추진단)</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">05월</b>한ㆍ일 전문신문협회 합동연수회 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>협회 창립 50주년 및 50년사 발간 기념식</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2013</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2013</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">09월</b>전문신문 경영인 세미나 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>한국전문신문협회 창립49주년 및 전문신문의날 기념식 개최</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2012</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2012</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>김시중(한국섬유신문) 25대 회장 취임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">06월</b>한·일 전문신문협회 임원 합동연수회 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>한국전문신문협회 창립48주년 및 전문신문의날 기념식 개최</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2011</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2011</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>전문신문 우수인력 확보를 위한 언론학회·평화아카데미 협약체결</li>
                <li><b class="text-bb mr-[1.5em]">09월</b>박선규 문화체육관광부차관 초청강연회 개최</li>
            </ul>
            </div>
        </div>
<<<<<<< HEAD
        <div id="tab3" class="hidden container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2010</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
        <div x-show="selected == '2001'" id="tab3" class="hidden container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2 max-md:pl-32 max-md:after:left-16   max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16 mob:pl-16 mob:after:left-8 ">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2010</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>柳泰佑(보건신문) 24대 회장 취임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">05월</b>유인촌 문화체육관광부장관 초청강연회 개최</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>이용성 교수(한서대학교 신문방송학과) 초청강연회 개최</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2009</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">04월</b>한·일 전문신문협회 임원워크숍 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2008</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>한국전문신문협회 임원워크숍 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2007</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2009</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">04월</b>한·일 전문신문협회 임원워크숍 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2008</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>한국전문신문협회 임원워크숍 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2007</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">08월</b>남북정상회담 서울프레스센터 설치에 관한 회원사 취재지원</li>
                <li><b class="text-bb mr-[1.5em]">11월</b>한,중,일 전문신문협회 국제포럼 개최</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2006</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2006</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>金是中(한국섬유신문) 22대 회장 취임</li>
                <li><b class="text-bb mr-[1.5em]">06월</b>학계, 언론정보대학원, 포탈콘텐츠 업체와 <br>업무체결(경희대학교, 단국대학교, 양재미디어)</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2005</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2005</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>중소기업협동조합중앙회 지원 청년채용패키지사업 실시</li>
                <li><b class="text-bb mr-[1.5em]">06월</b>중국전문신문협회 교류체결</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2004</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2004</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>咸鏞軒(약업신문) 21대 회장 취임</li>
                <li><b class="text-bb mr-[1.5em]">05월</b>세계전문미디어협회 발족을 위한 한ㆍ일 전문신문협회 임원연수회 개최</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2003</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">10월</b>가칭 세계전문미디어협회 한ㆍ일 전문신문협회 준비위원회 구성</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2002</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">11월</b>월드컵축구대회 기여 대통령표창 수상</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2001</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2003</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">10월</b>가칭 세계전문미디어협회 한ㆍ일 전문신문협회 준비위원회 구성</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2002</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">11월</b>월드컵축구대회 기여 대통령표창 수상</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2001</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>張玉煥(교통신문) 20대 현 회장 취임</li>
                <li><b class="text-bb mr-[1.5em]">03월</b>전문신문정보센터 개관, 협회 홈페이지 개통</li>
            </ul>
            </div>
        </div>
<<<<<<< HEAD
        <div id="tab4" class="hidden container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">2000</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
        <div x-show="selected == '1991'" id="tab4" class="hidden container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2 max-md:pl-32 max-md:after:left-16   max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16 mob:pl-16 mob:after:left-8">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">2000</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">11월</b>전문신문정보센터 운영위원회 발족 및 방송발전기금 수주</li>
                <li><b class="text-bb mr-[1.5em]">10월</b>한·일전문신문협회 합동 포럼 개최</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1999</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">10월</b>환경문화상 제정 제1회 시상</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1998</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">10월</b>동암상 제정 제1회 시상</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1997</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">05월</b>가로편집 및 기사실명제 관련 좌담회개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1996</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">09월</b>「전문신문 경영인 한·일 합동세미나」 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1995</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1999</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">10월</b>환경문화상 제정 제1회 시상</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1998</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">10월</b>동암상 제정 제1회 시상</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1997</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">05월</b>가로편집 및 기사실명제 관련 좌담회개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1996</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">09월</b>「전문신문 경영인 한·일 합동세미나」 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1995</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>韓基昊(운송신문) 18대 회장 취임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>「사단법인 한국전문신문협회」로 명칭 변경</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>정기간행물 국립중앙도서관 납본업무 대행</li>
                <li><b class="text-bb mr-[1.5em]">10월</b>전문신문의 날 제정 및 제1회 기념식 거행</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1994</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">06월</b>주간신문 언론인 인명록 발간</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1993</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1994</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">06월</b>주간신문 언론인 인명록 발간</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1993</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">05월</b>전문신문 신규·경력기자 자체연수교육 실시</li>
                <li><b class="text-bb mr-[1.5em]">06월</b>「주간신문 정화위원회」 발족</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1992</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1992</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>공익광고 수주 배부</li>
                <li><b class="text-bb mr-[1.5em]">06월</b>「주간신문편람」 발간</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1991</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1991</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">02월</b>金在烈(한국세정신문) 16대 회장 취임</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>주간신문 슬로건 및 표어 공모·시상</li>
                <li><b class="text-bb mr-[1.5em]">08월</b>일본전문신문협회와 교류 체결</li>
            </ul>
            </div>
        </div>
<<<<<<< HEAD
        <div id="tab5" class="hidden container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1989</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
        <div x-show="selected == '1964'" id="tab5" class="hidden container2 text-[#6e6e6e] py-32 after:block after:w-[1px] after:h-full after:bg-grizzle-100 after:absolute relative after:top-0 after:left-1/2 max-md:pl-32 max-md:after:left-16   max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16 mob:pl-16 mob:after:left-8">
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1989</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">04월</b>윤리, 홍보, 사업 등 3개 특별위원회 구성</li>
                <li><b class="text-bb mr-[1.5em]">05월</b>「주간신문협회보」 창간</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1988</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">11월</b>「주간신문금고 설립 추진위」 발족</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1987</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1988</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">11월</b>「주간신문금고 설립 추진위」 발족</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1987</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">01월</b>정기간행물 정부납본업무 대행</li>
                <li><b class="text-bb mr-[1.5em]">09월</b>협회, 정당 간담회 개최</li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1985</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">02월</b>朴善奎(의학신문) 13대 회장 취임</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1984</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">04월</b>「청소년 선도를 위한 자율정화 결의대회」 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1981</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">02월</b>朴聖烈(교통신문) 11대 회장 취임</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1978</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">11월</b>「제1회 주간신문경영인세미나」 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1977</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">07월</b>「제1회 한국주간신문상」 시상</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1973</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">02월</b>黃 燁(주간전매) 7대 회장 취임</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1971</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">12월</b>「언론자율정화에 관한 결의」(협회 기자증 발급 및 지사 설치)</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1968</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">03월</b>「주간신문언론인세미나」 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1966</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">10월</b>「사단법인 한국주간신문협회」로 명칭 변경</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1965</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
                <li><b class="text-bb mr-[1.5em]">07월</b>「사단법인 한국주간신문발행인협회」 설립허가 승인</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-[1]">1964</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-400 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center">
            </div>
            <ul class="pl-[5em] max-w-4/5">
=======
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1985</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">02월</b>朴善奎(의학신문) 13대 회장 취임</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1984</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">04월</b>「청소년 선도를 위한 자율정화 결의대회」 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1981</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">02월</b>朴聖烈(교통신문) 11대 회장 취임</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1978</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">11월</b>「제1회 주간신문경영인세미나」 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1977</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">07월</b>「제1회 한국주간신문상」 시상</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1973</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">02월</b>黃 燁(주간전매) 7대 회장 취임</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1971</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">12월</b>「언론자율정화에 관한 결의」(협회 기자증 발급 및 지사 설치)</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1968</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">03월</b>「주간신문언론인세미나」 개최</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1966</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">10월</b>「사단법인 한국주간신문협회」로 명칭 변경</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1965</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
                <li><b class="text-bb mr-[1.5em]">07월</b>「사단법인 한국주간신문발행인협회」 설립허가 승인</li>
            </ul>
            </div>
            <div class="flex flex-wrap m-auto pl-his mb-[10em] relative max-md:block max-md:pl-0 max-md:mb-16">
            <div class="text-bb font-black text-[2.75rem] tracking-tighter leading-none max-md:mb-[0.5em] tab:text-4xl">1964</div>
            <div class="w-[1em] h-[1em] rounded-full border border-point-100 absolute top-[0.5em] z-10 left-1/2 ml-[-0.5em] before:bg-point-100 before:w-4/5 before:h-4/5 before:rounded-full before:block before:overflow-hidden flex justify-center items-center max-md:left-[-4rem] max-md:before:w-3/5 max-md:before:h-3/5 mob:left-[-2em]">
            </div>
            <ul class="pl-[5em] max-w-4/5 max-md:pl-0 max-md:max-w-full">
>>>>>>> bc662e7 (modified code)
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">11월</b>「한국주간신문협회」 창립총회 개최</li>
                <li class="mb-[0.5em]"><b class="text-bb mr-[1.5em]">12월</b>金衡翼(의사시보) 초대회장 취임</li>
                <li><b class="text-bb mr-[1.5em]">04월</b>「한국전문신문협회」 발족</li>
            </ul>
            </div>
        </div>
        </div>
<<<<<<< HEAD
</div>
=======

</div>
>>>>>>> bc662e7 (modified code)
