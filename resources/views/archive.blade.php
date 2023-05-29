@extends('default_layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user_page_style.css') }}">
@endsection

@section('content')

    <div class="title">

        <h1>Архів замовлень</h1>
    </div>

    <div class="archive-wrap">

        <div class="orders">
            @if(count($user->orders->where('completed', 1))!=0)
                @foreach ($user->orders->where('completed', 1) as $order)
                    <div class="order">
                        <h1>{{$order->name}}</h1>
                        <p>{{$order->description}}</p>
                        <p>Термін виконання: {{$order->deadline}}</p>
                        <h1>Послуги: </h1>
                        @foreach($order->services as $service)
                            <p>{{$service->name}}</p>
                        @endforeach
                        <h1>Сума: {{$order->price()}}$</h1>
                    </div>
                @endforeach
            @else
                <p>Поки що нема завершених замовлень</p>
            @endif

        </div>
    </div>

@endsection
