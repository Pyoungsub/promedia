<div 
    class="pb-32 relative"
    x-data="{
        swiper: null,
        banners: @entangle('banners')
    }"
    x-init="
        swiper = new Swiper($refs.test, {
            slidesPerView: 5,
            spaceBetween: 30,
            //centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    "
>
    @auth
        @if(auth()->user()->admin)
            <div class="absolute z-10 right-0 top-0 flex items-center px-4">
                <button wire:click="add" class="rounded-md bg-blue-700 text-white p-2">유관단체추가</button>
            </div>
            <x-jet-dialog-modal wire:model="addOrganizationModal">
                <x-slot name="title">
                    {{ __('유관단체추가') }}
                </x-slot>
                <x-slot name="content">
                    <div x-data="{photoName: null, photoPreview: @entangle('photoPreview').defer}" class="">
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
                        <x-jet-label for="photo" value="{{ __('배너 이미지') }}" class="mt-2" />
                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block w-full aspect-video bg-center bg-cover bg-no-repeat"
                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                        </div>
                        <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                            {{ __('배너 이미지 선택') }}
                        </x-jet-secondary-button>
                        <x-jet-input-error for="photo" class="mt-2" />
                    </div>
                    <x-jet-label class="mt-4" for="title" value="단체명" />
                    <input id="title" type="text" wire:model.defer="title" class="mt-2 w-full p-2 border border-cc outline-point-400" />
                </x-slot>
                <x-slot name="footer">
                    <x-jet-secondary-button wire:click="$set('addOrganizationModal', false)" wire:loading.attr="disabled">
                        {{ __('취소') }}
                    </x-jet-secondary-button>
                    <x-jet-button class="ml-2" wire:click="save" wire:loading.attr="disabled">
                        {{ __('등록') }}
                    </x-jet-button>
                </x-slot>
            </x-jet-dialog-modal>
        @endif
    @endauth
    <div class="" wire:ignore >
        <div class="swiper" x-ref="test">
            <div class="swiper-wrapper">
                @foreach($banners as $banner)
                    <div class="swiper-slide">
                        <img class="mx-auto aspect-[3/1] w-full" src="{{asset('storage/'. $banner->img_path)}}" alt="한국전문인터넷신문">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>