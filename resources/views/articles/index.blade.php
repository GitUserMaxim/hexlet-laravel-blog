@extends('layouts.app')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@section('content')
    <h1>Список статей</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Редактировать</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Вы уверены, что хотите удалить эту статью?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection