<div class="">
<<<<<<< HEAD
    <div class="bg-center bg-no-repeat bg-cover bg-subbg3">
        <div class="container2 flex flex-wrap items-center h-[40rem] relative justify-center">
            <div class="text-center text-white">
                <!-- 2차메뉴가 있는 경우 2차메뉴 / 없는 경우는 삭제 -->
                <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto" >역대임원</h3>
                <!-- 대메뉴명 -->
            </div>
        </div>
    </div>
    <div class="py-32">
        <h4 class="tit4">역대임원</h4>
        <div class="max-w-screen-xl text-lg container2 font-nanumS">
            <div class="mb-7">
                <select class="block px-3 py-2 text-white rounded-md outline-none bg-[#bababa] focus:shadow-sh1 focus:shadow-point ">
                <option value="" selected="selected">선택하세요</option>
                <option value="">제2대임원 1969-1970</option>
                <option value="">초대임원 1969-1970</option>
                </select>
            </div>
            <!-- option 선택 시 해당 년도에 해당하는 임원 table 출력 -->
            <div>
                <p class="mb-4"><strong>초대임원</strong> (1969년-1970년)</p>
                <table class="w-full text-center t_border1">
                    <thead class="text-white bg-point-400">
                        <tr>
                        <th class="p-3 w-[13%]">직함</th>
                        <th class="p-3">성명</th>
                        <th class="p-3">소속사 및 직위</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="p-3 bg-grizzle-300">이사장</td>
                        <td class="p-3">김형익</td>
                        <td class="p-3">의사시보</td>
                        </tr>
                        <tr>
                        <td class="p-3 bg-grizzle-300">부이사장</td>
                        <td class="p-3">임녹재</td>
                        <td class="p-3">한국경제신문</td>
                        </tr>
                        <tr>
                        <td class="p-3 bg-grizzle-300">부이사장</td>
                        <td class="p-3">함승기</td>
                        <td class="p-3">약업신문</td>
                        </tr>
                        <tr>
                        <td class="p-3 bg-grizzle-300">이사</td>
                        <td class="p-3">최대용</td>
                        <td class="p-3">법률신문</td>
                        </tr>
                        <tr>
                        <td class="p-3 bg-grizzle-300">이사</td>
                        <td class="p-3">신효당</td>
                        <td class="p-3">농촌신문</td>
                        </tr>
                        <tr>
                        <td class="p-3 bg-grizzle-300">이사</td>
                        <td class="p-3">주경진</td>
                        <td class="p-3">전업신문</td>
                        </tr>
                        <tr>
                        <td class="p-3 bg-grizzle-300">이사</td>
                        <td class="p-3">유철</td>
                        <td class="p-3">동아산경신문</td>
                        </tr>
                        <tr>
                        <td class="p-3 bg-grizzle-300">감사</td>
                        <td class="p-3">이덕종</td>
                        <td class="p-3">시청각교육신문</td>
                        </tr>
                        <tr>
                        <td class="p-3 bg-grizzle-300">감사</td>
                        <td class="p-3">최지윤</td>
                        <td class="p-3">한국건설신문</td>
                        </tr>
