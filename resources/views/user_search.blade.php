@extends('default_layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/search_page_style.css') }}">
@endsection

@section('content')
    <div class="roleinfo">
        <div class="title">
            <h1>Пошук користувачів</h1>
        </div>

        <form method="get" action="{{url('/user_search')}}">
            <input type="text" name="search_string">
            <input class="reg-button" type="submit" value="Пошук">
        </form>
        <div class="search-result">
            @if(count($searched_users))
                @foreach ($searched_users as $searched_user)
                    <a href="{{url("user/$searched_user->id")}}"><h1>{{$searched_user->name}}</h1></a>
                @endforeach
            @else
                <p>Користувачів не знайдено</p>
            @endif

        </div>
    </div>
@endsection
