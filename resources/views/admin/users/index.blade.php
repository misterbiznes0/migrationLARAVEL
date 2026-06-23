<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Управление пользователями
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-gray-800 p-6 text-white rounded">

                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-600 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-4 p-4 bg-red-600 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                <a href="{{ route('admin.queue.index') }}"
                   class="inline-block mb-4 bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">
                    Назад к очереди
                </a>

                <table class="w-full border border-gray-600">
                    <thead>
                        <tr class="bg-gray-900">
                            <th class="p-2 border border-gray-600">ID</th>
                            <th class="p-2 border border-gray-600">Имя</th>
                            <th class="p-2 border border-gray-600">Email</th>
                            <th class="p-2 border border-gray-600">Админ</th>
                            <th class="p-2 border border-gray-600">Действия</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="p-2 border border-gray-600">{{ $user->id }}</td>
                                <td class="p-2 border border-gray-600">{{ $user->name }}</td>
                                <td class="p-2 border border-gray-600">{{ $user->email }}</td>
                                <td class="p-2 border border-gray-600">
                                    {{ $user->is_admin ? 'Да' : 'Нет' }}
                                </td>
                                <td class="p-2 border border-gray-600">
                                    <a href="{{ route('admin.users.edit', $user) }}"
                                       class="bg-yellow-600 hover:bg-yellow-700 px-3 py-1 rounded">
                                        Изменить
                                    </a>

                                    <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded">
                                            Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>