=======
    <div class="flex flex-wrap items-center h-[40rem] relative justify-center max-xl:h-[32rem] max-lg:h-[28rem] max-md:h-96 tab:h-80 mob:h-60 2sm:h-52 max-3sm:h-48 bg-center bg-no-repeat bg-cover bg-subbg3">
        <div class="text-center text-white mt-[-2em] tab:mt-0">
            <h3 class="tit2 before:mb-[0.4em] before:block before:w-[1.5em] before:h-[1px] before:bg-white before:m-auto">역대임원</h3>
        </div>
    </div>
    <div class="py-32 max-lg:py-28 max-md:py-24 tab:py-20 2sm:py-16">
        <h4 class="tit4">역대임원</h4>
        <div class="max-w-screen-xl text-lg container2 font-nanumS">
            <div class="mb-7">
                <select wire:model="selected_term_id" class="block py-2 text-white rounded-md outline-none bg-[#bababa] border-0 focus:ring-0">
                    @foreach($terms as $term)
                        @if($loop->last)
                            <option value="{{$term->id}}">초대임원 {{$term->from}}-{{$term->to}}</option>
                        @else
                            <option value="{{$term->id}}">제{{$term->ordinal_number}}대임원 {{$term->from}}-{{$term->to}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="tab:font-noto">
                <p class="mb-4">
                    <strong>@if($selected_term->ordinal_number === 1) 초대 @else {{$selected_term->ordinal_number}}대 @endif 임원</strong> 
                    ({{ $selected_term->from }}년-{{ $selected_term->to }}년)
                    @auth
                        @if(auth()->user()->admin)
                            <button class="border rounded text-sm px-2" wire:click="modifyTerm">수정</button>
                        @endif
                    @endauth
                </p>
                <table class="w-full text-center t_border1">
                    <thead class="text-white bg-point-400">
                        <tr>
                            <th class="p-3 w-[13%] tab:w-[6.5em]">직함</th>
                            <th class="p-3">성명</th>
                            <th class="p-3">소속사 및 직위</th>
                            @auth
                                @if(auth()->user()->admin)
                                    <th class="">
                                        <button class="border rounded text-sm px-2" wire:click="add">추가</button>
                                    </th>
                                @endif
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td class="p-3 bg-grizzle-200">{{$member->member_role->role}}</td>
                                <td class="p-3">{{$member->partnership_member->name}}</td>
                                <td class="p-3">{{$member->partnership_member->partnership->name}}</td>
                                @auth
                                    @if(auth()->user()->admin)
                                        <td class="w-20">
                                            <button class="border rounded text-sm px-2" wire:click="modify({{$member->id}})">수정</button>
                                        </td>
                                    @endif
                                @endauth
                            </tr>
                        @endforeach
>>>>>>> bc662e7 (modified code)
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
    <x-jet-dialog-modal wire:model="modifyTermModal" maxWidth="xl">
        <x-slot name="title">
            임기수정
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-3 gap-2 w-full">
                <label class="relative">    
                    <x-jet-input class="w-full" id="ordinal_number" type="tel" x-mask="9999" wire:model.defer="ordinal_number" />
                    <span class="absolute right-0 bottom-0 inset-y-0 flex items-center">대 임기</span>
                </label>
                <label class="relative">
                    <x-jet-input class="w-full" id="from" type="tel" x-mask="9999" wire:model.defer="from" />
                    <span class="absolute right-0 bottom-0 inset-y-0 flex items-center">년 부터</span>
                </label>
                <label class="relative">
                    <x-jet-input class="w-full" id="to" type="tel" x-mask="9999" wire:model.defer="to" />
                    <span class="absolute right-0 bottom-0 inset-y-0 flex items-center">년 까지</span>
                </label>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="ml-3"
                        wire:click="modifiedTerm"
                        wire:loading.attr="disabled">
                {{ __('수정') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="addModal" maxWidth="xl">
        <x-slot name="title">
            역대임원 추가
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-3 gap-2 w-full"
                x-data='{
                    roles:@json($roles),
                }'
            >
                <select name="" id="new_role" wire:model.defer="role_id">
                    <option value="" disabled>--직함--</option>
                    <template x-for="role in roles">
                        <option :value="role.id" x-text="role.role"></option>
                    </template>
                </select>
                <x-jet-input class="" id="new_name" type="text" wire:model.defer="name" placeholder="성명" autocomplete="off" />
                <x-jet-input class="" id="new_company" type="text" wire:model.defer="company" placeholder="소속사" autocomplete="off" />
            </div>
            <x-jet-input-error for="role_id" class="mt-2" />
            <x-jet-input-error for="name" class="mt-2" />
            <x-jet-input-error for="company" class="mt-2" />
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="ml-3"
                        wire:click="added"
                        wire:loading.attr="disabled">
                {{ __('추가') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="modifyModal" maxWidth="xl">
        <x-slot name="title">
            역대임원 수정
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-3 gap-2 w-full"
                x-data='{
                    roles:@json($roles),
                }'
            >
                <select name="" id="" wire:model.defer="role_id">
                    <option value="" disabled>--직함--</option>
                    <template x-for="role in roles">
                        <option :value="role.id" x-text="role.role"></option>
                    </template>
                </select>
                <x-jet-input class="" id="name" type="text" wire:model.defer="name" />
                <x-jet-input class="" id="company" type="text" wire:model.defer="company" />
            </div>
            <x-jet-input-error for="role_id" class="mt-2" />
            <x-jet-input-error for="name" class="mt-2" />
            <x-jet-input-error for="company" class="mt-2" />
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="ml-3"
                        wire:click="modified"
                        wire:loading.attr="disabled">
                {{ __('수정') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
>>>>>>> bc662e7 (modified code)
