<div 
    class="relative"
    x-data="{
        currentRoute: '{{Route::currentRouteName()}}',
        pageTitle: '{{env('APP_NAME')}}',
        updatePageTitle() {
            switch (this.currentRoute) {
                case 'member.company':
                    this.pageTitle = '회원사 매체';
                    break;
                case 'boards.announces':
                    this.pageTitle = '회원사 매체';
                    break;
                case 'member.lists':
                    this.pageTitle = '회원사 소개';
                    break;
                case 'member.create-account':
                    this.pageTitle = '회원가입안내';
                    break;
                case 'member.create-account-view':
                    this.pageTitle = '회원가입안내';
                    break;
                case 'boards.general':
                    this.pageTitle = '자유게시판';
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
    <div class="flex flex-wrap items-center h-[40rem] relative justify-center max-xl:h-[32rem] max-lg:h-[28rem] max-md:h-96 tab:h-80 mob:h-60 2sm:h-52 max-3sm:h-48 bg-center bg-no-repeat bg-cover bg-subbg6">
        <div class="text-center text-white mt-[-2em] tab:mt-0">
            <p class="tit3 mb-[5px]">회원사</p>
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
                    <template x-if="pageTitle !== '회원사 매체'">
                        <a href="{{route('member.company')}}" class="block py-[1.4em] max-xl:py-[1.2em] max-lg:py-[1em] tab:py-[0.8em]">
                            회원사 매체<span class=" w-full absolute block h-[3px] bg-point-300 bottom-[-1px] duration-500 left-0 transition-x-center mob:hidden"></span>
                        </a>
                    </template>
                    <template x-if="pageTitle !== '회원사 소개'">
                        <a href="{{route('member.lists')}}" class="block py-[1.4em] max-xl:py-[1.2em] max-lg:py-[1em] tab:py-[0.8em]">
                            회원사 소개<span class="w-0 absolute block h-[3px] bg-point-100 bottom-[-1px] duration-500 left-0 transition-x-center mob:hidden"></span>
                        </a>
                    </template>
                    <template x-if="pageTitle !== '회원가입안내'">
                        <a href="{{route('member.create-account')}}" class="block py-[1.4em] max-xl:py-[1.2em] max-lg:py-[1em] tab:py-[0.8em]">
                            회원가입안내<span class="w-0 absolute block h-[3px] bg-point-100 bottom-[-1px] duration-500 left-0 transition-x-center mob:hidden"></span>
                        </a>
                    </template>
                </div>
            </div>
        </div>
        <div class="max-w-cont mx-auto grid grid-cols-3 w-full bg-white flex flex-wrap text-[#555] border-b border-grizzle-300 mob:border-0 mob:bg-point-300 mob:text-white mob:h-0 mob:overflow-hidden">
            <div class="relative font-bold border-r border-solid border-grizzle-300 group" :class="currentRoute == 'member.company' ? 'text-point-300' : ''"> 
                <a href="{{route('member.company')}}" class="block py-[1.4em] hover:text-point">회원사 매체</a>
                <span 
                    class="absolute bottom-[-1px] h-[3px] left-1/2 -translate-x-1/2" 
                    :class="currentRoute == 'member.company' || currentRoute == 'boards.announces' ? 'bg-point-300 w-full' : 'w-0 bg-point-400 transform transition-all duration-500 ease-out group-hover:w-full'"
                ></span>
            </div>
            <div class="relative font-bold border-r border-solid border-grizzle-300 group" :class="currentRoute == 'member.lists' ? 'text-point-300' : ''"> 
                <a href="{{route('member.lists')}}" class="block py-[1.4em] hover:text-point">회원사 소개</a>
                <span 
                    class="absolute bottom-[-1px] h-[3px] left-1/2 -translate-x-1/2" 
                    :class="currentRoute == 'member.lists' ? 'bg-point-300 w-full' : 'w-0 bg-point-400 transform transition-all duration-500 ease-out group-hover:w-full'"
                ></span>
            </div>
            <div class="relative font-bold border-r border-solid border-grizzle-300 group" :class="currentRoute == 'member.create-account' ? 'text-point-300' : ''"> 
                <a href="{{route('member.create-account')}}" class="block py-[1.4em] hover:text-point">회원가입안내</a>
                <span 
                    class="absolute bottom-[-1px] h-[3px] left-1/2 -translate-x-1/2" 
                    :class="currentRoute == 'member.create-account' || currentRoute == 'member.create-account-view' ? 'bg-point-300 w-full' : 'w-0 bg-point-400 transform transition-all duration-500 ease-out group-hover:w-full'"
                ></span>
            </div>
        </div>
    </div>
</div>