<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{URL::to('js/app.js')}}" type="text/javascript">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /*body {
            padding: 0px;

        }*/
        #tabelaPecas{
            padding: 20000px;
        }
        button{
            margin: 2px;
        }
        .img-fluid {
            width: 100px;
        }
        .img-alert{
            width: 20px;
        }
        .modal-danger{
            background-color: red;
        }
        .modal-title-apagar{
            color: white;
        }
        /*#selectLocal {
            width: 340;
            /*width: auto;*/
        /*}*/
        .modal-success{
            background-color: #28B463;
        }

        #nomeprofile {
            width: 30;
            /*width: auto;*/
        /*}
    </style>
</head>
<body>
    <div id="app">
        @guest
        @else
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                        @if (Route::has('login'))
                        @auth
                        <li @if($current == "home") class="nav-item active" @else class="nav-item" @endif>
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        @endauth
                        @endif
                      

                        <li @if($current == "pecas") class="nav-item active" @else class="nav-item" @endif>
                            <a class="nav-link" href="{{ route('pecas.index') }}">Peças</a>
                        </li>
                        <li @if($current == "equipamentos") class="nav-item active" @else class="nav-item" @endif>
                            <a class="nav-link" href="{{ route('equipamentos.index') }}">Equipamentos</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li @if($current == "login") class="nav-item active" @else class="nav-item" @endif>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                         @endguest
                             @if(Auth::user()->nivel == "1")
                                @if (Route::has('register'))
                                <li @if($current == "register") class="nav-item active" @else class="nav-item" @endif>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                            @else
                            @endif
                            @if(Auth::check())
                            <li @if($current == "profile") class="nav-item dropdown active" @else class="nav-item dropdown" @endif>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                                    <a class="dropdown-item" href="{{ route('profile', Auth::user()) }}"> 
                                        {{ __('Perfil') }}
                                    </a>
                                </div>
                            </li>
                       @endif
                    </ul>
                </div>
            </div>
        </nav>
        @endguest
        <main class="py-4">
            @yield('content')
            
        </main>

    </div>
    
</body>
</html>
