@extends('layouts.header')

@section('title', 'Редактирование мероприятия')

@section('content')
<div class="container">
    <div class="contant">
        <div>
            <h1>Редактирование мероприятия</h1>
            <p>Измените информацию о мероприятии</p>

            <form action="{{ route('editEvent', $event->id) }}" method="POST" class="form_create_news"
                enctype="multipart/form-data">
                @csrf
                @method('POST') <!-- Указываем метод POST для обновления -->

                <label for="">Заголовок</label>
                <input type="text" name="title" value="{{ old('title', $event->title) }}">

                <label for="">Подзаголовок</label>
                <textarea name="subtitle">{{ old('subtitle', $event->subtitle) }}</textarea>

                <label for="">Ограничение</label>
                <select name="id_age_restriction">
                    @foreach ($ageRestrictions as $restriction)
                        <option value="{{ $restriction->id }}" {{ $event->id_age_restriction == $restriction->id ? 'selected' : '' }}>
                            {{ $restriction->tvalue }}
                        </option>
                    @endforeach
                </select>

                <label for="">Длительность</label>
                <input type="time" name="duration" value="{{ old('duration', $event->duration) }}">

                <label for="">Дата/время показа</label>
                <input type="datetime-local" name="show_date"
                    value="{{ old('show_date', \Carbon\Carbon::parse($event->show_date)->format('Y-m-d\TH:i')) }}">

                <label for="">Описание</label>
                <textarea name="description">{{ old('description', $event->description) }}</textarea>

                <label for="">Коллектив</label>
                <textarea name="team">{{ old('team', $event->team) }}</textarea>

                <label for="">Изображение</label>
                <input type="file" name="image">

                <div class="form_news_btn">
                    <input type="submit" value="Сохранить">
                    <a href="{{ route('adminEvent') }}">Отмена</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection