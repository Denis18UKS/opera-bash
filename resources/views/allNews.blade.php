@extends('layouts.header')
@section('title', 'Все мероприятия')
@section('content')
<div class="container">
    <h1>Новости</h1>
    <div class="afisha">
        @foreach ($news as $new)
            <div class="card" style="width: 18rem;">
                <img src="/images/Rectangle 153.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$new->title}}</h5>
                    <h5 class="card-title">{{$new->description}}</h5>
                </div>
            </div>
        @endforeach
    </div>

    @if ($news->hasMorePages())
        <button type="button" class="btn btn-danger">
            <a class="view-a" href="{{$news->nextPageUrl()}}">Смотреть еще</a>
        </button>
    @endif
</div>
@endsection