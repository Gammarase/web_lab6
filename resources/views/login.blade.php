@extends('default_layout')

@section('style')
<link rel="stylesheet" href="{{ asset('css/form_style.css') }}">
@endsection

@section('content')

@if ($errors-> any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action='{{url('/login')}}' method="post">
    @csrf
    <h1>Вхід</h1>
    E-mail: <input type="text" name="email"><br>
    Пароль: <input type="password" name="password"><br>
    <input type="submit" class="reg-button" value="Увійти">
    <p>Немає аккаунту? <a href="{{url('registration')}}">Зареєструватись</a></p>
</form>


@endsection
