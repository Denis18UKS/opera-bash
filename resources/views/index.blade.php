@extends('layouts.header')
@section('title', 'Главная')
@section('content')
<div class="header">
    <div class="container">
        <h1 class="text-header">Башкирский государственный театр оперы и балеты</h1>
    </div>
</div>

<div class="history">
    <div class="">
        <p class="histoty-p">Дата основания</p>
        <h3>1938 г.</h3>
    </div>

    <div class="">
        <p class="histoty-p">Репертуар</p>
        <h3>72 произведения</h3>
    </div>

    <div class="">
        <p class="histoty-p">Абсолютно для всех</p>
        <h3>0+</h3>
    </div>
    <a href="" class="histoty-a">Узнать подробнее</a>
</div>

<div class="premieres">
    <h2>Ближайшие премьеры</h2>
    <p>Показать все <img src="/images/Arrow 1.png" alt=""></p>
</div>

<div class="afisha">
    @foreach ($event as $events)
        <div class="card" style="width: 18rem;">
            <img src="/images/Rectangle 141.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <h5 class="card-title"></h5>
                <h5 class="card-title"></h5>
                <a href="{{route('eventShow', $events0->id)}}" class="btn btn-danger">Подробнее</a>
            </div>
        </div>
    @endforeach
</div>

<div class="gid">
    <button>Правила поведения</button>
    <button>Схема зала</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        История театра
    </button>

    <button>Коллектив театра</button>
</div>

<div class="news-opera">
    <div class="container">
        <div class="news-still">
            <h2>Новости театра</h2>
            <p>Показать все <img src="/images/Arrow 1.png" alt=""></p>
        </div>

        <div class="news-card">
            @foreach ($news as $new)
                <div class="card">
                    <img src="/images/Rectangle 153.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">{{$new->title}}</h5>
                        <h5 class="card-title">{{$new->description}}</h5>

                        <a href="{{route('newsShow', $new->id)}}" class="btn btn-danger">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content">
            <div class="modal-body">
                <div class="history">
                    <div class="">
                        <p class="history-p">Дата создания</p>
                        <h3>1938 г.</h3>
                    </div>
                    <div class="">
                        <p class="history-p">Телефон </p>
                        <h3>+7 (347) 272-77-12</h3>
                    </div>
                    <div class="">
                        <p class="history-p">Касса</p>
                        <h3>Уфа, ул. Ленина, 5/10+</h3>
                    </div>
                    <a class="history-a" href="">Вернуться</a>
                </div>


                <div class="content-modal">
                    <div class="">
                        <div class="menu-link">
                            <p>История театра</p>
                            <p>Коллектив театра</p>
                            <p>Правила поведения</p>
                            <p>Панорама зала</p>
                        </div>
                        <hr>
                        <p>Башкирский государственный театр оперы и балета принял первых зрителей 14 декабря 1938 года.
                            Газиз Альмухаметов и Файзи Гаскаров — яркие представители первого поколения деятелей
                            искусства Башкортостана направили студентов для обучения в национальных студиях при
                            Ленинградском хореографическом училище и Московской консерватории.
                            В годы войны в Уфу был эвакуирован Киевский академический театр оперы и балета им.
                            Т.Шевченко. Плодотворное творческое содружество молодых башкирских и опытных украинских
                            артистов способствовало формированию исполнительской культуры и художественного вкуса,
                            эстетической позиции молодого музыкального театра.
                            Зрелое мастерство коллектива БГТОиБ ярко проявилось во время Декады башкирской литературы и
                            искусства в Москве в 1955 году. Около 70 артистов были удостоены высоких правительственных
                            наград и почетных званий, Зайтуна Насретдинова стала народной артисткой СССР, третьей в
                            стране после Галины Улановой и Ольги Лепешинской.
                            Сегодня популярны Международные фестивали оперного искусства «Шаляпинские вечера в Уфе»,
                            организуемые театром с 1991 года. Гостями оперного праздника в разные годы стали яркие певцы
                            и дирижеры Большого и Мариинского театров, Перми, Саратова, Воронежа, Екатеринбурга, Самары,
                            Новосибирска, а также из Италии, Болгарии, Германии.
                            С историей БГТОиБ неразрывно связано имя гениального танцовщика XX века Рудольфа Нуреева.
                            Именно в Уфе, на этой сцене он сделал
                            первые шаги на пути к мировой славе. С 1993 года по инициативе Юрия Григоровича проводятся
                            фестивали балетного искусства им. Р.Нуреева.
                            Авторитет нуреевских торжеств и их известность вышли далеко за пределы республики. В разные
                            годы на сцене БГТОиБ выступали ведущие солисты
                            Большого и Мариинского театров, танцовщики из Бразилии, Аргентины, Германии, Франции,
                            Италии, Испании, Бельгии, Японии, Латвии, США,
                            творческие коллективы «Григорович-балет», «Русский балет» В.Гордеева, Каирский балет,
                            балетная труппа Пермского театра</p>
                    </div>
                    <div class="bacground-img">
                        <img src="/images/Rectangle 5.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection