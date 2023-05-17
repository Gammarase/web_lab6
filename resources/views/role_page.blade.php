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
    <h1>Users with this role:</h1>
    @foreach ($role->users as $user)
        <a href="{{url("user/$user->id")}}"><h1>{{$user->name}}</h1></a>
    @endforeach
</div>
</div>
@endsection