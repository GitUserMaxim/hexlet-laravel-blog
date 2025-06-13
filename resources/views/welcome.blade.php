<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4">Добро пожаловать!</h1>

        <div class="list-group">
            <a href="{{ route('articles.index') }}" class="list-group-item list-group-item-action">
                📚 Список статей
            </a>

            <a href="{{ route('articles.create') }}" class="list-group-item list-group-item-action">
                ✍️ Создать новую статью
            </a>
        </div>
    </div>
</body>
</html>
