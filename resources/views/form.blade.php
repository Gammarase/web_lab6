@extends('default_layout')

@section('style')
<link rel="stylesheet" href="{{ asset('css/form_style.css') }}">
@endsection

@section('content')
<form action='{{asset('/formreg')}}' method="post">
    @csrf
    <h1>Реєстрація</h1>
    Ім'я: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit" class="reg-button">
</form>
@endsection