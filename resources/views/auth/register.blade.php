<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <div class="w-28">
        <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
         </div>

        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" value="ニックネーム" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" value="メールアドレス" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" value="パスワード" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="パスワード(確認)" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                     登録 
                </x-button>
            </div>

            <hr class="my-3">
<div class="mt-3">
    <h3>アプリでのログイン</h3>
    <div class="my-2">
        <a href="{{ route('social_login.redirect', 'line') }}">
            <img style="height:50px" src="/images/LINE_APP.png">
        </a>
    </div>
    <small>
        本ウェブサービスでは、LINEによる認証ページで許可を得た場合のみメールアドレスを取得します。<br>
        そして、取得されたメールアドレスにつきましては本サービスのログイン以外の目的には一切使用しません。
    </small>
</div>

        </form>
    </x-auth-card>
</x-guest-layout>
