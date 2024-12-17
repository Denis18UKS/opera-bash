@extends('layouts.header')
@section('title', 'Мероприятия: ')

@section('content')
<img src="/images/Rectangle 141.jpg" class="card-img-top" alt="..." style="height:400px; width:100%;object-fit: cover;">

<div class="history">
    <h1>{{$events->title}}</h1>
    <p><strong>Дата: </strong>{{$events->subtitle}}</p>>
    <p><strong>Длительность: </strong>{{$events->duration}}</p>>
    <p><strong>Ограничение: </strong>{{$events->tvalue}}</p>>
    <button type="button" class="btn btn-danger">Купить билет</button>
</div>

<div class="container">
    <p>{{ $events->show_date }}</p>
    <p>{{ $events->description }}</p>
    <a href="{{route('index')}}" class="btn btn-secondary">Назад</a>
</div>
@endsection