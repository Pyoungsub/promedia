<x-guest-layout>
<<<<<<< HEAD
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
=======
    <div class="max-w-[400px] mx-auto py-36 px-4">
        <div class=""
            x-data="{
                email:'{{ old('email', '') }}',
                name:'{{old('name')}}',
                password:'',
                password_confirmation:'',
            }"
        >
            <h2 class="text-3xl font-bold text-center">회원가입</h2>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <x-jet-label for="email" value="{{ __('이메일') }}" />
                    <x-jet-input id="email" x-model="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('이름') }}" />
                    <x-jet-input id="name" x-model="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" />
                </div>
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('비밀번호') }}" />
                    <x-jet-input id="password" x-model="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('비밀번호확인') }}" />
                    <x-jet-input id="password_confirmation" x-model="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <button x-bind:disabled="!(email && name && password && password_confirmation)" class="mt-4 w-full py-4 font-bold duration-500 bold bg-point-100 text-white disabled:duration-0 disabled:bg-grizzle-300 disabled:text-grizzle-800">
                    {{ __('가입하기') }}
                </button>
                <x-jet-validation-errors class="mt-4" />
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif
                <div class="flex items-center justify-center mt-6 pt-8 border-t border-grizzle-300">
                    <p>이미 가입하셨나요?</p>
                    <a class="font-bold text-point-100" href="{{ route('login') }}">
                        {{ __('로그인') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
>>>>>>> bc662e7 (modified code)
</x-guest-layout>
