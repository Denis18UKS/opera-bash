@extends('layouts.header')

@section('title', 'Админ панель')

@section('content')
<div class="container">
    <div class="contant">
        <div>
            <h1>Управление Афишей</h1>
            <p>Список мероприятий</p>

            <div class="name-news">
                @foreach ($event as $events)
                    <h5 class="card-title">
                        <a href="{{ route('editEventForm', $events->id) }}" class="link-news">{{ $events->title }}</a>
                        <!-- Ссылка на редактирование -->
                    </h5>
                @endforeach
            </div>
        </div>
        <div class="creane-new">
            <h2>Создание мероприятия</h2>
            <form action="{{route('admin_poster_add')}}" method="POST" class="form_create_news"
                enctype="multipart/form-data">
                @csrf
                <label for="">Заголовок</label>
                <input type="text" name="title">
                <label for="">Подзаголовок</label>
                <textarea name="subtitle" id=""></textarea>
                <label for="">Ограничение</label>
                <select name="id_age_restriction" id="">
                    <option value="1">0+</option>
                    <option value="2">6+</option>
                    <option value="3">12+</option>
                    <option value="4">16+</option>
                    <option value="5">18+</option>
                </select>
                <label for="">Длительность</label>
                <input type="time" name="duration">
                <label for="">Дата/время показа</label>
                <input type="datetime-local" name="show_date">
                <label for="">Описание</label>
                <textarea name="description" id=""></textarea>
                <label for="">Коллектив</label>
                <textarea name="team" id=""></textarea>
                <label for="">Изображение</label>
                <input type="file" name="image">
                <div class="form_news_btn">
                    <input type="submit" value="Создать">
                    <a href="{{route('adminEvent')}}">Отмена</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection