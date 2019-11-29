<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Sikawi Unej</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/maintenance" class="nav-link">Informasi</a></li>
                <li class="nav-item"><a href="/package" class="nav-link">Investasi</a></li>
                <li class="nav-item"><a href="/maintenance" class="nav-link">Contact</a></li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="/maintenance">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        @if(Auth::user()->hasAnyRole('admin'))
                        <a class="dropdown-item" href="{{ route('investasi.index') }}">
                            {{ __('Manage') }}
                        </a>
                        @endif
                        @if(Auth::user()->hasAnyRole('pengawas'))
                        <a class="dropdown-item" href="{{ route('investasi.index') }}">
                            {{ __('Manage') }}
                        </a>
                        @endif

                        @if(Auth::user()->hasAnyRole('investor'))
                        <a class="dropdown-item" href="/maintenance">
                            {{ __('Menu') }}
                        </a>
                        @endif

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