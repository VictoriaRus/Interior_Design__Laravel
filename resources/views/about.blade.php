@extends('layouts.base')

@section('content')
    <div class="container-fluid" style="padding-bottom: 125px;">
        <hr>
        <div class="row">
            <div class="col-sm-3" id="first" style="text-align: center;">

                <div class="card bg-ligh card-my" id="block" style="width: 19rem;">
                    <button id="button" style="outline: none; width: 30px; background-color: #ffffff; border: none;">
                        &#128900</button>
                    <h5>Интерьер</h5>
                    <h6>Виктория</h5>
                        <img class="card-img-top my-img" src="{{ asset('otziv.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Разработаю уникальный дизайн проект дома или квартиры с реальными
                                материалами, которые можно купить в Вашем городе за срок от 1-го месяца</p>
                        </div>
                </div>
            </div>
            <div class="col-sm-3" id="second">
                <img class="my-photo" src="{{ asset('my.jpg') }}" alt="Card image cap">
            </div>
            <div class="col-sm-6 rezume" id="third">
                <div class="work">
                    <h3>Меня зовут <b>Виктория Русецкая</b></h3>
                    <br>
                    <p>Приветствую Вас !</p>
                    <p>Я занимаюсь созданием проектов интерьера для частных и корпоративных заказчиков с 2013 года, так же
                        существляю конструкторскую разработку корпусной мебели из проекта.</p>
                    <ul><ins>Опыт работы:</ins>
                        <br>
                        <br>
                        <li> <i class="fa fa-check"></i> 2013-2015 СООО «Первая мебельная фабрика», Отдел дизайна</li>
                        <li> <i class="fa fa-check"></i> 2015-2016 ООО "Мебельные традиции проект", Дизайнер</li>
                        <li> <i class="fa fa-check"></i> 2016-2019 ЧТПУП "Бизнес-мебель", Дизайнер</li>
                    </ul>
                    <ul><ins>Образование:</ins>
                        <br>
                        <br>
                        <li> <i class="fa fa-check"></i> 2006-2008 Курсы по предмету «Творчество», Белорусский
                            государственный
                            университет</li>
                        <li> <i class="fa fa-check"></i> 2008-2013 Белорусский государственный университет<br>Специальность:
                            Дизайн
                            предметно-пространственной среды<br>Бакалавр</li>
                        <li> <i class="fa fa-check"></i> 2015-2016 Сертификат Freedom (3D-моделирования, Визуализация в 3ds
                            max,
                            3ds
                            max Текстурирование)</li>
                    </ul>
                    <div class="socseti">
                        <a class="navbar-brand a" href={{ asset('https://t.me/interior_project') }}>TELEGRAM.</a>
                        <a class="navbar-brand a"
                            href={{ asset('https://www.instagram.com/rusetskaya_designer/') }}>INSTAGRAM.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" class="about"
        style="background-color: #eae6e1;  margin-top: 0px; padding-top: 80px; padding-bottom: 60px;">
        <div class="row">
            <div class="col-sm-4">
                ЭТАПЫ РАБОТЫ
            </div>
            <div class="col-sm-4">
                <div class="feature d-flex">
                    <h5>-01-</h5>
                    <div class="feature_block">
                        <h5 class="feature_title">
                            ПОДГОТОВИТЕЛЬНЫЙ ЭТАП
                        </h5>
                        <h6 class="feature_text">
                            Знакомство и обсуждение деталей, постановка задач. Подписание договора, составление технического
                            задания. Фотофиксация и обмеры объекта.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature d-flex">
                    <h5>-02-</h5>
                    <div class="feature_block">
                        <h5 class="feature_title">
                            ПЛАНИРОВОЧНОЕ РЕШЕНИЕ
                        </h5>
                        <h6 class="feature_text">
                            Подготовка 3-4 вариантов планировок на основе технического задания и пожеланий заказчика.
                            Согласование окончательного варианта.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="feature d-flex">
                    <h5>-03-</h5>
                    <div class="feature_block">
                        <h5 class="feature_title">
                            ДИЗАЙН-КОНЦЕПЦИЯ
                        </h5>
                        <h6 class="feature_text">
                            Выяснение стилистических предпочтений, подбор основных материалов и цветовых схем, планирование
                            бюджета. Поиск решений и разработка комплексной дизайн-концепции.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature d-flex">
                    <h5>-04-</h5>
                    <div class="feature_block">
                        <h5 class="feature_title">
                            ВИЗУАЛИЗАЦИЯ
                        </h5>
                        <h6 class="feature_text">
                            Разработка детально проработанной фотореалистичной 3D визуализации всех помещений на основе
                            предыдущих этапов и пожеланий заказчика. Согласование окончательного варианта
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="feature d-flex">
                    <h5>-05-</h5>
                    <div class="feature_block">
                        <h5 class="feature_title">
                            ТЕХНИЧЕСКИЕ ЧЕРТЕЖИ
                        </h5>
                        <h6 class="feature_text">
                            Подготовка полного комплекта технических чертежей. Получение разрешительной документации на
                            перепланировку.
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature d-flex">
                    <h5>-06-</h5>
                    <div class="feature_block">
                        <h5 class="feature_title">
                            АВТОРСКИЙ НАДЗОР
                        </h5>
                        <h6 class="feature_text">
                            Ведение авторского надзора за реализацией проекта. Консультация строителей. Работа с
                            подрядчиками и поставщиками материалов.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" class="about" style=" padding-top: 80px; padding-bottom: 60px; margin-top: 0%">
        <div class="row">
            <div class="col-sm-4">
                ОТЗЫВЫ НАШИХ КЛИЕНТОВ
            </div>

            <div class="col-sm-4 reviews">
                <h5>Minsk</h5>
                <h3>Balli room</h3>
                <h6 style="font-weight:bold;">Ольга</h6>
                <div>
                    <p>"But I must explain to you how all this mistaken idea
                        of denouncing pleasure and praising pain was born
                        and I will give you a complete account of the system,
                        and expound the actual teachings of the great explorer of the truth.
                    </p>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus
                        qui blanditiis praesentium voluptatum deleniti atque
                        corrupti quos dolores et quas molestias excepturi sint."</p>
                </div>
            </div>
            <div class="col-sm-4 reviews">
                <h5>Minsk</h5>
                <h3>Balli room</h3>
                <h6 style="font-weight:bold;">Ольга</h6>
                <div>
                    <p>"But I must explain to you how all this mistaken idea
                        of denouncing pleasure and praising pain was born
                        and I will give you a complete account of the system,
                        and expound the actual teachings of the great explorer of the truth.
                    </p>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus
                        qui blanditiis praesentium voluptatum deleniti atque
                        corrupti quos dolores et quas molestias excepturi sint."</p>
                </div>
            </div>
        </div>
    </div>
@endsection
