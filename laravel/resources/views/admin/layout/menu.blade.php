<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="">
            <em class=" arrow-right"></em>
            <span class="align-middle">MIND-WELL</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menú
            </li>

            <!-- Elemento del sidebar para Inicio -->
            <li class="sidebar-item">
                <a class="sidebar-link" href="">
                    <em class="align-middle" data-feather="home"></em> <span class="align-middle">Inicio</span>
                </a>
            </li>

            <!-- Elemento del sidebar para QHH -->
            {{-- <li class="sidebar-item">
                <a data-bs-target="#ui-qhh" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="false"
                    aria-controls="ui-qhh">
                    <em class="align-middle" data-feather="clock"></em> <span class="align-middle">QHH</span>
                </a>
                <ul id="ui-qhh" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="/ui-buttons">Ingresar QHH</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ui-cards">Historial de QHHs</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ui-general">Historial de Dificultades</a>
                    </li>
                </ul>
            </li> --}}

            <!-- Elemento del sidebar para Proyectos -->
            {{-- <li class="sidebar-item">
                <a data-bs-target="#ui-proyectos" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="false"
                    aria-controls="ui-proyectos">
                    <em class="align-middle" data-feather="folder"></em> <span class="align-middle">Proyectos</span>
                </a>
                <ul id="ui-proyectos" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="/ui-buttons">Todos los Proyectos</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/ui-buttons">Nuevo Proyecto</a></li>
                </ul>
            </li> --}}


            <li class="sidebar-header">
                Administrador
            </li>

            

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('trabajador.index') }}">
                    <em class="align-middle" data-feather="users"></em> <span class="align-middle">Trabajadores</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a class="sidebar-link" href="{{ route('cliente.index')  }}">
                    <em class="align-middle" data-feather="briefcase"></em> <span class="align-middle">Clientes</span>
                </a>
            </li>
            

            

        </ul>


    </div>
</nav>
