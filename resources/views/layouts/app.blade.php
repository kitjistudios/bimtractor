<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            .full-height {
                height: 0vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                background-color: #ffffff;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                // padding: 0 15px;
                font-size: 10px;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background-color: #ffffff;">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                     <img src="{{asset('bimtractor_logo.jpg')}}" alt="{{ config('app.name') }}" height="20" > 
                        <label class="small">{{ config('app.name') }}</label>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <i class="fa fa-user-secret nav-link" style="font-size:15px"></i><li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <i class="fa fa-edit nav-link" style="font-size:15px"></i><li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="../media/create"><i class="fa fa-camera"></i> Snap Away</a>
                                    <a class="dropdown-item" href="../profile"><i class="fa fa-edit"></i> My Profile</a>
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

            <main class="py-4" style="background-color: #ffffff">
                @yield('content')
            </main>

        </div>

    </body>
    <br>
    <br>
    <footer class="text-center ">
        <div class="row ">

            <div class="col-sm-3 links">
                <a href="">{{ config('app.name') }}</a>   
            </div>
            <div class="col-sm-3 links">
                <a href="">News</a>   
            </div>
            <div class="col-sm-3 links">
                <a href="">FAQs</a>   
            </div>
            <div class="col-sm-3 links">
                <a href="">Contact Us</a>   
            </div>
        </div>
        <br>
        <br>
        <p class="w3-hover-text-green small" >Powered by <a title="Kitji Studios" href="https://kitjistudios.azurewebsites.net/" >Kitji Studios</a></p>
    </footer>
</html>
