<div class="max-w-[400px] mx-auto py-36 px-4">
    <div 
        class="" 
        x-data="{
            agreed_all:false,
            over_14:false,
            terms:false,
            privacy:false,
            checkStatus()
            {
                this.over_14 && this.terms && this.privacy ? this.agreed_all = true : this.agreed_all = false ;
            }
        }"
        x-init="
            $watch('agreed_all', value => {
                if(value)
                {
                    over_14 = true;
                    terms = true;
                    privacy = true;
                }
                else if(over_14 && terms && privacy)
                {
                    over_14 = false;
                    terms = false;
                    privacy = false;
                }
            });
        "
    >
        <h2 class="text-3xl font-bold text-center">회원가입</h2>
        <label class="mt-8 flex items-center cursor-pointer">
            <input type="checkbox" class="peer sr-only" x-model="agreed_all">
            <span class="border-2 border-cc w-5 h-5 peer-checked:bg-point-100 peer-checked:border-point-300 flex items-center justify-center">
                <span class="text-base leading-none text-grizzle-100 material-symbols-rounded">check</span>
            </span>
            <span class="ml-3 font-bold text-lg">모두 동의합니다.</span>
        </label>
        <hr class="my-8 border-dotted border-1 border-cc">
        <div class="mt-8">
            <label class="mt-8 flex items-center cursor-pointer">
                <input type="checkbox" class="peer sr-only" x-model="over_14" @change="checkStatus">
                <span class="border-2 border-cc w-5 h-5 peer-checked:bg-point-100 peer-checked:border-point-300 flex items-center justify-center">
                    <span class="text-base leading-none text-grizzle-100 material-symbols-rounded">check</span>
                </span>
                <span class="ml-3 font-bold">만 14세 이상입니다.</span>
            </label>
            <div class="mt-6 flex items-center justify-between mb-4">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" class="peer sr-only" x-model="terms" @change="checkStatus">
                    <span class="border-2 border-cc w-5 h-5 peer-checked:bg-point-100 peer-checked:border-point-300 flex items-center justify-center">
                        <span class="text-base leading-none text-grizzle-100 material-symbols-rounded">check</span>
                    </span>
                    <span class="ml-3 font-bold">(필수)이용약관 동의.</span>
                </label>
                <button wire:click="checkTerms('terms')" class="flex items-center px-1"><span class="text-base material-symbols-rounded leading-1">arrow_forward_ios</span></button>
            </div>
            <div class="mt-6 flex items-center justify-between mb-4">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" class="peer sr-only" x-model="privacy" @change="checkStatus">
                    <span class="border-2 border-cc w-5 h-5 peer-checked:bg-point-100 peer-checked:border-point-300 flex items-center justify-center">
                        <span class="text-base leading-none text-grizzle-100 material-symbols-rounded">check</span>
                    </span>
                    <span class="ml-3 font-bold">(필수)개인정보 취급방침 동의.</span>
                </label>
                <button wire:click="checkTerms('privacy')" class="flex items-center px-1"><span class="text-base material-symbols-rounded leading-1">arrow_forward_ios</span></button>
            </div>
        </div>
        <button @click="$wire.agree" class="block w-full py-4 font-bold text-center duration-500 text-white bold bg-point-100 disabled:bg-grizzle-300 disabled:text-grizzle-800 disabled:duration-0" x-bind:disabled="!agreed_all">동의하기</button>
        <div class="pt-8 mt-6 text-center border-t border-grizzle-300">
            <p>이미 가입하셨나요? <a href="/html/login.php" class="font-bold text-point-100">로그인</a></p>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="termsModal">
        <x-slot name="title">
            <div class="flex items-center justify-between">
                <h2 class="text-bold text-2xl">{{ $title }}</h2>
                <button wire:click="$toggle('termsModal')" class="w-8 h-8"><span class="block w-full h-[3px] bg-bb rotate-45"></span><span class="block w-full h-[3px] bg-bb rotate-[-45deg] mt-[-0.1rem]"></span></button>
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="w-full h-[500px] overflow-hidden overflow-y-scroll prose">
                {!! $content !!}
            </div>
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>
</div>