<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Locadora Imperial</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</head>
<body>

<div id="app">


    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Locadora Imperial
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if(Auth::check())
               @if(\Gate::allows('admin'))
                   <!-- Menu -->
                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                   <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item dropdown">
                                   <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Cadastros
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="{{ route('admin.users.index') }}">Usuários</a>
                                       <a class="dropdown-item" href="#">Distribuidora</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="#">Filmes</a>
                                       <a class="dropdown-item" href="#">Gênero</a>
                                       <a class="dropdown-item" href="#">Mídia</a>
                                   </div>
                               </li>
                               <li class="nav-item active">
                                   <a class="nav-link" href="#">Reserva <span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                   <a class="nav-link" href="#">Locação <span class="sr-only">(current)</span></a>
                               </li>
                               <li class="nav-item active">
                                   <a class="nav-link" href="#">Pagamento <span class="sr-only">(current)</span></a>
                               </li>
                           </ul>
                       </div>

                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <!-- Left Side Of Navbar -->
                           <ul class="navbar-nav mr-auto">

                           </ul>

                           <!-- Right Side Of Navbar -->
                           <ul class="navbar-nav ml-auto">
                               <!-- Authentication Links -->
                               @guest
                                   <li class="nav-item">
                                       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                   </li>
                                   <li class="nav-item">
                                       @if (Route::has('register'))
                                           <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                       @endif
                                   </li>
                               @else

                                   <li class="nav-item dropdown">

                                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                           {{ Auth::user()->name }}
                                       </a>


                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                           <a class="dropdown-item" href="{{ route('admin.users.settings.edit') }}">
                                               {{ __('Configurações') }}
                                           </a>

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
                   @endif
            @endif


        </div>
    </nav>
    @if(Session::has('message'))
        <div class="container">
            {!! Alert::success(Session::get('message'))->close() !!}
        </div>
    @endif

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
