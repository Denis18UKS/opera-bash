@extends('layouts.header')
@section('title', 'Главная')
@section('content')
<div class="container">
    <h1>Панель администратора</h1>
    <form action="">
        <div class="mb-3">
            <label for="email" class="col-form-label">Почта</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
            @error('email')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="col-form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
@endsection