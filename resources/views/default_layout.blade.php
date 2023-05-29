
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppDev</title>
    <link rel="icon" href="/assets/smartphone.png">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('style')
</head>

<body>
    <input class="side-menu" type="checkbox" id="side-menu" />
    <div class="header">
        <img src="/assets/smartphone.png" alt="logo">
        <div class="logo-flex">
            <h1>AppDev</h1>

            <label class="hamb" for="side-menu"><img src="/assets/menu-hambuger.svg" alt=""></label>
            <ul>
                <li>
                    <a href="{{url('main_page')}}">
                        <p>Головна</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('about_us')}}">
                        <p>Про нас</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('portfolio')}}">
                        <p>Портфоліо</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('contacts')}}">
                        <p>Контакти</p>
                    </a>
                </li>
                <a href="{{url('login')}}">
                    <div class="reg-button">
                        <p>@if ($user)
                            {{"Вітаємо, $user->name"}}
                        @else
                            {{"Увійти"}}
                        @endif</p>
                    </div>
                </a>
            </ul>
        </div>
    </div>
    @yield('content')
    <div class="footer">
        <div class="foot-column">
            <h1>Користні посилання</h1>
            <p>Про нас</p>
            <p>Портфоліо</p>
            <p>Умови та положення</p>
        </div>
        <div class="foot-column">
            <h1>Контакти</h1>
            <p> <img src="/assets/email.svg" alt=""> example@mail.com</p>
            <p><img src="/assets/phone.svg" alt="">+380961234567</p>
            <p><img src="/assets/home-outline.svg" alt=""> м. Київ, просп. Степана Бандери 78</p>
        </div>
        <div class="foot-column">
            <h1>Соціальні мережі</h1>
            <div class="social-row">
                <img src="/assets/linkedin.svg" alt="">
                <img src="/assets/message-circle.svg" alt="">
                <img src="/assets/facebook.svg" alt="">
                <img src="/assets/twitter.svg" alt="">
            </div>
        </div>

    </div>
    <div class="rights-reserved">2023 - Всі права захищені.</div>

</body>

</html>