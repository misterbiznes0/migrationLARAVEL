<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Табло очереди</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta http-equiv="refresh" content="5">
</head>

<body class="bg-gray-950 text-white">

<div class="min-h-screen flex flex-col items-center justify-center p-10">

    <h1 class="text-5xl font-bold mb-10 text-blue-400">
        Электронная очередь
    </h1>

    <div class="bg-gray-900 border border-gray-700 rounded-3xl p-10 w-full max-w-3xl text-center shadow-2xl">
        <p class="text-gray-400 text-2xl mb-4">
            Сейчас вызывается
        </p>

        <div class="text-9xl font-extrabold text-green-400 mb-6">
            @if($called)
                № {{ $called->queue_number }}
            @else
                —
            @endif
        </div>

        @if($called)
            <p class="text-2xl">
                {{ $called->appointment->service->name }}
            </p>
        @else
            <p class="text-gray-400 text-xl">
                Пока никто не вызван
            </p>
        @endif
    </div>

    <div class="mt-10 w-full max-w-3xl bg-gray-900 border border-gray-700 rounded-2xl p-6">
        <h2 class="text-2xl font-bold mb-4 text-yellow-400">
            Следующие в очереди
        </h2>

        <div class="grid grid-cols-1 gap-3">
            @forelse($waiting as $ticket)
                <div class="bg-gray-800 rounded-xl p-4 flex justify-between items-center">
                    <span class="text-3xl font-bold">
                        № {{ $ticket->queue_number }}
                    </span>

                    <span class="text-gray-300">
                        {{ $ticket->appointment->service->name }}
                    </span>
                </div>
            @empty
                <p class="text-gray-400">
                    Очередь пустая.
                </p>
            @endforelse
        </div>
    </div>

</div>

</body>
</html>