<x-app-layout>
    <script>
        setTimeout(function () {
            window.location.reload();
        }, 5000);
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Панель пользователя
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4">

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-600 text-white rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            @php
                $called = \App\Models\QueueTicket::whereHas('appointment', function ($q) {
                    $q->where('user_id', auth()->id());
                })->where('status', 'called')->latest()->first();
            @endphp

            @if($called)
                <div class="mb-8 p-8 bg-red-600 text-white rounded-2xl text-center shadow-lg animate-pulse">
                    <h3 class="text-4xl font-bold mb-3">
                        🔔 ВАС ВЫЗЫВАЮТ!
                    </h3>
                    <p class="text-2xl">
                        Ваш номер: <strong>№{{ $called->queue_number }}</strong>
                    </p>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <a href="{{ route('appointments.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white p-6 rounded-xl text-center text-xl font-bold">
                    Записаться на приём
                </a>

                <a href="{{ route('appointments.index') }}"
                   class="bg-green-600 hover:bg-green-700 text-white p-6 rounded-xl text-center text-xl font-bold">
                    Мои записи
                </a>

                <a href="{{ route('queue.board') }}"
                   class="bg-purple-600 hover:bg-purple-700 text-white p-6 rounded-xl text-center text-xl font-bold">
                    Табло очереди
                </a>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl text-white">
                <h3 class="text-2xl font-bold mb-3">
                    Добро пожаловать!
                </h3>

                <p class="text-gray-300">
                    Здесь вы можете записаться на приём, посмотреть свои записи и отслеживать электронную очередь.
                </p>
            </div>

        </div>
    </div>
</x-app-layout>