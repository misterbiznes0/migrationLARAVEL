<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-white">

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <div class="bg-slate-900 border border-slate-700 rounded-2xl p-8 shadow-2xl">

            <h1 class="text-3xl font-bold mb-6 text-center text-blue-400">
                Админ-панель
            </h1>

            @if($errors->any())
                <div class="mb-4 bg-red-600 p-3 rounded text-sm">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf

                <div class="mb-4">
                    <label class="block mb-2 text-sm text-slate-300">Email</label>
                    <input type="email"
                           name="email"
                           class="w-full bg-slate-800 border border-slate-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           required>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm text-slate-300">Пароль</label>
                    <input type="password"
                           name="password"
                           class="w-full bg-slate-800 border border-slate-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           required>
                </div>

                <button class="w-full bg-blue-600 hover:bg-blue-700 p-3 rounded-lg font-bold transition">
                    Войти
                </button>
            </form>

            <a href="{{ url('/') }}"
               class="block text-center mt-4 text-slate-400 hover:text-white text-sm">
                ← На главную
            </a>

        </div>

    </div>

</div>

</body>
</html>