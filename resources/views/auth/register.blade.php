<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Имя и фамилия -->
        <div>
            <x-input-label for="name" :value="'Имя и фамилия'" />
            <x-text-input id="name" class="block mt-1 w-full text-black" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="'Электронная почта'" />
            <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Пароль -->
        <div class="mt-4">
            <x-input-label for="password" :value="'Пароль'" />
            <x-text-input id="password" class="block mt-1 w-full text-black"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Подтверждение пароля -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="'Подтвердите пароль'" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full text-black"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="underline text-sm text-gray-400 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                Уже зарегистрированы?
            </a>

        <x-primary-button 
            class="ml-6 transform transition duration-200 ease-in-out 
                hover:scale-105 hover:bg-blue-700 
                active:scale-95 active:bg-blue-800 
                focus:ring-2 focus:ring-blue-400">
            Зарегистрироваться
        </x-primary-button>
        </div>
    </form>
</x-guest-layout>