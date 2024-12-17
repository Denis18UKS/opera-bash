@extends('layouts.header')

@section('title', 'Админ панель')

@section('content')
<div class="container">
    <div class="contant">
        <div>
            <h1>Управление Новостями</h1>
            <p>Список новостей</p>

            <div class="name-news">
                @foreach ($news as $new)
                    <h5 class="card-title">
                        <a href="{{ route('editNewsForm', $new->id) }}" class="link-news">{{ $new->title }}</a>
                        <!-- Ссылка на редактирование -->
                    </h5>
                @endforeach
            </div>
        </div>
        <div class="creane-new">
            <form action="{{ route('addNews') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок:</label>
                    <input type="text" class="form-control" name="title" id="title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Описание:</label>
                    <textarea class="form-control" name="description" id="description" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Изображение:</label>
                    <input type="text" class="form-control" name="image" id="image" required>
                </div>

                <button type="submit" class="btn btn-danger">Добавить</button>
            </form>
        </div>
    </div>
</div>
@endsection