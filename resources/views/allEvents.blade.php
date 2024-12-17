@extends('layouts.header')
@section('title', 'Все мероприятия')
@section('content')
<div class="container">
    <h1>Афиша</h1>
    <div class="afisha">
        @foreach ($events as $event)
            <div class="card" style="width: 18rem;">
                <img src="/images/Rectangle 153.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <h5 class="card-title">{{$event->subtitle}}</h5>
                    <h5 class="card-title">{{$event->show_date}}</h5>
                </div>
            </div>
        @endforeach
    </div>

    @if ($news->hasMorePages())
        <button type="button" class="btn btn-danger">
            <a href="{{$news->newxPageUrl()}}" class="view-a">Смотреть ещё</a>
        </button>
    @endif
</div>
@endsection