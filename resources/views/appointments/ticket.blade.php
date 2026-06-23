<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Талон записи</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @media print {
            .no-print {
                display: none !important;
            }

            body {
                background: white !important;
            }

            .ticket {
                box-shadow: none !important;
                border: 1px solid #000 !important;
            }
        }
    </style>
</head>

<body class="bg-gray-950 text-white">

<div class="min-h-screen flex items-center justify-center p-6">

    <div class="ticket bg-white text-black w-full max-w-sm rounded-2xl p-6 shadow-2xl text-center">

        <h1 class="text-2xl font-bold mb-2">
            Миграционная служба
        </h1>

        <p class="text-gray-600 mb-4">
            Электронный талон записи
        </p>

        <div class="border-t border-b border-dashed border-gray-400 py-5 mb-5">
            <p class="text-gray-600">Ваш номер очереди</p>

            <div class="text-7xl font-extrabold my-3">
                №{{ $appointment->queueTicket->queue_number ?? '-' }}
            </div>

            <p class="text-lg font-semibold">
                {{ $appointment->service->name }}
            </p>
        </div>

        <div class="text-left space-y-2 text-sm">
            <p><strong>ФИО:</strong> {{ $appointment->user->name }}</p>
            <p><strong>Email:</strong> {{ $appointment->user->email }}</p>
            <p><strong>Дата и время:</strong> {{ $appointment->appointment_time }}</p>
            <p><strong>Статус:</strong> {{ $appointment->status }}</p>
        </div>

        <div class="mt-6 border-t border-dashed border-gray-400 pt-4">
            <p class="text-xs text-gray-600">
                Пожалуйста, приходите за 10 минут до назначенного времени.
            </p>
        </div>

        <div class="no-print mt-6 flex gap-3">
            <button onclick="window.print()"
                    class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-bold">
                Печать
            </button>

            <a href="{{ route('appointments.index') }}"
               class="flex-1 bg-gray-700 hover:bg-gray-800 text-white py-2 rounded-lg font-bold">
                Назад
            </a>
        </div>

    </div>

</div>

</body>
</html>