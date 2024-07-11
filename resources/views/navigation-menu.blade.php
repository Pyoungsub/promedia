<header 
    wire:ignore 
    x-data="{showSub:false}"
    id="header" 
    class="relative header border-b border-gray"
>
    <div class="bg-grizzle-100 text-[0.9rem] py-[0.4rem]">
        <div class="container 2xl:max-w-full">
        <ul class="flex justify-end">
            <li class="n-top-li"><a href="{{route('home')}}" class="px-[0.3rem]">HOME</a></li>
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
                <li class="n-top-li"><a href="{{route('register')}}" class="px-[0.3rem]">회원가입</a></li>
            @endguest
        </ul>
        </div>
    </div>
    <div class="container relative flex items-center justify-center nav 2xl:max-w-full">
        <h1 id="logo" class="logo w-[22.3rem] absolute left-4">
            <a href="{{route('home')}}" class="block w-100">
                <img src="{{asset('storage/company/logo.png')}}" alt="한국전문신문협회" class="">
            </a>
        </h1>
        <nav id="gnb" class="gnb ml-[12em]">
            <ul class="flex text-xl gnb-ul">
                <li 
                    class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"
                    x-data="{show:false}"
                    @mouseleave="show = false; showSub = false;"
                >
                    <a href="{{route('intro.greetings')}}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block" @mouseenter="show = true; showSub = true;">협회 소개</a>
                    <div 
                        x-cloak 
                        x-show="show"
                        class="depth2wrap absolute z-20 text-lg depth02 py-[0.8em]"
                    >
                        <ul class=" flex text-grizzle-800 flex-warp w-[30em] ">
                            <li><a href="{{route('intro.greetings')}}" class="block hover:text-point-400 px-[1.5em] border-r border-[#ccc]">인사말</a></li>
                            <li><a href="{{route('intro.history')}}" class="block hover:text-point-400 px-[1.5em] border-r border-[#ccc]">연혁</a></li>
                            <li><a href="{{route('intro.articles-of-incorporation')}}" class="block hover:text-point-400 px-[1.5em] border-r border-[#ccc]">정관</a></li>
                            <li><a href="{{route('intro.member')}}" class="block hover:text-point-400 px-[1.5em] border-r border-[#ccc]">조직도</a></li>
                            <li><a href="{{route('intro.location')}}" class="block hover:text-point-400 px-[1.5em]">찾아오시는 길</a></li>
                        </ul>
                    </div>
                </li>
                <li class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"><a href="{{route('member.company')}}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block">회원사 소개</a></li>
                <li class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"><a href="{{route('executive.history')}}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block">역대 임원</a></li>
                <li class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"><a href="{{route('pdf')}}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block">협회보PDF</a></li>
                <li class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"><a href="{{route('events.photos')}}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block">행사사진</a></li>
                <li class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"><a href="{{route('events.schedules')}}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block">행사일정</a></li>
                <li 
                    class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"
                    x-data="{show:false}"
                    @mouseleave="show = false; showSub = false"
                >
                    <a href="{{route('boards.references')}}" class="p-[1em] py-[1.8rem] duration-500 depth01_a block" @mouseenter="show = true; showSub = true;">자료실</a>
                    <div 
                        x-cloak 
                        x-show="show"
                        class="depth2wrap absolute z-20 text-lg depth02 py-[0.8em] right-0"
                    >
                        <ul class=" flex text-grizzle-800 flex-warp w-[13.5em] ">
                        <li><a href="{{route('boards.references')}}" class="block hover:text-point-400 px-[1.5em] border-r border-[#ccc]">자료실</a></li>
                        <li><a href="{{route('boards.press-passes')}}" class="block hover:text-point-400 px-[1.5em] border-[#ccc]">기자증발급</a></li>
                        </ul>
                    </div>
                </li>
                <li 
                    class="depth01 mx-[0.24em] relative after:block after:w-0 after:h-[3px] after:bg-point-300 after:left-1/2 after:absolute after:bottom-0 after:translate-x-center after:duration-500 hover:after:w-full"
                    x-data="{show:false}"
                    @mouseleave="show = false; showSub = false"
                >
                    <a href="/html/notice.php" class="p-[1em] py-[1.8rem] duration-500 depth01_a block" @mouseenter="show = true; showSub = true;">참여마당</a>
                    <div 
                        x-cloak 
                        x-show="show"
                        class="depth2wrap absolute z-20 text-lg depth02 py-[0.8em] right-0"
                    >
                        <ul class=" flex text-grizzle-800 flex-warp w-[27em] ">
                            <li><a href="" class="block hover:text-point-400 px-[1.5em] border-r border-[#ccc]">공지사항</a></li>
                            <li><a href="" class="block hover:text-point-400 px-[1.5em] border-r border-[#ccc]">보도자료</a></li>
                            <li><a href="" class="block hover:text-point-400 px-[1.5em] border-r border-[#ccc]">자유게시판</a></li>
                            <li><a href="" class="block hover:text-point-400 px-[1.5em] border-[#ccc]">회원사</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="navBtn" class="absolute z-10 cursor-pointer right-4">
        <span class="block bg-bb w-8 h-[3px] my-2 relative duration-500"></span>
        <span class="block bg-bb w-8 h-[3px] my-2 relative duration-500"></span>
        <span class="block bg-bb w-8 h-[3px] my-2 relative duration-500"></span>
        </div>
        <!-- #navBtn 클릭 시 햄버거 메뉴(#allNav) -->
    </div>
    <div id="allNav" class="fixed top-0 left-0 z-50 hidden w-screen h-screen bg-white">
        <div class="container relative">
            <div class="flex justify-between">
                <h1 class="w-[22.3rem] absolute left-4">
                <a href="{{route('home')}}" class="block w-100">
                    <img src="{{asset('storage/company/logo.png')}}" alt="한국전문신문협회" class="">
                </a>
                </h1>
                <button id="navX"><span class="block bg-bb w-8 h-[3px] my-2 relative rotate-45"></span><span class="block bg-bb w-8 h-[3px] my-2 relative rotate-[-45deg]"></span></button>
            </div>
            <ul class="">
                <li class="">
                <a href="{{route('intro.greetings')}}" class="">협회 소개</a>
                <div class="">
                    <ul class="">
                    <li><a href="/html/history.php" class="">연혁</a></li>
                    <li><a href="/html/jeong.php" class="">정관</a></li>
                    <li><a href="" class="">조직도</a></li>
                    <li><a href="/html/map.php" class="">찾아오시는 길</a></li>
                    </ul>
                </div>
                </li>
                <li class=""><a href="/html/memlist.php" class="">회원사 소개</a></li>
                <li class=""><a href="/html/executive.php" class="">역대 임원</a></li>
                <li class=""><a href="/html/pdf.php" class="">협회보PDF</a></li>
                <li class=""><a href="/html/photo.php" class="">행사사진</a></li>
                <li class=""><a href="/html/press.php" class="">기자증 발급</a></li>
                <li class="">
                <a href="/html/press.php" class="">자료실</a>
                <div class="">
                    <ul class=" flex text-grizzle-800 flex-warp w-[13.5em] ">
                        <li><a href="" class="">자료실</a></li>
                        <li><a href="/html/press.php" class="">기자증발급</a></li>
                    </ul>
                </div>
                </li>
                <li class="">
                <a href="/html/notice.php" class="">참여마당</a>
                <div class="">
                    <ul class="">
                        <li><a href="" class="">공지사항</a></li>
                        <li><a href="" class="">보도자료</a></li>
                        <li><a href="" class="">자유게시판</a></li>
                        <li><a href="" class="">회원사</a></li>
                    </ul>
                </div>
                </li>
            </ul>
        </div>
    </div>
    <div x-cloak x-show="showSub" class="depth2bg absolute top-[100%] left-0 w-full bg-white z-10 border-grizzle-100text-lg h-[3.2em] shadow-sh2 border-t"></div>
</header>