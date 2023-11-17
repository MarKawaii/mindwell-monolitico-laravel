<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Mind-Well<span>.</span></a>

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

                <li class="nav-item {{ Route::currentRouteName() == 'services' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('services') }}">Servicios</a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'mediccenter' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('mediccenter') }}">Centros Médicos</a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'autohelp' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('autohelp') }}">Autoayuda</a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'specialist' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('specialist') }}">Especialistas</a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'contactus' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contactus') }}">Contáctanos</a>
                </li>
                {{-- <li><a class="nav-link" href="{{ route('admin.index') }}">Panel Admin Prueba</a></li> --}}

            </ul>

            {{-- <style>
                .custom-navbar-cta {
                    display: flex;
                    justify-content: center;
                    /* Centra los ítems en el contenedor */
                    align-items: center;
                    padding: 0;
                    list-style: none;
                }

                .custom-navbar-cta li {
                    margin: 0 8px;
                    /* Ajusta el espacio horizontal entre los ítems */
                    text-align: center;
                }

                .custom-navbar-cta li:not(:last-child) {
                    margin-right: 8px;
                    /* Ajusta el espacio a la derecha de los ítems */
                }
            </style> --}}



            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @if (Auth::check())
                    <!-- Ítems autenticados... -->
                    <li>
                        <a class="nav-link" href="aque va la ruta user edit">
                            <i class="fa-solid fa-user fa-lg" aria-hidden="true"></i>
                        </a>
                    </li>

                    {{-- <li>
                        <a class="nav-link" href="{{ route('admin.index') }}">
                            <i class="fa-solid fa-lock fa-lg" aria-hidden="true"></i>
                        </a>
                    </li> --}}

                    <li>
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fa-solid fa-door-closed fa-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                @else
                    <!-- Ítems no autenticados... -->
                    <li>
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#googleLoginModal">
                            <i class="fa-solid fa-user fa-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                @endif
            </ul>

            <!-- Modal -->
            @include('client.layout.login')
        </div>
    </div>

</nav>
