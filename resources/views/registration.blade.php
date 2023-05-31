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

<form action='{{url('/registration')}}' method="post">
    @csrf
    <h1>Реєстрація</h1>
    Ім'я: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Пароль: <input type="password" name="password"><br>
    Повтор паролю: <input type="password" name="repeat_password"><br>
    <input type="submit" class="reg-button" value="Зареєструватись">
    <p>Вже є аккаунт? <a href="{{url('login')}}">Увійти</a></p>
</form>


@endsection
