@extends('default_layout')

@section('content')
<div class="introduce">
    <div class="introduce-content">
        <p class="introduce-title">Проектуваня та розробка
            вашого мобільного додатку</p>
        <p class="introduce-text">Студія AppDev розробляє мобільні додатки на Android на замовлення. Ми створюємо
            проекти під ключ будь-якої складності - від дизайну до публікації в Google Play Market. Ви можете
            замовити професійну мобільну розробку за доступною для вашого бізнесу ціною.</p>
        <div class="reg-button">
            <p> Замовити консультацію</p>
        </div>
    </div>
</div>

<div class="services">
    <div class="services-title">Наші послуги</div>
    <div class="services-contaier">
        <div class="service">
            <div class="service-title">
                <img src="assets/codeing.svg" alt="">
                <p>Проектування</p>
            </div>
            <p>Cтворюємо загальні концепції та план додатку, визначаємо вимоги користувачів, розробляємо особливості
                і функціональні можливості.</p>
        </div>
        <div class="service">
            <div class="service-title">
                <img src="assets/app-designer.svg" alt="">
                <p>Дизайн</p>
            </div>
            <p>Робимо візуальні елементи програми привабливими та простими у використанні та інтуїтивно зрозумілими
                для користувачів.</p>

        </div>
        <div class="service">
            <div class="service-title">
                <img src="assets/app-development.svg" alt="">
                <p>Розробка</p>
            </div>
            <p>Пишемо код, який оживляє додаток, створюємо внутрішню інфраструктуру, проектуємо архітектуру бази
                даних.</p>

        </div>

    </div>
    <div class="services-contaier">
        <div class="service">
            <div class="service-title">
                <img src="assets/code-1.svg" alt="">
                <p>Розгортання</p>
            </div>
            <p>Налаштувуємо програму для роботи на різних пристроях, оптимізуємо її продуктивність та розміщуємо в
                магазинах додатків або на веб-сайті.
            </p>

        </div>
        <div class="service">
            <div class="service-title">
                <img src="assets/app-error.svg" alt="">
                <p>Підтримка</p>
            </div>
            <p>Надаємо постійну допомогу користувачам в роботі з додатком, усуваємо несправності, виправлємо помилки
                та інші проблеми.</p>

        </div>
        <div class="service">
            <div class="service-title">
                <img src="assets/programer.svg" alt="">
                <p>Онлайн-трекінг</p>
            </div>
            <p>Даємо вам можливість самостійно відслідковувати процес та етапи розробки додатку з усіма необхідними
                компонентами прямо на сайті.</p>

        </div>

    </div>

</div>

<div class="specialists">
    <img src="assets/pexels-cottonbro-studio-6804595.jpg" alt="">
    <div class="specialists-content">
        <p>Спеціалісти</p>
        <div class="specialists-row">
            <div class="specialists-tile">
                <h1>8+</h1>
                <p>Років реального досвіду</p>
            </div>
            <div class="specialists-tile">
                <h1>500+</h1>
                <p>Досвідчених спеціалістів</p>
            </div>
        </div>
        <div class="specialists-row">
            <div class="specialists-tile">
                <h1>100+</h1>
                <p>Завершених проектів</p>
            </div>
            <div class="specialists-tile">
                <h1>90+</h1>
                <p>Задоволених клієнтів</p>
            </div>
        </div>

    </div>
</div>

<div class="portfolio">
    <h1>Портфоліо</h1>
    <div class="portfolio-row">
        <div class="alarm">
            <p>Розумний будильник</p>
        </div>
        <div class="finances">
            <p>Фінансовий менеджер</p>
        </div>
        <div class="library">
            <p>Бібліотека</p>
        </div>
    </div>
    <a href="portfolio.html">
        <div class="portfolio-button">
            <p>Детальніше</p>
            <img src="assets/arrow-ios-forward.svg">
        </div>
    </a>
</div>

<div class="our-team">
    <h1>Наша команда</h1>
    <div class="team-row">
        <div class="team-element">
            <img src="assets/pexels-linkedin-sales-navigator-2182970.jpg" alt="">
            <p class="name">Ян Беурегард</p>
            <p class="job">Засновник</p>
        </div>
        <div class="team-element">
            <img src="assets/pexels-italo-melo-2379004.jpg" alt="">
            <p class="name">Віктор Фокс</p>
            <p class="job">Співзасновник</p>
        </div>
        <div class="team-element">
            <img src="assets/pexels-pixabay-220453.jpg" alt="">
            <p class="name">Вінсент Грифін</p>
            <p class="job">Проєктний менеджер</p>
        </div>
    </div>
</div>

<div class="final-interact">
    <h1>Отримай безкоштовну консультацію</h1>
    <div class="reg-button">
        <p>Зворотній зв'язок</p>
    </div>
</div>
    
@endsection