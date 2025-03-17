<div 
    class="py-32"
    x-data="{
        swiper: null,
        banners: @entangle('banners')
    }"
    x-init="
        swiper = new Swiper($refs.test, {
            slidesPerView: 1.5,
            spaceBetween: 20,
            //centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            breakpoints: {
                // when window width is >= 480px
                480: {
                    slidesPerView: 2.5,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3.5,
                    spaceBetween: 40
                },
                768: {
                    slidesPerView: 4.5,
                    spaceBetween: 50
                },
                1024: {
                    slidesPerView: 5.5,
                    spaceBetween: 60
                }
            }
        });
    "
>
    @if(auth()->check() && auth()->user()->admin)
        <div class="pb-4 px-4">
            <button wire:click="add" class="rounded-md bg-blue-700 text-white p-2">유관단체추가</button>
        </div>
        <x-jet-dialog-modal wire:model="addOrganizationModal">
            <x-slot name="title">
                {{ __('유관단체추가') }}
            </x-slot>
            <x-slot name="content">
                <div x-data="{photoName: null, photoPreview: @entangle('photoPreview').defer}" class="">
                    <!-- Profile Photo File Input -->
                    <input type="file" accept="image/png, image/jpeg" class="hidden"
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
                        <span class="block w-full aspect-[3/1] bg-center bg-cover bg-no-repeat"
                            x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>
                    @if($img_path)
                        <div class="mt-2" x-show="!photoPreview" style="display: none;">
                            <span class="block w-full aspect-[3/1] bg-center bg-cover bg-no-repeat"
                                x-bind:style="'background-image: url({{asset('storage/'. $img_path)}});'">
                            </span>
                        </div>
                    @endif
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('배너 이미지 선택') }}
                    </x-jet-secondary-button>
                    <x-jet-input-error for="photo" class="mt-2" />
                </div>
                <x-jet-label class="mt-4" for="title" value="단체명" />
                <input id="title" type="text" wire:model.defer="title" class="mt-2 w-full p-2 border border-cc outline-point-400" />
                <x-jet-label class="mt-4" for="url" value="Url" />
                <input id="url" type="text" wire:model.defer="url" class="mt-2 w-full p-2 border border-cc outline-point-400" />
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
    @endauth
    <div class="" >
        <div class="swiper" x-ref="test">
            <div class="swiper-wrapper">
                @foreach($banners as $banner)
                    <div class="swiper-slide">
                        @if(auth()->check() && auth()->user()->admin)
                            <div class="flex items-center gap-2 text-sm">
                                <button wire:click="modify({{$banner->id}})" class="rounded-md border px-2 py-0">수정</button>
                                <button wire:click="delete({{$banner->id}})" class="rounded-md border px-2 py-0">삭제</button>
                            </div>
                        @endif
                        @if(!empty($banner->url))
                            <a href="{{$banner->url}}" target="_blank">
                                <div class="mx-auto aspect-[3/1] w-full bg-cover bg-center bg-no-repeat" style="background-image:url({{asset('storage/'. $banner->img_path)}})"></div>
                            </a>
                        @else
                            <div class="mx-auto aspect-[3/1] w-full bg-cover bg-center bg-no-repeat" style="background-image:url({{asset('storage/'. $banner->img_path)}})"></div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>