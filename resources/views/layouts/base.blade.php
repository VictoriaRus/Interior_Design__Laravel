<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css')}}" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
	@stack('styles')
    <title>Hello, world!</title> 
  </head>
  <body>
	<div class="container-fluid">
		<div class="row" id="header">
			<div class="col-xl-4" id="logo">
				<a class="nav-link" href="{{asset('/')}}"><h1>COSMO</h1></a>
			</div>
			<div class="col-xl-8" id="menu">
				<ul class="nav">
					<li class="nav-item">
					  <a class="nav-link" href="{{asset('about')}}">About</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="{{asset('portfolio')}}">Portfolio</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="{{asset('contact')}}">Contact</a>
					</li>
                   @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
							<li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">User account</a>
                                </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
				  </ul>
				  
			</div>
		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-1">
				<a class="nav-link" href="#"><img src="{{asset('in.png')}}" style="width: 50px;"></a>
				<a class="nav-link" href="#"><img src="{{asset('tl.png')}}" style="width: 50px;"></a>
				<a class="nav-link" href="#"><img src="{{asset('vk.png')}}" style="width: 50px;"></a>
			</div>
			<div class="col-sm-4">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					  <div class="carousel-item active">
						  <img src="{{asset('1-1.png')}}" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="{{asset('1-2.png')}}" class="d-block w-100" alt="...">
					  </div>
					  <div class="carousel-item">
						<img src="{{asset('1-3.png')}}" class="d-block w-100" alt="...">
					  </div>
					</div>
				  </div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-8 col-sm-6" id="texts">
					  <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</p> 
@yield("content")
					</div>

@stack('picture')

				  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-1"></div>
			<div class="col-sm-4">Русецкая В.В. группа №90431</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-8 col-sm-6"></div>
					<div class="col-4 col-sm-6" id="next">
						<a class="nav-link" href="#"><h6><ins> Next page </ins>➜</h6></a>
					</div>
				  </div>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	@stack('scripts')
  </body>
</html>