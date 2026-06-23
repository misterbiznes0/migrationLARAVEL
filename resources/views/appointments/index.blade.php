<x-app-layout>
    <script>
        setTimeout(function () {
            window.location.reload();
        }, 5000);
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Мои записи
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <a href="{{ route('dashboard') }}"
                   class="bg-gray-700 hover:bg-gray-600 text-white p-5 rounded-xl text-center text-lg font-bold">
                    Главная
                </a>

                <a href="{{ route('appointments.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white p-5 rounded-xl text-center text-lg font-bold">
                    Новая запись
                </a>

                <a href="{{ route('queue.board') }}"
                   class="bg-purple-600 hover:bg-purple-700 text-white p-5 rounded-xl text-center text-lg font-bold">
                    Табло очереди
                </a>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl shadow text-white">

                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-600 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="w-full border border-gray-600">
                    <thead>
                        <tr class="bg-gray-900">
                            <th class="p-3 border border-gray-600">Услуга</th>
                            <th class="p-3 border border-gray-600">Дата и время</th>
                            <th class="p-3 border border-gray-600">Номер</th>
                            <th class="p-3 border border-gray-600">Ожидание</th>
                            <th class="p-3 border border-gray-600">Статус</th>
                            <th class="p-3 border border-gray-600">Действие</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($appointments as $appointment)
                            @php
                                $ticket = $appointment->queueTicket;

                                $peopleBefore = 0;
                                $waitingMinutes = 0;

                                if ($ticket && $ticket->status === 'waiting') {
                                    $peopleBefore = \App\Models\QueueTicket::where('status', 'waiting')
                                        ->where('queue_number', '<', $ticket->queue_number)
                                        ->count();

                                    $waitingMinutes = $peopleBefore * 10;
                                }
                            @endphp

                            <tr>
                                <td class="p-3 border border-gray-600">
                                    {{ $appointment->service->name }}
                                </td>

                                <td class="p-3 border border-gray-600">
                                    {{ $appointment->appointment_time }}
                                </td>

                                <td class="p-3 border border-gray-600 text-center font-bold">
                                    №{{ $ticket->queue_number ?? '-' }}
                                </td>

                                <td class="p-3 border border-gray-600">
                                    @if($ticket && $ticket->status === 'waiting')
                                        <div class="text-yellow-400 font-bold">
                                            Перед вами: {{ $peopleBefore }}
                                        </div>
                                        <div class="text-gray-300">
                                            Примерно: {{ $waitingMinutes }} мин.
                                        </div>
                                    @elseif($ticket && $ticket->status === 'called')
                                        <span class="text-blue-400 font-bold">
                                            Вас уже вызывают
                                        </span>
                                    @elseif($ticket && $ticket->status === 'done')
                                        <span class="text-green-400 font-bold">
                                            Приём завершён
                                        </span>
                                    @elseif($ticket && $ticket->status === 'cancelled')
                                        <span class="text-red-400 font-bold">
                                            Запись отменена
                                        </span>
                                    @else
                                        -
                                    @endif
                                </td>

                                <td class="p-3 border border-gray-600">
                                    @if($appointment->status === 'pending')
                                        <span class="text-yellow-400 font-bold">Ожидает</span>
                                    @elseif($appointment->status === 'called')
                                        <span class="text-blue-400 font-bold">Вас вызывают</span>
                                    @elseif($appointment->status === 'done')
                                        <span class="text-green-400 font-bold">Завершено</span>
                                    @elseif($appointment->status === 'cancelled')
                                        <span class="text-red-400 font-bold">Отменено</span>
                                    @else
                                        {{ $appointment->status }}
                                    @endif
                                </td>

                                <td class="p-3 border border-gray-600">
                                    <a href="{{ route('appointments.ticket', $appointment) }}"
                                       class="inline-block bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg font-bold mb-2">
                                        Талон
                                    </a>

                                    @if(!in_array($appointment->status, ['done', 'cancelled']))
                                        <form method="POST" action="{{ route('appointments.cancel', $appointment) }}">
                                            @csrf
                                            <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg font-bold">
                                                Отменить
                                            </button>
                                        </form>
                                    @else
                                        <div class="text-gray-400">-</div>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-5 text-center">
                                    У вас пока нет записей.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>