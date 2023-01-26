@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <hr>
        <div class="row justify-content-center contakts">
            <div class="col-sm-6 fons">
                <img src="fon.jpg" alt="cont" class="cont-img">
            </div>

            <div class="col-sm-6 rezume">
                <h5>__INTERIOR__</h5>
                <h3>PROJECT</h3>
                <h6 style="font-weight:bold;">Дизайнер предметно-пространственной среды</h6>
                <br>
                <br>
                <div class="work">
                    <p>Студия дизайна интерьера PROJECT INTERIOR создает и
                        реализует интерьеры для частных помещений,
                        офисов. Здесь помогут создать гармоничное пространство,
                        удобное для работы и отдыха.
                    </p>
                    <p>В основе успешной реализации любой творческой концепции лежат максимально
                        точные, приближенные к реальности модели. В результате получается качественный готовый продукт,
                        понятный заказчику и строителям.</p>
                    <ul><ins>Виды услуг дизайнера интерьера:</ins>
                        <li> <i class="fa fa-check"></i> планировочное решение — подготовка нескольких вариантов планировки
                            квартиры или офиса;</li>
                        <li> <i class="fa fa-check"></i> разработка дизайн-концепции и визуализация;</li>
                        <li> <i class="fa fa-check"></i> подготовка чертежей — разработка пакета всех технических
                            документов;</li>
                    </ul>
                    <ul><ins>Заказ дизайн-проекта:</ins>
                        <li> <i class="fa fa-check"></i> Достаточно оформить заявку по телефону или e-mail;</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row justify-content-center  contacts">
            <div class="col-sm-3">
                <p class="cont"><b>Контакты:</b>
                </p>
                <p>Минск, Беларусь
                </p>
                <p>Русецкая Виктория
                </p>
                <p>телефон: +375-44-543-32-43
                </p>
                <p>почта: des.rusetskaya@gmail.com
                </p>
            </div>

            <div class="col-sm-3">
                <p class="cont"><b>Отправить письмо:</b>
                <p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                        </div>
                    @endif

                <form action="{{ route('contact-form') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Введите имя:</label>
                        <input id="name" name="name" type="text" placehоlder="Введите имя" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Введите E-mail:</label>
                        <input id="email" name="email" type="email" placehоlder="Введите E-mail"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tel">Введите телефон:</label>
                        <input id="tel" name="tel" type="tel" placehоlder="Введите телефон"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="messege">Сообщение</label>
                        <textarea id="messege" name="messege" type="text" cols="40" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">Прикрепить файл:</label>
                        <input id="file" name="file" type="file">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-secondary text-uppercase" type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
