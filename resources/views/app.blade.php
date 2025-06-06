<body>
    <div class="container mt-4">
        <nav class="mb-3">
            <a href="{{ route('articles.index') }}">Статьи</a>
            <!-- Добавь другие ссылки, если нужно -->
        </nav>

        <h1>@yield('header')</h1>
        <div>
            @yield('content')
        </div>
    </div>
</body>
