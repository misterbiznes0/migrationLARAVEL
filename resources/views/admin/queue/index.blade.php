<x-app-layout>
    <script>
        setTimeout(function () {
            window.location.reload();
        }, 5000);
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Админка — электронная очередь
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <a href="{{ route('admin.queue.index') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white p-5 rounded-xl text-center text-lg font-bold">
                    Очередь
                </a>

                <a href="{{ route('admin.users.index') }}"
                   class="bg-purple-600 hover:bg-purple-700 text-white p-5 rounded-xl text-center text-lg font-bold">
                    Пользователи
                </a>

                <a href="{{ route('queue.board') }}"
                   class="bg-green-600 hover:bg-green-700 text-white p-5 rounded-xl text-center text-lg font-bold">
                    Табло очереди
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-6">
                <a href="{{ route('admin.queue.index', ['status' => 'all']) }}"
                   class="p-4 rounded-xl text-center text-white {{ $status === 'all' ? 'bg-blue-600' : 'bg-gray-800' }}">
                    <div class="text-2xl font-bold">{{ $stats['all'] }}</div>
                    <div>Все</div>
                </a>

                <a href="{{ route('admin.queue.index', ['status' => 'waiting']) }}"
                   class="p-4 rounded-xl text-center text-white {{ $status === 'waiting' ? 'bg-yellow-600' : 'bg-gray-800' }}">
                    <div class="text-2xl font-bold">{{ $stats['waiting'] }}</div>
                    <div>Ожидают</div>
                </a>

                <a href="{{ route('admin.queue.index', ['status' => 'called']) }}"
                   class="p-4 rounded-xl text-center text-white {{ $status === 'called' ? 'bg-blue-600' : 'bg-gray-800' }}">
                    <div class="text-2xl font-bold">{{ $stats['called'] }}</div>
                    <div>Вызваны</div>
                </a>

                <a href="{{ route('admin.queue.index', ['status' => 'done']) }}"
                   class="p-4 rounded-xl text-center text-white {{ $status === 'done' ? 'bg-green-600' : 'bg-gray-800' }}">
                    <div class="text-2xl font-bold">{{ $stats['done'] }}</div>
                    <div>Завершены</div>
                </a>

                <a href="{{ route('admin.queue.index', ['status' => 'cancelled']) }}"
                   class="p-4 rounded-xl text-center text-white {{ $status === 'cancelled' ? 'bg-red-600' : 'bg-gray-800' }}">
                    <div class="text-2xl font-bold">{{ $stats['cancelled'] }}</div>
                    <div>Отменены</div>
                </a>
            </div>

            <div class="bg-gray-800 p-6 text-white rounded-xl">

                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-600 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="w-full border border-gray-600">
                    <thead>
                        <tr class="bg-gray-900">
                            <th class="p-3 border border-gray-600">№</th>
                            <th class="p-3 border border-gray-600">Пользователь</th>
                            <th class="p-3 border border-gray-600">Услуга</th>
                            <th class="p-3 border border-gray-600">Дата</th>
                            <th class="p-3 border border-gray-600">Статус</th>
                            <th class="p-3 border border-gray-600">Действия</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($tickets as $ticket)
                            <tr>
                                <td class="p-3 border border-gray-600 text-center font-bold">
                                    №{{ $ticket->queue_number }}
                                </td>

                                <td class="p-3 border border-gray-600">
                                    {{ $ticket->appointment->user->name }}
                                </td>

                                <td class="p-3 border border-gray-600">
                                    {{ $ticket->appointment->service->name }}
                                </td>

                                <td class="p-3 border border-gray-600">
                                    {{ $ticket->appointment->appointment_time }}
                                </td>

                                <td class="p-3 border border-gray-600">
                                    @if($ticket->status === 'waiting')
                                        <span class="text-yellow-400 font-bold">Ожидание</span>
                                    @elseif($ticket->status === 'called')
                                        <span class="text-blue-400 font-bold">Вызван</span>
                                    @elseif($ticket->status === 'done')
                                        <span class="text-green-400 font-bold">Завершён</span>
                                    @elseif($ticket->status === 'cancelled')
                                        <span class="text-red-400 font-bold">Отменён</span>
                                    @endif
                                </td>

                                <td class="p-3 border border-gray-600">
                                    <div class="flex flex-wrap gap-2">
                                        <form method="POST" action="{{ route('admin.queue.call', $ticket) }}">
                                            @csrf
                                            <button class="bg-yellow-600 hover:bg-yellow-700 px-4 py-2 rounded-lg font-bold">
                                                Вызвать
                                            </button>
                                        </form>

                                        <form method="POST" action="{{ route('admin.queue.complete', $ticket) }}">
                                            @csrf
                                            <button class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg font-bold">
                                                Завершить
                                            </button>
                                        </form>

                                        <form method="POST" action="{{ route('admin.queue.destroy', $ticket) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg font-bold">
                                                Удалить
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-5 text-center">
                                    Очередь пустая.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>