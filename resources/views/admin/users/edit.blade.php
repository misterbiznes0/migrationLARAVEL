<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Редактирование пользователя
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto">
            <div class="bg-gray-800 p-6 text-white rounded">

                <form method="POST" action="{{ route('admin.users.update', $user) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block mb-2">Имя</label>
                        <input type="text"
                               name="name"
                               value="{{ $user->name }}"
                               class="w-full bg-gray-900 text-white border border-gray-600 rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Email</label>
                        <input type="email"
                               name="email"
                               value="{{ $user->email }}"
                               class="w-full bg-gray-900 text-white border border-gray-600 rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Новый пароль</label>
                        <input type="password"
                               name="password"
                               class="w-full bg-gray-900 text-white border border-gray-600 rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="is_admin" class="mr-2" {{ $user->is_admin ? 'checked' : '' }}>
                            Администратор
                        </label>
                    </div>

                    <button class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded">
                        Сохранить
                    </button>

                    <a href="{{ route('admin.users.index') }}"
                       class="ml-2 bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded">
                        Назад
                    </a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>