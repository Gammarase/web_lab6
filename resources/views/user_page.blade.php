@extends('default_layout')
@section('style')
<link rel="stylesheet" href="{{ asset('css/user_page_style.css') }}">
@endsection

@section('content')

<div class="title">
    <h1>Інформація про користувача</h1>
</div>

<div class="userinfo">
    <h1>{{$user->name}}</h1>
    <h1>{{$user->email}}</h1>
</div>

<div class="orders">
    <h1>Orders:</h1>
    @foreach ($user->orders as $order)
       <div class="order">
         <h1>{{$order->name}}</h1>
         <p>{{$order->description}}</p>
         <p>till to: {{$order->deadline}}</p>
        </div>
    @endforeach
</div>


<div class="roles">
    <h1>Roles:</h1>
    <div class="rolesrow">
    @foreach ($user->roles as $role)
        <a href="{{url("role/$role->id")}}"><h1>{{$role->name}}</h1></a>
    @endforeach
    </div>
</div>

@endsection