<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'melon') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/scrolling-nav.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{asset('js/scrolling-nav.js')}}"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-light navbar-laravel">
            <div class="container">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'melon') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <i class="fas fa-dollar-sign"></i>
                   <span class="navbar-text">1 USD={{ $rate }} UZS</span>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                
                                @if (Auth::user())
                            <a href="{{route('home.wishes')}}" class="btn"><i class="fas fa-store"></i> Wishes</a>
                    
                                <a href="{{ route('home.create') }}" class="btn btn-success">+POST</a>
                                @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user user-icon-color"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

    </div>
    <footer class="py-5 nav-color text-white">

      <div class="container-fluid">
        <div class="row">
            <div class="col">
           <div class="item-list">
            <ul>
              
            <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contacts</a></li>
                <li><a href="">Privacy and policy</a></li>
             
            </ul>
          
           </div>
        </div>
        <div class="col col-md">
            
            <div class="social text-center">
                <h4>Find us on Social Link</h4>
                <p><span id="icon-footer"><i class="fab fa-facebook"></i></span>
                <span id="icon-footer"><i class="fab fa-telegram"></i></span>
                <span id="icon-footer"> <i class="fab fa-instagram"></i></span>
            </p>
            <p class="m-0" style="color:rgb(150, 150, 150) !important">Copyright &copy; Melon store 2019</p>
          
            </div>
        </div>
        <div class="col col-md">

     <p class="decor"><q>Democracy must be built through open societies that share information. 
        When there is information, there is enlightenment. When there is debate, 
        are solutions. When there is no sharing of power, no rule of law, no accountability, 
        there is abuse, corruption, subjugation and indignation</q></p>
    </div>
        </div>
         
         </div>
       
       <!-- /.container -->
     </footer>
</body>
</html>
