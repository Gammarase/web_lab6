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

    <form action='{{url('/dashboard/add_order')}}' method="post">
        @csrf
        <h1>Нове замовлення</h1>
        Ім'я: <input type="text" name="name"><br>
        Опис: <input type="text" name="description"><br>
        Дата виконання: <input type="date" name="deadline"><br>
        Послуги:
        @foreach($services as $service)
            <div class="checkbox-row">
                <input type="checkbox" id="{{$service->id}}" name="{{$service->id}}">
                <label for="{{$service->id}}">{{$service->name}}</label>
            </div>
        @endforeach
        <input type="submit" class="reg-button" value="Додати замовлення">
    </form>

@endsection
