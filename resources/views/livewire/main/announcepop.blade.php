<div 
    class=""
    x-data="{
        announces:@entangle('announces'),
    }"
    @notify.window="console.log($event.detail)"
>
    <template x-for="(announce, index) in announces" :key="announce.id">
        <div
            x-data="{
                show: true,
                checkModal() {
                    const dontShow = localStorage.getItem(`dontShowModal_${announce.id}`);
                    const now = new Date().getTime();
                    if (!dontShow) {
                        this.show = true;
                    }
                    else if(now > dontShow)
                    {
                        this.show = true;
                        localStorage.removeItem(`dontShowModal_${announce.id}`);
                    }
                    else {
                        this.show = false;
                    }
                },
                dontShowForAWeek() {
                    const oneWeekFromNow = new Date().getTime() + 7 * 24 * 60 * 60 * 1000;
                    localStorage.setItem(`dontShowModal_${announce.id}`, oneWeekFromNow);
                    this.isOpen = false;
                },
                focusables() {
                    // All focusable element types...
                    let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

                    return [...$el.querySelectorAll(selector)]
                        // All non-disabled elements...
                        .filter(el => ! el.hasAttribute('disabled'))
                },
                firstFocusable() { return this.focusables()[0] },
                lastFocusable() { return this.focusables().slice(-1)[0] },
                nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
                prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
                nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
                prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
            }"
            x-init="checkModal()"
            x-on:close.stop="show = false"
            x-on:keydown.escape.window="show = false"
            x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
            x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
            x-show="show"
            class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
            style="display: none;"
        >
            <div x-show="show" class="fixed inset-0 transform transition-all" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            {{--
                <div x-show="show" class="relative mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                                x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <a :href="'boards/announces/' + announce.announcement_id">
                        <img class="w-full h-auto" :src="'storage/'+announce.img_path" alt="">
                    </a>
                    <div class="absolute bottom-0 flex items-center justify-between w-full text-white text-sm p-2">
                        <button x-on:click="show = false;dontShowForAWeek()" class="">일주일동안 보지 않기</button>
                        <button x-on:click="show = false;$dispatch('notify', announce.id)" class=" ">{{ __('닫기') }}</button>
                    </div>
                </div>
            --}}
            <div x-show="show" class="relative mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                :class="{'sm:ml-4' : index === 1, 'sm:ml-8' : index === 2, 'sm:ml-12' : index === 3}"
            >
                <a :href="'boards/announces/' + announce.announcement_id">
                    <img class="w-full h-auto" :src="'storage/'+announce.img_path" alt="">
                </a>
                <div class="absolute bottom-0 flex items-center justify-between w-full text-white text-sm p-2">
                    <button x-on:click="show = false;dontShowForAWeek()" class="">일주일동안 보지 않기</button>
                    <button x-on:click="show = false;$dispatch('notify', announce.id)" class=" ">{{ __('닫기') }}</button>
                </div>
            </div>
        </div>
    </template>
</div>