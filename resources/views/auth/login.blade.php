<x-guest-layout>
    
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <div class="max-w-[400px] mx-auto py-36 px-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="text-3xl font-bold text-center">로그인</h2>
            <div class="mb-4">
                <label for="email" class="block mb-2">아이디</label>
                <x-jet-input id="email" class="w-full p-3 border border-cc outline-point-400" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2">{{ __('비밀번호') }}</label>
                <input type="password" id="password" name="password" require class="w-full p-3 border border-cc outline-point-400">
            </div>
            <button class="w-full py-4 font-bold text-white duration-500 bold bg-point-100 hover:bg-point-300">로그인</button>
            <x-jet-validation-errors class="mt-4" />
            <div class="flex justify-between mt-4 text-sm">
                <div class="flex items-center">
                    <input type="checkbox" class="mr-1" id="remember_me" name="remember">
                    <label for="remember_me" class="cursor-pointer"><span></span>{{ __('로그인 상태 유지') }}</label>
                </div>
                <div class="flex text-cc">
                    <a href="" class="px-2 border-r border-r-grizzle-300">아이디 찾기</a>
                    @if (Route::has('password.request'))
                        <a class="px-2" href="{{ route('password.request') }}">
                            {{ __('비밀번호 찾기') }}
                        </a>
                    @endif
                </div>
            </div>
            <div class="pt-8 mt-6 text-center border-t border-grizzle-300">
                <p>로그인 아이디가 없으신가요? <a href="{{route('signin')}}" class="font-bold text-point-100">회원가입</a></p>
            </div>
        </form>
    </div>
</x-guest-layout>
