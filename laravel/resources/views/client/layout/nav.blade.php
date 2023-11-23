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
                
                @if (Auth::check())
                <li class="nav-item {{ Route::currentRouteName() == 'specialist' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('specialist') }}">Especialistas</a>
                </li>
                @endif
                

                <li class="nav-item {{ Route::currentRouteName() == 'contactanos.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contactanos.index') }}">Contáctanos</a>
                </li>
                {{-- <li><a class="nav-link" href="{{ route('admin.index') }}">Panel Admin Prueba</a></li> --}}

            </ul>


            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @if (Auth::check())
                    <!-- Ítems autenticados... -->
                    <li>
                        <a class="nav-link" href="{{ route('perfil.edit', auth()->user()->id) }}">
                            <i class="fa-solid fa-user fa-lg" aria-hidden="true"></i>
                        </a>
                    </li>
                    


                    <li>
                        <a class="nav-link" href="#" onclick="confirmLogout(event)">
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
            @include('client.layout.sweetalert')
        </div>
    </div>

</nav>
