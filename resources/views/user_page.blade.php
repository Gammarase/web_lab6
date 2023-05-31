@extends('default_layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user_page_style.css') }}">
@endsection

@section('content')

    <div class="title">
        <h1>Інформація про користувача</h1>
    </div>

    <div class="userinfo">
        <div class="general-info">
            <svg class="avatar" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m12 4a4 4 0 0 1 4 4 4 4 0 0 1 -4 4 4 4 0 0 1 -4-4 4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2h-16v-2c0-2.21 3.58-4 8-4z"/>
            </svg>
            <div class="contact-info">
                <h1>{{$view_user->name}}</h1>
                <p>{{$view_user->email}}</p>
            </div>
        </div>
    </div>


    <div class="roles">
        <h1>Roles:</h1>
        @if(count($view_user->roles)!=0)
            <div class="rolesrow">
                @foreach ($view_user->roles as $role)
                    <a href="{{url("role/$role->id")}}"><h1>{{$role->name}}</h1></a>
                @endforeach
            </div>
        @else
            <p>У користувача немає ролей</p>
        @endif

    </div>

@endsection
