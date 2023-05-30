@extends('default_layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user_page_style.css') }}">
@endsection

@section('content')

    <div class="title">
        <div class="reg-button">
            <a href="{{url('price')}}">
                <svg viewBox="0 0 1000 1004.1441" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m646 875.144h-521v-583h229c12 0 21-10 21-21v-229h417v562c0 12 9 21 21 21s20-9 20-21v-583c0-12-9-21-20-21h-459c-3 0-5 1-8 2-1 0-1 1-2 1-2 1-3 2-5 3l-250 250c0 1-1 2-2 3l-2 4c-1 2-2 5-2 8v625c0 11 10 21 21 21h542c11 0 21-10 21-21s-10-21-21-21zm-491-625 178-179v179zm762 635c0-47-51-63-84-69v-64c24 5 41 17 42 28s12 19 23 19c11-2 20-12 19-23-4-34-38-60-84-66v-23c0-11-9-20-20-20s-21 9-21 20v23c-48 6-84 35-84 71 0 48 51 63 84 70v63c-24-4-41-16-42-27-1-12-12-20-23-19s-20 11-18 23c3 33 37 60 83 66v22c0 12 9 21 21 21s20-9 20-21v-22c49-7 84-36 84-72zm-167-104c0-11 17-24 42-29v56c-34-8-42-19-42-27zm83 134v-57c34 8 42 19 42 27 0 12-17 25-42 30zm-562-540c-35 0-63 28-63 62s28 63 63 63 62-28 62-63-28-62-62-62zm0 83c-12 0-21-9-21-21s9-20 21-20 21 9 21 20-10 21-21 21zm0 84c-35 0-63 28-63 62s28 63 63 63 62-28 62-63-28-62-62-62zm0 83c-12 0-21-9-21-21s9-21 21-21 21 10 21 21-10 21-21 21zm0 83c-35 0-63 28-63 63s28 62 63 62 62-28 62-62-28-63-62-63zm0 84c-12 0-21-10-21-21s9-21 21-21 21 9 21 21-10 21-21 21zm167-375c-12 0-21 9-21 20s9 21 21 21h250c11 0 20-9 20-21s-9-20-20-20zm250 166h-250c-12 0-21 10-21 21s9 21 21 21h250c11 0 20-9 20-21s-9-21-20-21zm-42 167h-208c-12 0-21 9-21 21s9 21 21 21h208c11 0 21-10 21-21s-10-21-21-21z"/>
                </svg>
            </a>
        </div>
        <h1>Особистий кабінет</h1>
        <div class="reg-button">
            <a href="{{url('logout')}}">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m497 273-168 168c-15 15-41 4.5-41-17v-96h-136c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136v-96c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zm-305 163v-40c0-6.6-5.4-12-12-12h-84c-17.7 0-32-14.3-32-32v-192c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-84c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="userinfo">
        <svg class="avatar" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="m12 4a4 4 0 0 1 4 4 4 4 0 0 1 -4 4 4 4 0 0 1 -4-4 4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2h-16v-2c0-2.21 3.58-4 8-4z"/>
        </svg>
        <div class="contact-info">
            <h1>{{$user->name}}</h1>
            <p>{{$user->email}}</p>
        </div>
        <div class="spacing"></div>
        <a href="{{url('/user_search')}}">
            <div class="reg-button">
                <svg class="search-button" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m0 0h24v24h-24z" fill="#fff" opacity="0"/>
                    <path
                        d="m20.71 19.29-3.4-3.39a7.92 7.92 0 0 0 1.69-4.9 8 8 0 1 0 -8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zm-15.71-8.29a6 6 0 1 1 6 6 6 6 0 0 1 -6-6z"
                        fill="#fff"/>
                </svg>
            </div>
        </a>
    </div>


    <div class="orders">
        <div class="orders-title">
            <h1>Ваші активні замовлення:</h1>
            <a href="{{url('dashboard/order_archive')}}">
                <div class="reg-button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v2a2 2 0 0 1-1.017 1.742c.011.084.017.17.017.258v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9c0-.087.006-.174.017-.258A2 2 0 0 1 2 7V5zm18 2V5H4v2h16zM5 9v10h14V9H5zm3 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1z"
                            fill="#fff"/>
                    </svg>
                </div>
            </a>
            <a href="{{url('dashboard/new_order')}}">
                <div class="reg-button">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m0 0h24v24h-24z" fill="#fff" opacity="0" transform="matrix(-1 0 0 -1 24 24)"/>
                        <path d="m19 11h-6v-6a1 1 0 0 0 -2 0v6h-6a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2z"
                              fill="#fff"/>
                    </svg>
                </div>
            </a>
        </div>
        @if(count($user->orders->where('completed', 0))!=0)
            @foreach ($user->orders->where('completed', 0) as $order)
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
            <p>Поки що нема замовлень від вас, спробуйте додати</p>
        @endif

    </div>


    <div class="roles">
        <div class="role-title">
            <h1>Ваші ролі:</h1>

            <a href="{{url('/role_search')}}">
                <div class="reg-button">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m0 0h24v24h-24z" fill="#fff" opacity="0"/>
                        <path
                            d="m20.71 19.29-3.4-3.39a7.92 7.92 0 0 0 1.69-4.9 8 8 0 1 0 -8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zm-15.71-8.29a6 6 0 1 1 6 6 6 6 0 0 1 -6-6z"
                            fill="#fff"/>
                    </svg>
                </div>
            </a>

            <a href="{{url('dashboard/available_roles')}}">
                <div class="reg-button">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m0 0h24v24h-24z" fill="#fff" opacity="0" transform="matrix(-1 0 0 -1 24 24)"/>
                        <path d="m19 11h-6v-6a1 1 0 0 0 -2 0v6h-6a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2z"
                              fill="#fff"/>
                    </svg>
                </div>
            </a>


        </div>

        @if(count($user->roles)!=0)
            <div class="rolesrow">
                @foreach ($user->roles as $role)
                    <a href="{{url("role/$role->id")}}">
                        <h1>{{$role->name}}</h1>
                        <form action="{{url('/dashboard/remove_role')}}" method="post">
                            @csrf
                            <button class="tooltip" type="submit" name="role_id" value="{{$role->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25"
                                     width="25">
                                    <path fill="#4C4B63"
                                          d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z"
                                          clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                                <span class="tooltiptext">Прибрати</span>
                            </button>
                        </form>
                    </a>
                @endforeach
            </div>
        @else
            <p>Поки що у вас немає ролей, спробуйте додати</p>
        @endif

    </div>

@endsection
