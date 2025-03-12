<header 
    id="header" 
    class="relative z-20 header max-lg:shadow-sh1" 
    :class="{'scroll' : scrolled}"
    wire:ignore 
    x-data="{
        showSub:false,
        menuFull:false,
    }"
>
    <div class="bg-grizzle-100 text-[0.9rem] py-[0.4rem]">
        <div class="container 2xl:max-w-full">
            <ul class="flex justify-end">
                <li class="n-top-li"><a href="/" class="px-[0.3rem]">HOME</a></li>
                @auth
                    <li class="n-top-li">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <a href="{{ route('logout') }}" class="px-[0.3rem]" onclick="event.preventDefault(); this.closest('form').submit();">로그아웃</a>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="n-top-li"><a href="{{route('login')}}" class="px-[0.3rem]">로그인</a></li>
                    <li class="n-top-li"><a href="{{route('signin')}}" class="px-[0.3rem]">회원가입</a></li>
                @endguest
            </ul>
        </div>
    </div>
    <div class="container relative flex items-center justify-center border-b nav 2xl:max-w-full max-lg:justify-start max-lg:py-4">
        <h1 id="logo" class="logo w-[22.3rem] absolute left-4 max-xl:w-[19rem] max-lg:relative max-lg:left-0 2sm:w-[17rem]">
            <a href="/" class="block w-full">
                <img src="{{ asset('storage/company/logo.png') }}" alt="한국전문신문협회" class="">
            </a>
        </h1>
        <nav id="gnb" class="gnb ml-[12em] max-lg:hidden">
            <ul class="flex text-xl gnb-ul">
                <li 
                    class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"
                    x-data="{show:false}"
                    @mouseleave="show = false; showSub = false;"
                >
                    <a href="{{route('intro.greetings')}}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block 2xl:px-[0.5em]" @mouseenter="show = true; showSub = true;">협회 소개</a>
                    <div 
                        x-cloak 
                        x-show="show"
                        class="depth2wrap absolute z-20 text-lg depth02 py-[0.8em]"
                    >
                        <div class="flex text-grizzle-800 flex-warp">
                            <a href="{{route('intro.greetings')}}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">인사말</p></a>
                            <a href="{{route('intro.history')}}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">연혁</p></a>
                            <a href="{{route('intro.articles-of-incorporation')}}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">정관</p></a>
                            <a href="{{route('intro.member')}}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">조직도</p></a>
                            <a href="{{ route('executive.history') }}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">역대임원</p></a>
                            <a href="{{route('intro.location')}}"><p class="hover:text-point-100 px-[1.5em] w-max">찾아오시는 길</p></a>
                        </div>
                    </div>
                </li>
                <li 
                    class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"
                    x-data="{show:false}"
                    @mouseleave="show = false; showSub = false;"
                >
                    <a href="{{ route('member.company') }}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block 2xl:px-[0.5em]" @mouseenter="show = true; showSub = true;">회원사</a>
                    <div 
                        x-cloak 
                        x-show="show"
                        class="depth2wrap absolute z-20 text-lg depth02 py-[0.8em]"
                    >
                        <div class="flex text-grizzle-800 flex-warp">
                            <a href="{{route('member.company')}}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">회원사 매체</p></a>
                            <a href="{{ route('member.lists') }}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">회원사 소개</p></a>
                            <a href="{{ route('member.create-account') }}"><p class="hover:text-point-100 px-[1.5em] border-[#ccc] w-max">회원가입안내</p></a>
                        </div>
                    </div>
                </li>
                <li 
                    class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"
                    x-data="{show:false}"
                    @mouseleave="show = false; showSub = false;"
                >
                    <a href="{{ route('events.photos') }}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block 2xl:px-[0.5em]" @mouseenter="show = true; showSub = true;">협회활동</a>
                    <div 
                        x-cloak 
                        x-show="show"
                        class="depth2wrap absolute z-20 text-lg depth02 py-[0.8em]"
                    >
                        <div class="flex text-grizzle-800">
                            <a href="{{route('events.photos')}}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">행사사진</p></a>
                            <a href="{{ route('events.schedules') }}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">행사 일정</p></a>
                            <a href="{{ route('pdf') }}"><p class="hover:text-point-100 px-[1.5em] border-[#ccc] w-max">전문신문협회보</p></a>
                        </div>
                    </div>
                </li>
                <li 
                    class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"
                    x-data="{show:false}"
                    @mouseleave="show = false; showSub = false;"
                >
                    <a href="{{ route('boards.references') }}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block 2xl:px-[0.5em]" @mouseenter="show = true; showSub = true;">자료실</a>
                    <div
                        x-cloak 
                        x-show="show" 
                        class="depth2wrap absolute z-20 text-lg depth02 py-[0.8em] right-0"
                    >
                        <div class="flex text-grizzle-800">
                            <a href="{{ route('boards.references') }}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">자료실</p></a>
                            <a href="{{ route('boards.press-passes') }}"><p class="hover:text-point-100 px-[1.5em] border-[#ccc] w-max">기자증발급</p></a>
                        </div>
                    </div>
                </li>
                <li 
                    class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"
                    x-data="{show:false}"
                    @mouseleave="show = false; showSub = false;"
                >
                    <a href="{{ route('boards.announcements') }}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block 2xl:px-[0.5em]" @mouseenter="show = true; showSub = true;">참여마당</a>
                    <div 
                        x-cloak 
                        x-show="show"
                        class="depth2wrap absolute z-20 text-lg depth02 py-[0.8em] right-0"
                    >
                        <div class="flex text-grizzle-800">
                            <a href="{{ route('boards.announcements') }}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] min-w-fit w-max">공지사항</p></a>
                            <a href="{{ route('boards.media') }}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">보도자료</p></a>
                            <a href="{{ route('boards.member-news') }}"><p class="hover:text-point-100 px-[1.5em] border-r border-[#ccc] w-max">회원사 소식</p></a>
                            <a href="{{ route('boards.general') }}"><p class="hover:text-point-100 px-[1.5em] border-[#ccc] w-max">자유게시판</p></a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="navBtn" class="absolute cursor-pointer right-4" @click="menuFull = true; document.body.style.overflowY = 'hidden';">
            <span class="block bg-bb w-8 h-[3px] my-2 relative duration-500"></span>
            <span class="block bg-bb w-8 h-[3px] my-2 relative duration-500"></span>
            <span class="block bg-bb w-8 h-[3px] my-2 relative duration-500"></span>
        </div>
    </div>
    <div x-cloak x-show="menuFull" id="allNav" class="fixed top-0 left-0 z-30 block w-screen h-screen pl-8 bg-bottom bg-no-repeat bg-contain bg-grizzle-200 bg-kopma tab:bg-popbg tab:bg-none tab:font-noto">
        <div class="relative items-center justify-end hidden w-full h-full p-0 tab:flex">
            <button class="absolute block w-8 h-8 right-12 top-6" @click="menuFull = false; document.body.style.overflowY = 'visible';">
                <span class="block bg-bb w-10 h-[3px] rotate-45"></span>
                <span class="block bg-bb w-10 h-[3px] rotate-[-45deg] mt-[-3px]"></span>
            </button>
            <div class="w-full bg-grizzle-200 max-w-[400px] p-4 h-full block pt-8">
                <div class="w-full">
                    <h2 class="block font-titleO text-bb mb-[1em] text-4xl">한국전문신문협회</h2>
                </div>
                <ul class="text-lg w-full block text-bb"
                    x-data="{
                        currentRoute: '{{Route::currentRouteName()}}',
                    }"
                >
                    <li 
                        class="" @click.outside="active = false"
                        x-data="{
                            active:false,
                        }"
                    >
                        <span @click="active =! active" class="block flex items-center justify-between w-full cursor-pointer text-xl relative p-4 font-noto font-bold" :class="{'bg-point-100 text-white': currentRoute == 'home' || active}">
                            협회 소개
                            <svg :class="active ? 'stroke-white' : 'stroke-black'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path x-show="!active" d="M6 9l6 6 6-6"/>
                                <path x-show="active" d="M18 15l-6-6-6 6"/>
                            </svg>
                        </span>
                        <!-- 요청: 모바일 1차 depth는 소메뉴가 있을 때 클릭 시 -->
                        <div x-show="active" class="bg-grizzle-300 overflow-hidden">
                            <ul class="p-4">
                                <li><a href="{{ route('intro.greetings') }}" class="block mb-[0.5em] pl-2">인사말</a></li>
                                <li><a href="{{ route('intro.history') }}" class="block mb-[0.5em] pl-2">연혁</a></li>
                                <li><a href="{{ route('intro.articles-of-incorporation') }}" class="block mb-[0.5em] pl-2">정관</a></li>
                                <li><a href="{{ route('intro.member') }}" class="block mb-[0.5em] pl-2">조직도</a></li>
                                <li><a href="{{ route('executive.history') }}" class="block mb-[0.5em] pl-2">역대임원</a></li>
                                <li><a href="{{ route('intro.location') }}" class="block pl-2">찾아오시는 길</a></li>
                            </ul>
                        </div>
                    </li>
                    <li 
                        class="" @click.outside="active = false"
                        x-data="{
                            active:false,
                        }"
                    >
                        <span @click="active =! active" class="block flex items-center justify-between w-full cursor-pointer text-xl relative p-4 font-noto font-bold" :class="{'bg-point-100 text-white': currentRoute == 'home' || active}">
                            회원사 소식
                            <svg :class="active ? 'stroke-white' : 'stroke-black'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path x-show="!active" d="M6 9l6 6 6-6"/>
                                <path x-show="active" d="M18 15l-6-6-6 6"/>
                            </svg>
                        </span>
                        <!-- 요청: 모바일 1차 depth는 소메뉴가 있을 때 클릭 시 -->
                        <div x-show="active" class="bg-grizzle-300 overflow-hidden">
                            <ul class="p-4">
                                <li><a href="{{ route('member.company') }}" class="block mb-[0.5em] pl-2">회원사 매체</a></li>
                                <li><a href="{{ route('member.create-account') }}" class="block pl-2">회원가입 안내</a></li>
                            </ul>
                        </div>
                    </li>
                    <li 
                        class="" @click.outside="active = false"
                        x-data="{
                            active:false,
                        }"
                    >
                        <span @click="active =! active" class="block flex items-center justify-between w-full cursor-pointer text-xl relative p-4 font-noto font-bold" :class="{'bg-point-100 text-white': currentRoute == 'home' || active}">
                            협회활동
                            <svg :class="active ? 'stroke-white' : 'stroke-black'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path x-show="!active" d="M6 9l6 6 6-6"/>
                                <path x-show="active" d="M18 15l-6-6-6 6"/>
                            </svg>
                        </span>
                        <!-- 요청: 모바일 1차 depth는 소메뉴가 있을 때 클릭 시 -->
                        <div x-show="active" class="bg-grizzle-300 overflow-hidden">
                            <ul class="p-4">
                                <li><a href="{{ route('events.photos') }}" class="block mb-[0.5em] pl-2">행사사진</a></li>
                                <li><a href="{{ route('events.schedules') }}" class="block mb-[0.5em] pl-2">행사일정</a></li>
                                <li><a href="{{ route('pdf') }}" class="block mb-[0.5em] pl-2">전문신문협회보</a></li>
                            </ul>
                        </div>
                    </li>
                    <li 
                        class="" 
                        @click.outside="active = false"
                        x-data="{
                            active:false,
                            routeArray:['boards.references', 'boards.press-passes', 'member.create-account'],
                            init()
                            {
                                if(this.routeArray.includes(currentRoute))
                                {
                                    this.active = true;
                                }
                            }
                        }"
                    >
                        <span @click="active =! active" class="block w-full flex items-center justify-between cursor-pointer text-xl relative p-4 font-noto font-bold" :class="{'bg-point-100 text-white': currentRoute == 'boards.references' || active}">
                            자료실
                            <svg :class="active ? 'stroke-white' : 'stroke-black'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path x-show="!active" d="M6 9l6 6 6-6"/>
                                <path x-show="active" d="M18 15l-6-6-6 6"/>
                            </svg>
                        </span>
                        <div x-show="active" class="bg-grizzle-300 overflow-hidden">
                            <ul class="p-4">
                                <li><a href="{{ route('boards.references') }}" class="block mb-[0.5em] pl-2">자료실</a></li>
                                <li><a href="{{ route('boards.press-passes') }}" class="block pl-2">기자증발급</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=""
                        @click.outside="active = false"
                        x-data="{
                            active:false,
                            routeArray:['boards.announcements', 'boards.media', 'boards.general', 'member.lists'],
                            init()
                            {
                                if(this.routeArray.includes(currentRoute))
                                {
                                    this.active = true;
                                }
                            }
                        }"
                    >
                        <span @click="active =! active" class="block w-full flex items-center justify-between cursor-pointer text-xl relative p-4 font-noto font-bold" :class="{'bg-point-100 text-white': currentRoute == 'boards.announcements' || active}">
                            참여마당
                            <svg :class="active ? 'stroke-white' : 'stroke-black'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path x-show="!active" d="M6 9l6 6 6-6"/>
                                <path x-show="active" d="M18 15l-6-6-6 6"/>
                            </svg>
                        </span>
                        <div x-show="active" class="bg-grizzle-300 overflow-hidden">
                            <ul class="p-4">
                                <li><a href="{{ route('boards.announcements') }}" class="block mb-[0.5em] pl-2">공지사항</a></li>
                                <li><a href="{{ route('boards.media') }}" class="block mb-[0.5em] pl-2">보도자료</a></li>
                                <li><a href="{{ route('boards.member-news') }}" class="block pl-2">회원사 소식</a></li>
                                <li><a href="{{ route('boards.general') }}" class="block mb-[0.5em] pl-2">자유게시판</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container relative flex items-center w-full h-full tab:hidden">
            <button class="absolute block w-8 h-8 right-12 top-14" @click="menuFull = false; document.body.style.overflowY = 'visible';">
                <span class="block bg-bb w-10 h-[3px] rotate-45"></span>
                <span class="block bg-bb w-10 h-[3px] rotate-[-45deg] mt-[-3px]"></span>
            </button>
            <div class="flex flex-wrap w-full">
                <div class="w-full sm:w-1/4 max-lg:w-full">
                    <h2 class="mt-8 block text-5xl font-titleO text-bb mb-[1em] pl-[1em] max-lg:text-4xl max-lg:pl-0">한국전문신문협회</h2>
                </div>
                <ul class="flex flex-wrap w-3/4 text-lg text-grizzle-800 max-lg:w-full">
                    <li class="group w-1/4 p-[1.5em] border-l border-cc mb-8 relative">
                        <span class="absolute border-l-3 w-full h-0 left-0 top-10 border-point-100 group-hover:top-0 group-hover:h-full transition-all duration-500"></span>
                        <span class="block w-full cursor-pointer text-4xl font-titleO text-bb mb-[1em] relative max-lg:text-3xl">협회 소개</span>
                        <!--  요청: 1차 depth li에 hover시 a:before height가 0에서 100%로 증가-->
                        <div class="relative">
                            <ul class="">
                                <li><a href="{{ route('intro.greetings') }}" class="block mb-[0.5em] ">인사말</a></li>
                                <li><a href="{{ route('intro.history') }}" class="block mb-[0.5em]">연혁</a></li>
                                <li><a href="{{ route('intro.articles-of-incorporation') }}" class="block mb-[0.5em]">정관</a></li>
                                <li><a href="{{ route('intro.member') }}" class="block mb-[0.5em]">조직도</a></li>
                                <li><a href="{{ route('executive.history') }}" class="block mb-[0.5em]">역대 임원</a></li>
                                <li><a href="{{ route('intro.location') }}" class="block">찾아오시는 길</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="group w-1/4 p-[1.5em] border-l border-cc mb-8 relative">
                        <span class="absolute border-l-3 w-full h-0 left-0 top-10 border-point-100 group-hover:top-0 group-hover:h-full transition-all duration-500"></span>
                        <span class="block w-full cursor-pointer text-4xl font-titleO text-bb mb-[1em] relative max-lg:text-3xl">회원사</span>
                        <div class="relative">
                            <ul class="">
                                <li><a href="{{ route('member.lists') }}" class="block mb-[0.5em]">회원사 소개</a></li>
                                <li><a href="{{route('member.company')}}" class="block mb-[0.5em] ">회원사 매체</a></li>
                                <li><a href="{{ route('member.create-account') }}" class="block">회원가입 안내</a></li>
                            </ul>
                        </div>
                    </li>
                    <li 
                        class="group w-1/4 p-[1.5em] border-l border-cc mb-8 relative"
                    >
                        <span class="absolute border-l-3 w-full h-0 left-0 top-10 border-point-100 group-hover:top-0 group-hover:h-full transition-all duration-500"></span>
                        <a href="{{ route('pdf') }}" class="block w-full cursor-pointer text-4xl font-titleO text-bb mb-[1em] relative max-lg:text-3xl">협회활동</a>
                        <div class="relative">
                            <ul class="">
                                <li><a href="{{ route('events.photos') }}" class="block mb-[0.5em] ">행사사진</a></li>
                                <li><a href="{{ route('events.schedules') }}" class="block mb-[0.5em] ">행사일정</a></li>
                                <li><a href="{{ route('pdf') }}" class="block">전문신문협회보</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="group w-1/4 p-[1.5em] border-l border-cc mb-8 relative">
                        <span class="absolute border-l-3 w-full h-0 left-0 top-10 border-point-100 group-hover:top-0 group-hover:h-full transition-all duration-500"></span>
                        <span href="{{ route('boards.references') }}" class="block w-full cursor-pointer text-4xl font-titleO text-bb mb-[1em] relative max-lg:text-3xl">자료실</span>
                        <div class="relative">
                            <ul class="">
                                <li><a href="{{ route('boards.references') }}" class="block mb-[0.5em]">자료실</a></li>
                                <li><a href="{{ route('boards.press-passes') }}" class="block mb-[0.5em]">기자증발급</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="group w-1/4 p-[1.5em] border-l border-cc mb-8 relative">
                        <span class="absolute border-l-3 w-full h-0 left-0 top-10 border-point-100 group-hover:top-0 group-hover:h-full transition-all duration-500"></span>
                        <span class="block w-full cursor-pointer text-4xl font-titleO text-bb mb-[1em] relative max-lg:text-3xl">참여마당</span>
                        <div class="relative">
                            <ul class="">
                                <li><a href="{{ route('boards.announcements') }}" class="block mb-[0.5em]">공지사항</a></li>
                                <li><a href="{{ route('boards.media') }}" class="block mb-[0.5em]">보도자료</a></li>
                                <li><a href="{{ route('boards.member-news') }}" class="block mb-[0.5em]">회원사소식</a></li>
                                <li><a href="{{ route('boards.general') }}" class="block mb-[0.5em]">자유게시판</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div x-cloak x-show="showSub" class="depth2bg absolute top-[100%] left-0 w-full bg-white z-10 border-grizzle-100text-lg h-[3.2em] shadow-sh2 max-lg:hidden"></div>
</header>