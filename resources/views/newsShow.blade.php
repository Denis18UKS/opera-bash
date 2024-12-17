@extends('layouts.header')
@section('title', 'Главная')

@section('content')
<div class="container">
    <img src="/images/Rectangle 153.jpg" class="card-img-top" alt="...">
    <a href="{{route('index')}}" class="btn btn-secondaty">Назад</a>
    <h1>{{$news->title}}</h1>
    <p><strong>Дата:</strong>{{$news->created_at}}</p>
    <p>{{$news->description}}</p>
</div>
@endsection