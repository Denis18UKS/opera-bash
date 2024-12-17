<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <header>
        <div class="nav-a"><a href="" class="navbar-brand"><img src="/images/unnamed 1.png" alt=""></a>
            @guest
                <a href="{{route('index')}}">Главная</a>
                <a href="{{route('allEvent')}}">Афиша</a>
                <a href="{{route('allNews')}}">Новости</a>
                <a href="">О театре</a>
                <div class="auth">
                    <a href="{{route('signin')}}">Вход</a>
                </div>
            @endguest
            @auth
                <a href="{{route('adminEvent')}}">Афиша</a>
                <a href="{{route('adminIndex')}}">Новости</a>
                <div class="auth">
                    <a href="{{route('logout')}}">Выход</a>
                </div>
            @endauth
        </div>
    </header>
    @yield('content') // Подключает контент других страниц после навигационной панели

</body>

</html>