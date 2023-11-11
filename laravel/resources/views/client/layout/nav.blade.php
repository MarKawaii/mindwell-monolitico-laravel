<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">MIND-WELL<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('index') }}">Inicio</a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">Quiénes Somos</a>
                </li>

                <li><a class="nav-link" href="services.html">Servicios</a></li>
                <li><a class="nav-link" href="services.html">Centros Médicos</a></li>

                <li class="nav-item {{ Route::currentRouteName() == 'autohelp' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('autohelp') }}">Autoayuda</a>
                </li>

                <li><a class="nav-link" href="blog.html">Especialistas</a></li>
                <li><a class="nav-link" href="contact.html">Contáctanos</a></li>
                {{-- <li><a class="nav-link" href="{{ route('admin.index') }}">Panel Admin Prueba</a></li> --}}

            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @if (Auth::check())
                    <!-- Si el usuario está autenticado, redirecciona a otra vista (por ejemplo, perfil del usuario) -->
                    <li>
                        <a class="nav-link" href="aque va la ruta user edit">
                            <i class="fa-solid fa-user fa-lg" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fa-solid fa-door-closed fa-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                @else
                    <!-- Si el usuario NO está autenticado, muestra el modal de login -->
                    <li>
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#googleLoginModal">
                            <i class="fa-solid fa-user fa-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                @endif
                <!-- Modal -->
                @include('client.layout.login')
        </div>
    </div>

</nav>
