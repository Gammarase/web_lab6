@extends('default_layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/role_page_style.css') }}">
@endsection

@section('content')
    <div class="roleinfo">
        <div class="title">
            <h1>Інформація про роль</h1>
        </div>

        <div class="role">
            <h1>{{$role->name}}</h1>
        </div>


        <div class="users_with_role">
            <h1>Користувачі з цією роллю:</h1>
            @if(count($role->users))
                @foreach ($role->users as $role_user)
                    <a href="{{url("user/$role_user->id")}}"><h1>{{$role_user->name}}</h1></a>
                @endforeach
            @else
                <p>Немає користувачів пов'язаних з цією роллю</p>
            @endif

        </div>
    </div>
@endsection
