@extends('layouts.header')

@section('title', 'Редактирование новости')

@section('content')
<div class="container">
    <div class="contant">
        <div class="">
            <h1>Редактирование новости</h1>
            <p>Измените информацию о новости</p>

            <div class="name-news">
                <form action="{{ route('editNews', $news->id) }}" method="post">
                    @csrf <!-- Защита от CSRF атак -->
                    @method('POST') <!-- Метод POST для обновления -->

                    <div class="mb-3">
                        <label for="title" class="form-label">Заголовок:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Описание:</label>
                        <textarea class="form-control" name="description" id="description"
                            required>{{ $news->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Изображение:</label>
                        <input type="text" class="form-control" name="image" id="image" value="{{ $news->image }}"
                            required>
                    </div>

                    <button type="submit" class="btn btn-danger">Сохранить изменения</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection