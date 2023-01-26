<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&family=Marmelad&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css') }}"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style_menu.css') }}">
    <script src="{{ asset('script_menu.js') }}"></script>
    @stack('styles')
    <title>Дизайн интерьера в Минске</title>
</head>

<body>
    <!--Шапка сайта-->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <header>
                        <!--боковое меню-->
                        <span class="toggle-button">
                            <div class="menu-bar menu-bar-top"></div>
                            <div class="menu-bar menu-bar-middle"></div>
                            <div class="menu-bar menu-bar-bottom"></div>
                        </span>
                        <div class="menu-wrap">
                            <div class="menu-sidebar">
                                <ul class="menu">
                                    <li><a href="{{ asset('/') }}">Главная</a></li>
                                    <li><a href="{{ asset('about') }}">Обо мне</a></li>
                                    <li><a href="{{ asset('portfolio') }}">Интерьеры</a></li>
                                    <!--<li class="menu-item-has-children"><a href="#">Интерьеры</a>
                                        <span class="sidebar-menu-arrow"></span>
                                        <ul class="sub-menu">
                                            <li><a href="#">Квартира</a></li>
                                            <li><a href="#">Кафе</a></li>
                                            <li><a href="#">Офис</a></li>
                                            <li><a href="#">Рестаран</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="#">Проектирование мебели</a></li>
                                    <li><a href="#">Блог</a></li>
                                    <li><a href="{{ asset('contact') }}">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--боковое меню конец-->
                </div>
                <div class="col-sm-4 wrapper">
                    <div class="text">
                        <a class="navbar-brand a" href="{{ asset('/') }}">
                            <h4>Interior project</h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="wrapper">
                        <section class="text" id="menu">
                            <a class="navbar-brand a d-none d-lg-inline" href="{{ asset('about') }}">Обо мне</a>
                            <a class="navbar-brand a d-none d-lg-inline"
                                href="{{ asset('portfolio') }}">Интерьеры</a>
                            <a class="navbar-brand a d-none d-lg-inline" href="#">Проектирование мебели</a>
                            <a class="navbar-brand a d-none d-lg-inline" href="{{ asset('contact') }}">Контакты</a>


                            @guest
                                <a class="btn btn-outline-secondary" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                @if (Route::has('register'))
                                    <a class="btn btn-outline-secondary"
                                        href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                @endif
                            @else
                                @hasrole('admin')
                                    <a class="navbar-brand a" href="{{ route('home') }}">Аккаунт</a>
                                    <!--Админ-->
                                @else
                                    <a class="navbar-brand a" href="{{ route('test1') }}">Аккаунт</a>
                                @endhasrole

                                <li class="navbar-brand a dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            {{ __('Выйти') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            </ul>
                        </section>
                    </div>


                </div>
            </div>

        </div>

    </header>
    <!--Шапка сайта конец-->

    <!--тело сайта-->

    @yield("content")
    <br>
    <!--тело сайта конец-->

    <section class="info">
        <hr class="hr">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <div class="footer-clean">
            <footer>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 item">
                            <img id="logo_footer" src="{{ asset('MY LOGOoffFon2.png') }}">

                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3><a href="{{ asset('/') }}">Цены</a></h3>
                            <ul>
                                <li><a href="{{ asset('portfolio') }}">Портфолио</a></li>
                                <li><a href="{{ asset('about') }}">Обо мне</a></li>
                                <li><a href="{{ asset('contact') }}">Контакты</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Русецкая Виктория</h3>
                            <ul>
                                <li>+375-44-546-32-43</li>
                                <li>des.rusetskaya@gmail.com</li>

                            </ul>
                        </div>
                        <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a
                                href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i
                                    class="icon ion-social-snapchat"></i></a><a
                                href="{{ asset('https://www.instagram.com/rusetskaya_designer/') }}"><i
                                    class="icon ion-social-instagram"></i></a>
                            <p class="copyright">Interior project © 2021</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    @stack('picture')
    <!--подвал-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    @stack('scripts')
</body>

</html>
