<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Услуги</title>
    <link rel="stylesheet" href="/css/migration-ui.css">
</head>
<body>

<header class="header">
    <a href="/" class="logo">Миграционная служба</a>
    <nav class="nav">
        <a href="/">Главная</a>
        <a href="/dashboard">Кабинет</a>
    </nav>
</header>

<main class="container">
    <h1>Доступные услуги</h1>
    <p style="color:#667085;">Выберите услугу для записи.</p>

    <div class="card-grid">
        @foreach(\App\Models\Service::all() as $service)
            <div class="card">
                <h3>{{ $service->name }}</h3>
                <p>{{ $service->description }}</p>
                <p><b>Длительность:</b> {{ $service->duration }} минут</p>

                @if(isset($service->price))
                    <p><b>Стоимость:</b> {{ $service->price }} ₽</p>
                @endif

                <a href="/appointments/create?service_id={{ $service->id }}" class="btn">
                    Записаться
                </a>
            </div>
        @endforeach
    </div>
</main>

</body>
</html>