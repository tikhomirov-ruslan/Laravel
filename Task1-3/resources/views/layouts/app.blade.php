<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Стандартное описание страницы')">
    <title>@yield('title', 'Laravel')</title>
    
    <!-- Подключаем CSS стили -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    @stack('styles')
</head>
<body>
    <header>
        <div class="container">
            <h1>Laravel</h1>
            <nav>
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Main</a>
                <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="/simple" class="{{ request()->is('contact') ? 'active' : '' }}">Simple-page</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>Laravel is the most productive <br>
                way to build, deploy, and <br>
                monitor software.</p>
            @env('local')
                <p class="dev-notice">Laravel</p>
            @endenv
        </div>
    </footer>

    @stack('scripts')
</body>
</html>