<div id="m_sec2" class="py-[10rem] max-xl:py-[7rem] max-lg:py-[5rem] bg-mainsec2 bg-cover bg-no-repeat bg-center">
    <!--div class="container ">
        <div class="grid grid-cols-3 gap-6 max-lg:grid-cols-2 mob:grid-cols-1">
            <div class="text-white">
                <div class="bg-point-100 py-[3.6rem] px-8 h-full text-[1.25rem] font-score max-xl:text-[1.1rem] tab:text-base mob:text-xl mob:py-8">
                    <div class="h-full justify-center flex border-[#5477be] border-y flex-col max-lg:py-[2em]">
                        <h4 class="tit5 mb-[0.4em]">사무국 연락처</h4>
                        <h4 class="tit5 text-[#5ac2f5] flex items-center mb-[1.5em]"><span class="material-symbols-rounded mr-[0.3em]">call</span>02-334-7251</h4>
                        <ul class="">
                            <li class="mb-[0.5em]"><span class="text-bold after1">팩스</span><span class="cont">02-334-7279</span></li>
                            <li class=""><span class="text-bold after1">메일</span><span class="cont">kosna1964@naver.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-white">
                <div class="bg-[#2e3ba4] py-[3.6rem] px-8 h-full text-[1.25rem] font-score max-xl:text-[1.1rem] tab:text-base mob:text-xl mob:py-8">
                    <div class="h-full justify-center flex border-[#5477be] border-y flex-col max-lg:py-[2em]">
                    <h4 class="tit5 mb-[0.4em]">입회비 및 회비 입금 계좌</h4>
                    <h4 class="tit5 text-[#5ac2f5] flex items-center mb-[1.5em]"><span class="material-symbols-rounded mr-[0.3em]">id_card</span>예금주 : (사)한국전문신문협회</h4>
                    <ul class="">
                        <li class="mb-[0.5em]"><span class="after1"><img class="h-[1.4em] inline align-middle" src="{{ asset('storage/company/kb_bank_logo.png') }}" alt="KB 국민은행"></span><span class="cont">009-01-1135-182</span></li>
                        <li class=""><span class="after1"><img class="h-[1.4em] inline align-middle" src="{{ asset('storage/company/shinhan_logo.png') }}" alt="신한은행"></span><span class="cont">100-003-283205</span></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="skin4 max-lg:col-span-2 mob:col-auto">
                <div class="bg-white py-[3.6rem] px-[2rem]">
                    <h4 class="text-center tit5"><a href="{{route('pdf')}}">협회보 PDF</a></h4>
                    <div class="flex justify-between mt-8"
                        x-data="{
                            show_pdf:1
                        }"
                    >
                        <div class="relative">
                            <ul class="h-full overflow-hidden">
                                <li class="previewLi h-full border border-[#ddd]" :class="show_pdf === 1 ? 'block' : 'hidden'"><a href="" class="block w-[200px] h-full bg-cover background-top-center background-no-repeat max-xl:w-[160px]" style="background-image: url({{asset('storage/pdf/pdf_preview_01.jpg')}});"></a></li>
                                <li class="previewLi h-full border border-[#ddd]" :class="show_pdf === 2 ? 'block' : 'hidden'"><a href="" class="block w-[200px] h-full bg-cover background-top-center background-no-repeat max-xl:w-[160px]" style="background-image: url({{asset('storage/pdf/pdf_preview_02.jpg')}});"></a></li>
                                <li class="previewLi h-full border border-[#ddd]" :class="show_pdf === 3 ? 'block' : 'hidden'"><a href="" class="block w-[200px] h-full bg-cover background-top-center background-no-repeat max-xl:w-[160px]" style="background-image: url({{asset('storage/pdf/pdf_preview_03.jpg')}});"></a></li>
                                <li class="previewLi h-full border border-[#ddd]" :class="show_pdf === 4 ? 'block' : 'hidden'"><a href="" class="block w-[200px] h-full bg-cover background-top-center background-no-repeat max-xl:w-[160px]" style="background-image: url({{asset('storage/pdf/pdf_preview_04.jpg')}});"></a></li>
                            </ul>
                            <ul class="flex w-full absolute justify-center bottom-[-1.5rem]">
                                <li class="dotLi border border-bb rounded-full w-[8px] h-[8px] mx-4" :class="{'bg-point-100' : show_pdf === 1}"></li>
                                <li class="dotLi border border-bb rounded-full w-[8px] h-[8px] mx-4" :class="{'bg-point-100' : show_pdf === 2}"></li>
                                <li class="dotLi border border-bb rounded-full w-[8px] h-[8px] mx-4" :class="{'bg-point-100' : show_pdf === 3}"></li>
                                <li class="dotLi border border-bb rounded-full w-[8px] h-[8px] mx-4" :class="{'bg-point-100' : show_pdf === 4}"></li>
                            </ul>
                        </div>
                        <ul class="more2box border-y border-[#ddd] w-calc3 font-bold max-xl:w-calc7 max-lg:w-calc8 divide-y divide-['#ddd']">
                            <li class="list_li" @mouseenter="show_pdf = 1"><a href="" class="flex items-center justify-between"><span class="txtOver1 w-calc2 text-bold py-[1.3em] max-xl:py-[1em]">[협회보 제17호] 한투운용 ' 에이스 모든 국민은 통신의 비밀을 침해받지 아니한다. 군사법원의 조직·권한 및 재판관의 자격은 법률로 정한다.'</span><span class="material-symbols-rounded moreBtn2">arrow_right_alt</span></a></li>
                            <li class="list_li" @mouseenter="show_pdf = 2"><a href="" class="flex items-center justify-between"><span class="txtOver1 w-calc2 text-bold py-[1.3em] max-xl:py-[1em]">[협회보 제17호] 한투운용 ' 에이스 모든 국민은 통신의 비밀을 침해받지 아니한다. 군사법원의 조직·권한 및 재판관의 자격은 법률로 정한다.'</span><span class="material-symbols-rounded moreBtn2">arrow_right_alt</span></a></li>
                            <li class="list_li" @mouseenter="show_pdf = 3"><a href="" class="flex items-center justify-between"><span class="txtOver1 w-calc2 text-bold py-[1.3em] max-xl:py-[1em]">[협회보 제17호] 한투운용 ' 에이스 모든 국민은 통신의 비밀을 침해받지 아니한다. 군사법원의 조직·권한 및 재판관의 자격은 법률로 정한다.'</span><span class="material-symbols-rounded moreBtn2">arrow_right_alt</span></a></li>
                            <li class="list_li" @mouseenter="show_pdf = 4"><a href="" class="flex items-center justify-between"><span class="txtOver1 w-calc2 text-bold py-[1.3em] max-xl:py-[1em]">[협회보 제17호] 한투운용 ' 에이스 모든 국민은 통신의 비밀을 침해받지 아니한다. 군사법원의 조직·권한 및 재판관의 자격은 법률로 정한다.'</span><span class="material-symbols-rounded moreBtn2">arrow_right_alt</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <div class="max-w-4xl p-2 mx-auto">
        <div class="grid grid-cols-2 gap-6 max-lg:grid-cols-2 mob:grid-cols-1">
            <div class="text-white">
                <div class="bg-point-100 py-[3.6rem] px-8 h-full text-[1.25rem] font-score max-xl:text-[1.1rem] tab:text-base mob:text-xl mob:py-8">
                    <div class="h-full justify-center flex border-[#5477be] border-y flex-col max-lg:py-[2em]">
                        <h4 class="tit5 mb-[0.4em]">사무국 연락처</h4>
                        <h4 class="tit5 text-[#5ac2f5] flex items-center mb-[1.5em]"><span class="material-symbols-rounded mr-[0.3em]">call</span>02-334-7251</h4>
                        <ul class="">
                            <li class="mb-[0.5em]"><span class="text-bold after1">팩스</span><span class="cont">02-334-7279</span></li>
                            <li class=""><span class="text-bold after1">메일</span><span class="cont">kosna1964@naver.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-white">
                <div class="bg-[#2e3ba4] py-[3.6rem] px-8 h-full text-[1.25rem] font-score max-xl:text-[1.1rem] tab:text-base mob:text-xl mob:py-8">
                    <div class="h-full justify-center flex border-[#5477be] border-y flex-col max-lg:py-[2em]">
                    <h4 class="tit5 mb-[0.4em]">입회비 및 회비 입금 계좌</h4>
                    <h4 class="tit5 text-[#5ac2f5] flex items-center mb-[1.5em]"><span class="material-symbols-rounded mr-[0.3em]">id_card</span>예금주 : (사)한국전문신문협회</h4>
                    <ul class="">
                        <li class="mb-[0.5em]"><span class="after1"><img class="h-[1.4em] inline align-middle" src="{{ asset('storage/company/kb_bank_logo.png') }}" alt="KB 국민은행"></span><span class="cont">009-01-1135-182</span></li>
                        <li class=""><span class="after1"><img class="h-[1.4em] inline align-middle" src="{{ asset('storage/company/shinhan_logo.png') }}" alt="신한은행"></span><span class="cont">100-003-283205</span></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>