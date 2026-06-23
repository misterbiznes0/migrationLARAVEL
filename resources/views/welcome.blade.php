<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Миграционная служба</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-slate-100">

<div class="min-h-screen">

    <!-- HEADER -->
    <header class="px-10 py-6 flex justify-between items-center border-b border-slate-800">
        <h1 class="text-2xl font-bold text-blue-400">
            Миграционная служба
        </h1>

        <div class="flex gap-3">
            @auth
                <a href="{{ route('dashboard') }}"
                   class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition">
                    Кабинет
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="text-slate-300 hover:text-white transition">
                    Войти
                </a>

                <a href="{{ route('register') }}"
                   class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition">
                    Регистрация
                </a>
            @endauth
        </div>
    </header>

    <!-- HERO -->
    <section class="max-w-6xl mx-auto px-10 py-20 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <h1 class="text-5xl font-extrabold mb-6 leading-tight">
                Онлайн-запись без очередей
            </h1>

            <p class="text-slate-400 text-lg mb-8">
                Запишитесь на приём заранее и получите номер электронной очереди.
            </p>

            <div class="flex gap-4">
                @auth
                    <a href="{{ route('appointments.create') }}"
                       class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-xl text-lg transition">
                        Записаться
                    </a>

                    <a href="{{ route('appointments.index') }}"
                       class="bg-slate-800 hover:bg-slate-700 px-6 py-3 rounded-xl transition">
                        Мои записи
                    </a>
                @else
                    <a href="{{ route('register') }}"
                       class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-xl text-lg transition">
                        Начать
                    </a>
                @endauth
            </div>
        </div>

        <!-- СТАТИСТИКА -->
        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-xl">

            <div class="mb-6">
                <p class="text-slate-400">Сейчас в очереди</p>
                <p class="text-6xl font-bold text-blue-400">
                    {{ \App\Models\QueueTicket::where('status','waiting')->count() }}
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-slate-800 p-4 rounded-xl text-center">
                    <p class="text-green-400 text-2xl font-bold">
                        {{ \App\Models\QueueTicket::where('status','done')->count() }}
                    </p>
                    <p class="text-slate-400 text-sm">Завершено</p>
                </div>

                <div class="bg-slate-800 p-4 rounded-xl text-center">
                    <p class="text-yellow-400 text-2xl font-bold">
                        {{ \App\Models\QueueTicket::where('status','called')->count() }}
                    </p>
                    <p class="text-slate-400 text-sm">Вызвано</p>
                </div>
            </div>

        </div>
    </section>

    <!-- УСЛУГИ -->
    <section class="max-w-6xl mx-auto px-10 pb-20">

        <h2 class="text-3xl font-bold mb-10 text-center">
            Услуги
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl hover:border-blue-500 transition">
                <h3 class="text-xl font-semibold mb-2">Получение паспорта</h3>
                <p class="text-slate-400">
                    Быстрая подача документов без очереди.
                </p>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl hover:border-blue-500 transition">
                <h3 class="text-xl font-semibold mb-2">Продление визы</h3>
                <p class="text-slate-400">
                    Продление срока пребывания.
                </p>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl hover:border-blue-500 transition">
                <h3 class="text-xl font-semibold mb-2">Регистрация</h3>
                <p class="text-slate-400">
                    Регистрация по месту проживания.
                </p>
            </div>

        </div>
    </section>

    <!-- КАК ЭТО РАБОТАЕТ -->
    <section class="max-w-6xl mx-auto px-10 pb-20">

        <h2 class="text-3xl font-bold mb-10 text-center">
            Как это работает
        </h2>

        <div class="grid md:grid-cols-3 gap-6 text-center">

            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl">
                <div class="text-3xl font-bold mb-2 text-blue-400">1</div>
                <p class="text-slate-400">Выберите услугу</p>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl">
                <div class="text-3xl font-bold mb-2 text-blue-400">2</div>
                <p class="text-slate-400">Укажите время</p>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl">
                <div class="text-3xl font-bold mb-2 text-blue-400">3</div>
                <p class="text-slate-400">Получите номер</p>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center text-slate-500 py-8 border-t border-slate-800">
        © {{ date('Y') }} Электронная очередь
    </footer>

</div>

</body>
</html>