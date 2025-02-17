<div 
<<<<<<< HEAD
    class="bg-center bg-no-repeat bg-cover bg-subbg1"
=======
    class="relative"
>>>>>>> bc662e7 (modified code)
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
<<<<<<< HEAD

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
=======
    <div class="flex flex-wrap items-center h-[40rem] relative justify-center max-xl:h-[32rem] max-lg:h-[28rem] max-md:h-96 tab:h-80 mob:h-60 2sm:h-52 max-3sm:h-48 bg-center bg-no-repeat bg-cover bg-subbg1">
        <div class="text-center text-white mt-[-2em] tab:mt-0">
            <p class="tit3 mb-[5px]">협회소개</p>
            <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto" x-text="pageTitle"></h3>
        </div>
    </div>
    <div class="absolute bottom-0 left-1/2 container2 translate-x-center font-bold text-[1.3rem] text-center max-lg:text-lg mob:relative mob:mt-8 z-10">
        <div 
            class="hidden mob:block relative"
            x-data="{
                active:false
            }"
            @click.outside="active = false"
        >
            <div class="border border-point-300 py-[0.8em] relative bg-white" @click="active =! active">
                <span x-text="pageTitle"></span><span class="absolute block w-3 h-3 mt-[-0.4rem] border-b-2 border-r-2 border-cc right-4 top-1/2 duration-500" :class="active ? 'rotate-225': 'rotate-45'"></span>
            </div>
            <div class="absolute w-full bg-white pt-4 pb-8 border-b" x-show="active">
                <div class="divide-y border">
                    <template x-if="pageTitle !== '인사말'">
                        <a href="{{route('intro.greetings')}}" class="block py-[1.4em] max-xl:py-[1.2em] max-lg:py-[1em] tab:py-[0.8em]">
                            인사말<span class=" w-full absolute block h-[3px] bg-point-300 bottom-[-1px] duration-500 left-0 transition-x-center mob:hidden"></span>
                        </a>
                    </template>
                    <template x-if="pageTitle !== '연혁'">
                        <a href="{{route('intro.history')}}" class="block py-[1.4em] max-xl:py-[1.2em] max-lg:py-[1em] tab:py-[0.8em]">
                            연혁<span class="w-0 absolute block h-[3px] bg-point-100 bottom-[-1px] duration-500 left-0 transition-x-center mob:hidden"></span>
                        </a>
                    </template>
                    <template x-if="pageTitle !== '정관'">
                        <a href="{{route('intro.articles-of-incorporation')}}" class="block py-[1.4em] max-xl:py-[1.2em] max-lg:py-[1em] tab:py-[0.8em]">
                            정관<span class="w-0 absolute block h-[3px] bg-point-100 bottom-[-1px] duration-500 left-0 transition-x-center mob:hidden"></span>
                        </a>
                    </template>
                    <template x-if="pageTitle !== '조직도'">
                        <a href="{{route('intro.member')}}" class="block py-[1.4em] max-xl:py-[1.2em] max-lg:py-[1em] tab:py-[0.8em]">
                            조직도<span class="w-0 absolute block h-[3px] bg-point-100 bottom-[-1px] duration-500 left-0 transition-x-center mob:hidden"></span>
                        </a>
                    </template>
                    <template x-if="pageTitle !== '찾아오시는 길'">
                        <a href="{{route('intro.location')}}" class="block py-[1.4em] max-xl:py-[1.2em] max-lg:py-[1em] tab:py-[0.8em]">
                            찾아오시는 길<span class="w-0 absolute block h-[3px] bg-point-100 bottom-[-1px] duration-500 left-0 transition-x-center mob:hidden"></span>
                        </a>
                    </template>
                </div>
            </div>
        </div>
        <div class="max-w-cont mx-auto grid grid-cols-5 w-full bg-white flex flex-wrap text-[#555] border-b border-grizzle-300 mob:border-0 mob:bg-point-300 mob:text-white mob:h-0 mob:overflow-hidden">
>>>>>>> bc662e7 (modified code)
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
<<<<<<< HEAD
=======


>>>>>>> bc662e7 (modified code)
        </div>
    </div>
</div>