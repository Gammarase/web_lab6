@extends('default_layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/search_page_style.css') }}">
@endsection

@section('content')
    <div class="roleinfo">
        <div class="title">
            <h1>Пошук ролей</h1>
        </div>

        <form method="get" action="{{url('/role_search')}}">
            <input type="text" name="search_string">
            <input class="reg-button" type="submit" value="Пошук">
        </form>
        <div class="search-result">
            @if(count($searched_roles))
                @foreach ($searched_roles as $searched_role)
                    <a href="{{url("role/$searched_role->id")}}"><h1>{{$searched_role->name}}</h1></a>
                @endforeach
            @else
                <p>Ролі не знайдено</p>
            @endif

        </div>
    </div>
@endsection
