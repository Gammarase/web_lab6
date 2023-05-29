@extends('default_layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pricelist_style.css') }}">
@endsection

@section('content')
    <div class="pricelist">
        <div class="title">
            <h1>Прайс лист</h1>
        </div>


        <div class="pricecolumn">
            @foreach ($pricelist as $service)
                <div class="pricetile">
                    <h1>{{$service->name}}</h1>
                    <p>{{$service->description}}</p>
                    <h1 class="price">{{$service->price}}$</h1>
                </div>
            @endforeach
        </div>
    </div>
@endsection
