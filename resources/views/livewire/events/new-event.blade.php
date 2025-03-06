<div class=""
    x-data="{
        name:'',
        period:'day',
        effective_date: new Date().toISOString().split('T')[0],
        due_date: new Date().toISOString().split('T')[0],
        from:'09:00',
        to:'18:00',
        place:'',
        description:'',
        setTo(period)
        {
            let fromDate = new Date(this.effective_date);
            switch (period) {
                case 'week':
                    fromDate.setDate(fromDate.getDate() + 7);
                    break;
                case 'month':
                    fromDate.setMonth(fromDate.getMonth() + 1);
                    break;
            }
            this.due_date.minDate = this.effective_date;
            this.due_date = fromDate.toISOString().split('T')[0];
        }
    }" 
    x-init="
        $watch('period', value => {
            setTo(value);
        });
    "
>
    <div class="flex justify-end mb-3 text-grizzle-800 tab:mb-8">
        <button wire:click="addEvent" class="ml-3 btn1">글쓰기</button>
    </div>
    <x-jet-dialog-modal wire:model="addEventModal">
        <x-slot name="title">
            <div class="flex items-center justify-between">
                <h2>{{ __('행사일정 추가') }}</h2>
                <button wire:click="$toggle('addEventModal')" wire:loading.attr="disabled"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.title.focus(), 250)">
                <div class="grid grid-cols-3 gap-2">
                    <div class="">
                        <x-jet-label for="effective_date" value="{{ __('시작일') }}" />
                        <x-jet-input type="date" class="block w-full"
                            x-ref="effective_date"
                            x-model="effective_date"
                            @change="setTo(period)"
                        />
                    </div>
                    <div class="">
                        <x-jet-label for="due_date" value="{{ __('종료일') }}" />
                        <x-jet-input type="date" class="block w-full"
                            x-model="due_date"
                            x-bind:min="effective_date"
                        />
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="text-center">
                            <x-jet-label for="day" value="{{ __('당일') }}" />
                            <x-jet-input id="day" x-model="period" type="radio" class="" value="day" />
                        </div>
                        <div class="text-center">
                            <x-jet-label for="week" value="{{ __('일주일') }}" />
                            <x-jet-input id="week" x-model="period" type="radio" class="" value="week" />
                        </div>
                        <div class="text-center">
                            <x-jet-label for="month" value="{{ __('한달') }}" />
                            <x-jet-input id="month" x-model="period" type="radio" class="" value="month" />
                        </div>
                    </div>
                    <div class="">
                        <x-jet-label for="due_date" value="{{ __('시작시간') }}" />
                        <x-jet-input type="time" class="block w-full"
                            x-model="from"
                            x-ref="from"
                        />
                    </div>
                    <div class="">
                        <x-jet-label for="due_date" value="{{ __('종료시간') }}" />
                        <x-jet-input type="time" class="block w-full"
                            x-model="to"
                        />
                    </div>
                </div>
                <div class="mt-2">
                    <x-jet-label for="" value="{{ __('행사명') }}" />
                    <x-jet-input type="text" class="block w-full"
                        x-model="name"
                    />
                </div>
                <div class="mt-2">
                    <x-jet-label for="" value="{{ __('행사장소') }}" />
                    <x-jet-input type="text" class="block w-full"
                        x-model="place"
                    />
                </div>
                <div class="mt-2">
                    <x-jet-label for="" value="{{ __('행사내용') }}" />
                    <textarea x-model="description" type="text" rows="5" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-full resize-none" placeholder="행사내용을 입력해주세요."></textarea>
                </div>
            </div>
            <x-jet-input-error for="admin_id" class="mt-2" />
            <x-jet-input-error for="effective_date" class="mt-2" />
            <x-jet-input-error for="due_date" class="mt-2" />
            <x-jet-input-error for="from" class="mt-2" />
            <x-jet-input-error for="to" class="mt-2" />
            <x-jet-input-error for="name" class="mt-2" />
            <x-jet-input-error for="place" class="mt-2" />
            <x-jet-input-error for="description" class="mt-2" />
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="ml-3"
                        @click="$wire.submit(effective_date, due_date, from, to, name, place, description)"
                        wire:loading.attr="disabled">
                {{ __('작성') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>