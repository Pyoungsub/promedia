<div 
    class="bg-center bg-no-repeat bg-cover bg-subbg1"
    x-data="{
        currentRoute: '{{Route::currentRouteName()}}',
        pageTitle: '{{env('APP_NAME')}}',
        updatePageTitle() {
            switch (this.currentRoute) {
                case 'intro.greetings':
                    this.pageTitle = '인사말';
                    break;
                case 'intro.history':
                    this.pageTitle = '연혁';
                    break;
                case 'intro.articles-of-incorporation':
                    this.pageTitle = '정관';
                    break;
                case 'intro.member':
                    this.pageTitle = '조직도';
                    break;
                case 'intro.location':
                    this.pageTitle = '찾아오시는 길';
                    break;
                default:
                    this.pageTitle = 'Default Title';
            }
        },
        init(){
            this.updatePageTitle();
        }
    }"
>

    <!-- 
    대메뉴별로 타이틀과 배경이 다르게 들어감 
    회원사소개 : subbg2 (2차 메뉴 없음)
    역대임원 : subbg3 (2차 메뉴 없음)
    기자증 발급 : subbg4 (2차 메뉴 없음)
    자료실 : subbg5
    참여마당 : subbg6
    협회보 : subbg7 (2차 메뉴 없음)
    행사사진 : subbg8 (2차 메뉴 없음)
    행사일정 : subbg9 (2차 메뉴 없음)
    -->
    <div class="container2 flex flex-wrap items-center h-[40rem] relative justify-center">
        <div class="text-center text-white">
            <p class="tit3 mb-[5px]">협회소개</p>
            <!-- 2차메뉴가 있는 경우 대메뉴명 / 없는 경우는 삭제 -->
            <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto" x-text="pageTitle"></h3>
            <!-- 대메뉴명 / 2차메뉴가 있는 경우에는 2차메뉴명-->
        </div>
        <div class="absolute bottom-0 left-0 w-full bg-white text-[1.3rem] text-center grid grid-cols-5 text-[#555] border-b border-grizzle-300">
            <div class="relative font-bold border-r border-solid border-grizzle-300 group" :class="currentRoute == 'intro.greetings' ? 'text-point-300' : ''"> 
                <a href="{{route('intro.greetings')}}" class="block py-[1.4em] hover:text-point">인사말</a>
                <span 
                    class="absolute bottom-[-1px] h-[3px] left-1/2 -translate-x-1/2" 
                    :class="currentRoute == 'intro.greetings' ? 'bg-point-300 w-full' : 'w-0 bg-point-400 transform transition-all duration-500 ease-out group-hover:w-full'"
                ></span>
            </div>
            <div class="relative font-bold border-r border-solid border-grizzle-300 group" :class="currentRoute == 'intro.history' ? 'text-point-300' : ''"> 
                <a href="{{route('intro.history')}}" class="block py-[1.4em] hover:text-point">연혁</a>
                <span 
                    class="absolute bottom-[-1px] h-[3px] left-1/2 -translate-x-1/2" 
                    :class="currentRoute == 'intro.history' ? 'bg-point-300 w-full' : 'w-0 bg-point-400 transform transition-all duration-500 ease-out group-hover:w-full'"
                ></span>
            </div>
            <div class="relative font-bold border-r border-solid border-grizzle-300 group" :class="currentRoute == 'intro.articles-of-incorporation' ? 'text-point-300' : ''"> 
                <a href="{{route('intro.articles-of-incorporation')}}" class="block py-[1.4em] hover:text-point">정관</a>
                <span 
                    class="absolute bottom-[-1px] h-[3px] left-1/2 -translate-x-1/2" 
                    :class="currentRoute == 'intro.articles-of-incorporation' ? 'bg-point-300 w-full' : 'w-0 bg-point-400 transform transition-all duration-500 ease-out group-hover:w-full'"
                ></span>
            </div>
            <div class="relative font-bold border-r border-solid border-grizzle-300 group" :class="currentRoute == 'intro.member' ? 'text-point-300' : ''"> 
                <a href="{{route('intro.member')}}" class="block py-[1.4em] hover:text-point">조직도</a>
                <span 
                    class="absolute bottom-[-1px] h-[3px] left-1/2 -translate-x-1/2" 
                    :class="currentRoute == 'intro.member' ? 'bg-point-300 w-full' : 'w-0 bg-point-400 transform transition-all duration-500 ease-out group-hover:w-full'"
                ></span>
            </div>
            <div class="relative font-bold border-r border-solid border-grizzle-300 group" :class="currentRoute == 'intro.location' ? 'text-point-300' : ''"> 
                <a href="{{route('intro.location')}}" class="block py-[1.4em] hover:text-point">찾아오시는 길</a>
                <span 
                    class="absolute bottom-[-1px] h-[3px] left-1/2 -translate-x-1/2" 
                    :class="currentRoute == 'intro.location' ? 'bg-point-300 w-full' : 'w-0 bg-point-400 transform transition-all duration-500 ease-out group-hover:w-full'"
                ></span>
            </div>
        </div>
    </div>
</div>