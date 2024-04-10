<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <div class="d-flex align-items-center w-100">
            <a class="navbar-brand" href="#">
                <img src="/media/logo.png" id="logo" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler ms-auto" id="button-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-fill justify-content-around">
                <li class="nav-item">
                    <a class="nav-link link-colors p-3 m-3 text-center" aria-current="page"
                        href="{{ route('homepage') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-colors p-3 m-3 text-center" href="{{ route('nintendo_create') }}">Carica
                        Videogioco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-colors p-3 m-3 text-center" href="{{ route('nintendos') }}">Mostra
                        Videogiochi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-colors p-3 m-3 text-center" href="{{ route('contact.us') }}">Contattaci</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-colors p-3 m-3 text-center" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu bg-warning p-3 m-3 drop-down">
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                            <li>
                                <button class="dropdown-item link-colors-drop p-3 my-2 mx-1 text-center">
                                    Esci
                                </button>
                            </li>
                            </form>
                    </li>
                </ul>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-colors p-3 m-3 text-center" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto
                    </a>
                    <ul class="dropdown-menu bg-warning p-3 m-3 drop-down">
                        <li>
                            <a class="dropdown-item link-colors-drop p-3 my-2 mx-1 text-center"
                                href="{{ route('register') }}">Registrati</a>
                        </li>
                        <li>
                            <a class="dropdown-item link-colors-drop p-3 mx-1 text-center"
                                href="{{ route('login') }}">Accedi</a>
                        </li>
                    </ul>
                </li>
            @endauth
            </ul>
        </div>
    </div>
</nav>
