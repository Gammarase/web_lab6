@extends('default_layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/choose_role_style.css') }}">
@endsection

@section('content')

    <div class="title">
        <h1>Доступні ролі</h1>
    </div>


    <div class="roles">

        @if(count($available_roles)!=0)
            @foreach ($available_roles as $role)

                <a href="{{url("role/$role->id")}}">
                    <h1>{{$role->name}}</h1>
                    <form action="{{url('/dashboard/add_role')}}" method="post">
                        @csrf
                        <button type="submit" name="role_id" id="role_id" value="{{$role->id}}">Додати</button>
                    </form>
                </a>

            @endforeach
        @else
            <p>Немає доступних ролей</p>
        @endif

    </div>

@endsection
