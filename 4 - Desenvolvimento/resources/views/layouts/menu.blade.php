<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/movies') }}">Filmes</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/bookings') }}">Reservas</a>
        </li>
    </ul>
</div>

<div class="navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        @if (Auth::check())
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/admin') }}">Administração<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('admin.users.settings.edit') }}">
                    {{ __('Configurações') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @else
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('login') }}">Entrar<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('register') }}">Registrar<span class="sr-only">(current)</span></a>
        </li>
        @endif

    </ul>
</div>

