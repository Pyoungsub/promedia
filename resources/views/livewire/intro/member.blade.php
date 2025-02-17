<div class="">
    <x-headers.intro/>
    <div class="pt-32 text-lg bg-right-bottom bg-no-repeat bg-[length:30%] font-nanumS bg-mark max-lg:pt-28 max-md:pt-24 tab:pt-20 2sm:pt-16"
        x-data="{
            jobTitle:'ceo'
        }"
    >
        <div class="pb-20 container2">
            <h4 class="tit4">
                조직도
                @if(auth()->user() && auth()->user()->admin)
                    <button class="border rounded text-sm px-2" wire:click="addMember">추가</button>
                @endif
            </h4>
            <div class="flex justify-center text-xl leading-loose max-lg:mb-40 max-md:mb-32 tab:text-lg tab:mb-8">
                <div class="p-[5px] bg-tabbox bg-full">
                    <div class="relative flex flex-wrap items-center max-3sm:justify-around max-3sm:gap-2">
                        <button class="px-[2em] max-md:px-[1em]" :class="jobTitle == 'ceo' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'" @click="jobTitle = 'ceo'">회장단</button>
                        <button class="px-[2em] max-md:px-[1em]" :class="jobTitle == 'advisory' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'" @click="jobTitle = 'advisory'">고문</button>
                        <button class="px-[2em] max-md:px-[1em]" :class="jobTitle == 'vice-chairman' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'" @click="jobTitle = 'vice-chairman'">부회장</button>
                        <button class="px-[2em] max-md:px-[1em]" :class="jobTitle == 'auditor' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'" @click="jobTitle = 'auditor'">감사</button>
                        <button class="px-[2em] max-md:px-[1em]" :class="jobTitle == 'director' ? 'text-white font-bold h-full bg-tab bg-full' : 'hover:text-point-100'" @click="jobTitle = 'director'">이사</button>
                    </div>
                </div>
            </div>
            <div x-show="jobTitle == 'ceo'" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-100 border-point-100 mb-16 tab:text-xl tab:py-1 tab:w-[6em] ">회장단</h5>
                <div class="flex flex-wrap justify-center gap-5 mt-10 ml-32 max-lg:ml-24 tab:ml-0">
                    @foreach($members->whereIn('member_role_id', [1,2]) as $member)
                        <div class="flex tab:block">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg tab:mx-auto">
                                <img class="object-cover w-full h-full" src="{{ asset('storage/'. $member->partnership_member->img_path ) }}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em] tab:w-auto tab:items-center mob:w-44 mob:text-center">
                                <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center bg-grizzle-300 tab:mt-4">{{$member->member_role->role}}</span>
                                <p class="my-1 text-2xl font-ChosunKm">{{$member->partnership_member->name}}</p>
                                <p class="mb-2"><strong>{{ $member->partnership_member->partnership->name }}</strong> 발행인</p>
                                <span class="text-[1.8rem]"><img class="h-12" src="{{ asset('storage/'.$member->partnership_member->partnership->img_path) }}" alt="내외뉴스통신"></span>
                                @if(auth()->user() && auth()->user()->admin)
                                    <div class="">
                                        <button class="border rounded text-sm px-2" wire:click="modifyMember( {{ $member->id }} )">수정</button>
                                        <button class="border rounded text-sm px-2" wire:click="deleteMember( {{ $member->id }} )">삭제</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div x-show="jobTitle == 'advisory'" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-100 border-point-100 mb-16 tab:text-xl tab:py-1 tab:w-[6em] ">고문</h5>
                <div class="flex flex-wrap justify-center gap-5 mt-10 ml-32 max-lg:ml-24 tab:ml-0">
                    @foreach($members->whereIn('member_role_id', [3, 4]) as $member)
                        <div class="flex tab:block">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg tab:mx-auto">
                                <img class="object-cover w-full h-full" src="{{ asset('storage/'. $member->partnership_member->img_path ) }}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em] tab:w-auto tab:items-center mob:w-44 mob:text-center">
                                <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center bg-grizzle-300 tab:mt-4">{{$member->member_role->role}}</span>
                                <p class="my-1 text-2xl font-ChosunKm">{{$member->partnership_member->name}}</p>
                                <p class="mb-2"><strong>{{ $member->partnership_member->partnership->name }}</strong> 발행인</p>
                                <span class="text-[1.8rem]"><img class="h-12" src="{{ asset('storage/'.$member->partnership_member->partnership->img_path) }}" alt="내외뉴스통신"></span>
                                @if(auth()->user() && auth()->user()->admin)
                                    <div class="">
                                        <button class="border rounded text-sm px-2" wire:click="modifyMember( {{ $member->id }} )">수정</button>
                                        <button class="border rounded text-sm px-2" wire:click="deleteMember( {{ $member->id }} )">삭제</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div x-show="jobTitle == 'vice-chairman'" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-100 border-point-100 mb-16 tab:text-xl tab:py-1 tab:w-[6em] ">부회장</h5>
                <div class="flex flex-wrap justify-center gap-5 mt-10 ml-32 max-lg:ml-24 tab:ml-0">
                    @foreach($members->where('member_role_id', 5) as $member)
                        <div class="flex tab:block">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg tab:mx-auto">
                                <img class="object-cover w-full h-full" src="{{ asset('storage/'. $member->partnership_member->img_path ) }}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em] tab:w-auto tab:items-center mob:w-44 mob:text-center">
                                <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center bg-grizzle-300 tab:mt-4">{{$member->member_role->role}}</span>
                                <p class="my-1 text-2xl font-ChosunKm">{{$member->partnership_member->name}}</p>
                                <p class="mb-2"><strong>{{ $member->partnership_member->partnership->name }}</strong> 발행인</p>
                                <span class="text-[1.8rem]"><img class="h-12" src="{{ asset('storage/'.$member->partnership_member->partnership->img_path) }}" alt="내외뉴스통신"></span>
                                @if(auth()->user() && auth()->user()->admin)
                                    <div class="">
                                        <button class="border rounded text-sm px-2" wire:click="modifyMember( {{ $member->id }} )">수정</button>
                                        <button class="border rounded text-sm px-2" wire:click="deleteMember( {{ $member->id }} )">삭제</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div x-show="jobTitle == 'auditor'" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-100 border-point-100 mb-16 tab:text-xl tab:py-1 tab:w-[6em] ">감사</h5>
                <div class="flex flex-wrap justify-center gap-5 mt-10 ml-32 max-lg:ml-24 tab:ml-0">
                    @foreach($members->where('member_role_id', 7) as $member)
                        <div class="flex tab:block">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg tab:mx-auto">
                                <img class="object-cover w-full h-full" src="{{ asset('storage/'. $member->partnership_member->img_path ) }}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em] tab:w-auto tab:items-center mob:w-44 mob:text-center">
                                <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center bg-grizzle-300 tab:mt-4">{{$member->member_role->role}}</span>
                                <p class="my-1 text-2xl font-ChosunKm">{{$member->partnership_member->name}}</p>
                                <p class="mb-2"><strong>{{ $member->partnership_member->partnership->name }}</strong> 발행인</p>
                                <span class="text-[1.8rem]"><img class="h-12" src="{{ asset('storage/'.$member->partnership_member->partnership->img_path) }}" alt="내외뉴스통신"></span>
                                @if(auth()->user() && auth()->user()->admin)
                                    <div class="">
                                        <button class="border rounded text-sm px-2" wire:click="modifyMember( {{ $member->id }} )">수정</button>
                                        <button class="border rounded text-sm px-2" wire:click="deleteMember( {{ $member->id }} )">삭제</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div x-show="jobTitle == 'director'" class="py-16 border-b text-nanumS border-b-grizzle-300">
                <h5 class="text-2xl border-2 rounded-full w-[7em] py-2 text-center mx-auto font-ChosunKm text-point-100 border-point-100 mb-16 tab:text-xl tab:py-1 tab:w-[6em] ">이사</h5>
                <div class="flex flex-wrap justify-center gap-5 mt-10 ml-32 max-lg:ml-24 tab:ml-0">
                    @foreach($members->where('member_role_id', 8) as $member)
                        <div class="flex tab:block">
                            <div class="h-56 mr-6 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg tab:mx-auto">
                                <img class="object-cover w-full h-full" src="{{ asset('storage/'. $member->partnership_member->img_path ) }}" alt="">
                            </div>
                            <div class="flex flex-col items-start justify-end w-[15em] tab:w-auto tab:items-center mob:w-44 mob:text-center">
                                <span class="px-3 py-1 text-sm font-bold rounded-full bg-grizzle-300 min-w-[4em] text-center bg-grizzle-300 tab:mt-4">{{$member->member_role->role}}</span>
                                <p class="my-1 text-2xl font-ChosunKm">{{$member->partnership_member->name}}</p>
                                <p class="mb-2"><strong>{{ $member->partnership_member->partnership->name }}</strong> 발행인</p>
                                <span class="text-[1.8rem]"><img class="h-12" src="{{ asset('storage/'.$member->partnership_member->partnership->img_path) }}" alt="내외뉴스통신"></span>
                                @if(auth()->user() && auth()->user()->admin)
                                    <div class="">
                                        <button class="border rounded text-sm px-2" wire:click="modifyMember( {{ $member->id }} )">수정</button>
                                        <button class="border rounded text-sm px-2" wire:click="deleteMember( {{ $member->id }} )">삭제</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <x-jet-dialog-modal wire:model="memberModal" maxWidth="xl">
            <x-slot name="title">
                역대임원
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
                    <x-jet-input class="" id="name" type="text" placeholder="이름" wire:model.defer="name" autocomplete="off" />
                    <x-jet-input class="" id="company" type="text" placeholder="신문사명" wire:model.defer="company" autocomplete="off" />
                </div>
                <div 
                    x-data="{
                        photoName: null, 
                        photoPreview: @entangle('photoPreview'),
                        deleteItem()
                        {
                            if (confirm('로고를 삭제하시겠습니까?')) {
                                alert('로고가 삭제 되었습니다.');
                                $wire.deleteLogo();
                            } else {
                                alert('로고를 삭제하지 않습니다.');
                            }
                        }
                    }"
                    class="mt-4 max-w-fit mx-auto"
                >
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                                wire:model="photo"
                                x-ref="photo"
                                x-on:change="
                                        photoName = $refs.photo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.photo.files[0]);
                                " />
                    <!-- Current Profile Photo -->
                    @if ($img_path)
                        <x-jet-label for="img_path" value="{{ __('사진') }}" />
                        <div class="h-56 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg tab:mx-auto" x-show="! photoPreview">
                            <img src="{{ asset('storage/'.$img_path) }}" alt="{{ $name }}" class="object-cotain w-full h-full">
                        </div>
                    @endif
                    <!-- New Profile Photo Preview -->
                    <div class="h-56 overflow-hidden bg-center bg-cover border rounded-xl w-44 border-grizzle-300 bg-noimg tab:mx-auto" x-show="photoPreview" style="display: none;">
                        <span class="block w-full h-full bg-cover bg-no-repeat bg-center"
                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('사진선택') }}
                    </x-jet-secondary-button>
                    <x-jet-input-error for="img_path" class="mt-2" />
                </div>
                <x-jet-input-error for="role_id" class="mt-2" />
                <x-jet-input-error for="name" class="mt-2" />
                <x-jet-input-error for="company" class="mt-2" />
                <x-jet-input-error for="img_path" class="mt-2" />
            </x-slot>
            <x-slot name="footer">
                <x-jet-button class="ml-3"
                            wire:click="save"
                            wire:loading.attr="disabled">
                    {{ __('적용') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
