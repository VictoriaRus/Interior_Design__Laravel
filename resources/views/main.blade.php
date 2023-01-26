@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="image">
            <div class="row justify-content-start">
                <div class="col-sm-6 fons">
                    <img src="fons.jpg" id="fons" alt="фон на главной страницы">
                </div>

                <div class="col-sm-6 rezume">
                    <h2>___INTERIOR___</h2>
                    <h1>PROJECT</h1>
                    <br>
                    <h6>Современный интерьер квартиры:</h6>
                    <a href="{{ asset('https://drive.google.com/file/d/1QZi-34SaEt4I4uycpYhEshPB2ccZLi45/view?usp=sharing')}}" target="_blank" class="btn btn-outline-secondary text-uppercase">Смотреть проект</a>
                    <br>
                    <br>
                    <br>
                    <div class="work">
                        <p>Студия дизайна интерьера INTERIOR PROJECT создает и
                            реализует интерьеры для частных помещений,
                            офисов. Здесь помогут создать гармоничное пространство,
                            удобное для работы и отдыха.
                        </p>
                        <ul><ins>Виды услуг дизайнера интерьера:</ins>
                            <li> <i class="fa fa-check"></i> планировочное решение — подготовка нескольких вариантов
                                планировки квартиры или офиса;</li>
                            <li> <i class="fa fa-check"></i> разработка дизайн-концепции и визуализация;</li>
                            <li> <i class="fa fa-check"></i> подготовка чертежей — разработка пакета всех технических
                                документов;</li>
                        </ul>
                        <ul><ins>Заказ дизайн-проекта:</ins>
                            <li> <i class="fa fa-check"></i> Достаточно оформить заявку по телефону или e-mail;</li>
                        </ul>
                        <div class="socseti">
                            <a class="navbar-brand a" href={{ asset('https://t.me/interior_project') }}>TELEGRAM.</a>
                            <a class="navbar-brand a"
                                href={{ asset('https://www.instagram.com/rusetskaya_designer/') }}>INSTAGRAM.</a>
                        </div>
                    </div>

                </div>

            </div>

            <section id="section05" class="section demo d-none d-lg-block">
                <h1></h1>
                <a href="#section06"><span></span>Подробнее</a>
            </section>
        </div>

    </div>
    <section class="content" id="section06">
        <h3 id="h3">Цены на дизайн-проекты</h3>
        <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
        <section class="pricing py-5">
            <div class="container">
                <div class="row">
                    <!-- Free Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Base</h5>
                                <h6 class="card-price text-center">$18<span class="period">/м²</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Обмерные работы
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Анкетирование
                                        пожеланий</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Планировочные
                                        решения 2-5</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Коллажи (концепция
                                        жилья)</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>План
                                        демонтажа/монтажа конструкций;<br>План напольного покрытия;<br>План растоновки
                                        розеток, светильников и выключателей;</li>
                                    <li><span class="fa-li"><i
                                                class="fa fa-check"></i></span><strong>Спецификация
                                            материалов</strong></li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>3D визуализация</li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>Развертки стен по некоторым помещениям
                                    </li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>Подбор материалов</li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>Авторский надзор</li>
                                </ul>
                                <a href="{{ asset('contact') }}"
                                    class="btn btn-block btn-outline-secondary text-uppercase">Заказать проект</a>
                            </div>
                        </div>
                    </div>
                    <!-- Plus Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                                <h6 class="card-price text-center">$28<span class="period">/м²</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Обмерные работы
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Анкетирование
                                        пожеланий</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Планировочные
                                        решения 2-5</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Дополнительные
                                        чертежи к тарифу BASE:<br>+ План теплого пола;<br>+ План
                                        потолков;</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>+ План распожения
                                        сантехнического оборудования</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Спецификация
                                        материалов</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>3D
                                            визуализация</strong></li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Развертки стен по
                                        некоторым помещениям</li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>Подбор материалов</li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>Авторский надзор</li>
                                </ul>
                                <a href="{{ asset('contact') }}"
                                    class="btn btn-block btn-outline-secondary text-uppercase">Заказать проект</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                                <h6 class="card-price text-center">$40<span class="period">/м²</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Обмерные работы
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Анкетирование
                                        пожеланий
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Планировочные
                                        решения 2-5</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Дополнительные
                                        чертежи к тарифу BASE:<br>+ План теплого пола;<br>+ План
                                        потолков;</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>+ План распожения
                                        сантехнического оборудования</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Спецификация
                                        материалов</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>3D
                                        визуализация</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Развертки стен
                                        по
                                        некоторым помещениям</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>Подбор
                                            материалов</strong></li>
                                    <li><span class="fa-li"><i
                                                class="fa fa-check"></i></span><strong>Авторский надзор</strong></li>
                                </ul>
                                <a href="{{ asset('contact') }}"
                                    class="btn btn-block  btn-outline-secondary text-uppercase">Заказать проект</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <br>
        <div class="container d-none d-lg-block" id="table">
            <h4><b>Тариф BASE</b></h4>
            <hr class="table">
            <p>ТЕХНИЧЕСКОЕ ЗАДАНИЕ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="h2_table">01</h2><br>
                    Выезд на объект
                </div>
                <div class="col-sm-4">
                    <h2 class="h2_table">02</h2><br>
                    План обмера
                </div>
                <div class="col-sm-4">
                    <h2 class="h2_table">03</h2><br>
                    Планировочное решение 2-5 вариантов
                </div>
            </div>
            <hr class="table">
            <p>РАБОЧИЙ ПРОЕКТ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-2">
                    <h2 class="h2_table">01</h2><br>
                    План демонтажа конструкций
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">02</h2><br>
                    План монтажа конструкций
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">03</h2><br>
                    План растановки розеток
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">04</h2><br>
                    План растановки светильников
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">05</h2><br>
                    План растановки выключателей
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">06</h2><br>
                    План теплых полов
                </div>
            </div>
            <hr class="table">
            <p>ЭСКИЗНЫЙ ПРОЕКТ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-5">
                    <h2 class="h2_table">01</h2><br>
                    Коллажи - концепция вашего жилья*
                    <br>
                    *концепт коллажи не предусматривают правок
                </div>
            </div>
            <hr class="table">
            <p>СПЕЦИФИКАЦИЯ МАТЕРИАЛОВ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="h2_table">01</h2><br>
                    Таблица использованных отделочных материалов, мебели, дверей, светильников с указанием наименования, количества, артикулов и мест продажи
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <div class="container d-none d-lg-block plus" id="table">
            <h4><b>Тариф PLUS</b></h4>
            <hr class="table">
            <p>ТЕХНИЧЕСКОЕ ЗАДАНИЕ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="h2_table">01</h2><br>
                    Выезд на объект
                </div>
                <div class="col-sm-4">
                    <h2 class="h2_table">02</h2><br>
                    План обмера
                </div>
                <div class="col-sm-4">
                    <h2 class="h2_table">03</h2><br>
                    Планировочное решение 2-5 вариантов
                </div>
            </div>
            <hr class="table">
            <p>РАБОЧИЙ ПРОЕКТ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-2">
                    <h2 class="h2_table">01</h2><br>
                    План демонтажа конструкций
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">02</h2><br>
                    План монтажа конструкций
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">03</h2><br>
                    План растановки розеток
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">04</h2><br>
                    План растановки светильников
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">05</h2><br>
                    План растановки выключателей
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">06</h2><br>
                    План теплых полов
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    + План потолков
                    <br>
                    + План распожения сантехнического оборудования
                    <br>
                    + Развертки стен по некоторым помещениям
                </div>
            </div>
            <hr class="table">
            <p>СПЕЦИФИКАЦИЯ МАТЕРИАЛОВ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="h2_table">01</h2><br>
                    Таблица использованных отделочных материалов, мебели, дверей, светильников с указанием наименования, количества, артикулов и мест продажи
                    <br>
                </div>
            </div>
            <hr class="table">
            <p>3D ВИЗУАЛИЗАЦИЯ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-5">
                    <h2 class="h2_table">01</h2><br>
                    Фоторелистичные изображения интерьера
                    <br>
                    <br>
                </div>
            </div>
            
        </div>
        <br>
        <div class="container d-none d-lg-block" id="table" >
            <h4><b>Тариф PRO</b></h4>
            <hr class="table">
            <p>ТЕХНИЧЕСКОЕ ЗАДАНИЕ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="h2_table">01</h2><br>
                    Выезд на объект
                </div>
                <div class="col-sm-4">
                    <h2 class="h2_table">02</h2><br>
                    План обмера
                </div>
                <div class="col-sm-4">
                    <h2 class="h2_table">03</h2><br>
                    Планировочное решение 2-5 вариантов
                </div>
            </div>
            <hr class="table">
            <p>РАБОЧИЙ ПРОЕКТ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-2">
                    <h2 class="h2_table">01</h2><br>
                    План демонтажа конструкций
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">02</h2><br>
                    План монтажа конструкций
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">03</h2><br>
                    План растановки розеток
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">04</h2><br>
                    План растановки светильников
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">05</h2><br>
                    План растановки выключателей
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">06</h2><br>
                    План теплых полов
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    + План потолков
                    <br>
                    + План распожения сантехнического оборудования
                    <br>
                    + Развертки стен по некоторым помещениям
                </div>
            </div>
            <hr class="table">
            <p>СПЕЦИФИКАЦИЯ МАТЕРИАЛОВ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="h2_table">01</h2><br>
                    Таблица использованных отделочных материалов, мебели, дверей, светильников с указанием наименования, количества, артикулов и мест продажи
                    <br>
                </div>
            </div>
            <hr class="table">
            <p>3D ВИЗУАЛИЗАЦИЯ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-5">
                    <h2 class="h2_table">01</h2><br>
                    Фоторелистичные изображения интерьера
                </div>
            </div>
            <hr class="table">
            <p>КОМПЛЕКТАЦИЯ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-2">
                    <h2 class="h2_table">01</h2><br>
                    Выезд на подбор краски/обоев
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">02</h2><br>
                    Выезд на подбор напольных покрытий
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">03</h2><br>
                    Выезд на подбор плитки
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">04</h2><br>
                    Выезд в салон кухни
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">05</h2><br>
                    Выезд по подбору мебели
                </div>
            </div>
            <hr class="table">
            <p>АВТОРСКОЕ СОПРОВОЖДЕНИЕ</p>
            <hr class="table">
            <div class="row">
                <div class="col-sm-2">
                    <h2 class="h2_table">01</h2><br>
                    5 выездов к Вам на объект для контроля
                </div>
                <div class="col-sm-2">
                    <h2 class="h2_table">02</h2><br>
                    Консультации по возникшим вопросам
                    <br>
                    <br>
                </div>

            </div>
        </div>
        <br>
    </section>





@endsection
