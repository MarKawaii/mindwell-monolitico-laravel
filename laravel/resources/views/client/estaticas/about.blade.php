@extends('client.layout.app')

@section('page-title')
@endsection

@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1><span class="d-block">¿Quiénes somos?</span> </h1>
                    <p class="mb-4">Estudiantes, entusiastas por querer mejorar la salud mental en Chile.
                    </p>
                    {{-- <p><a href="{{ route('services') }}" class="btn btn-secondary me-2">Servicios</a><a href="{{ route('contactus') }}"
                            class="btn btn-white-outline">Contacto</a></p> --}}
                </div>
            </div>

            <div class="col-lg-7">
                <div class="hero-img-wrap" style="margin-top: 40px;">
                    <!-- Asegúrate de reemplazar 'src' con la ruta correcta a la imagen que deseas mostrar -->
                    <img src="libs/client/images/equipo.png"
                        class="img-fluid" alt="Equipo de Mind-Well" style="width: 60%">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-4">
            <h2 class="mb-4 section-title">Somos estudiantes con ganas de ser unos excelentes profesionales</h2>
                <p class="mb-4">Como estudiantes de Duoc UC, queremos aportar con nuestro granito de arena, realizando un pequeño aporte para la salud mental en Chile, sabemos las dificultades
                    que se presentan en Chile en temas referentes a salud mental y el difícil acceso a los recursos, es por esto que queremos unificar todos esos recursos y dejarlos en un solo lugar. 
                </p>
                

        </div>

        <div class="col-4">
            <img src="libs/client/images/duoc2.jpg" alt="Image" class="img-fluid w-100 float-lg-right rounded">
        </div>

        {{-- <div class="col-4">
            <img src="libs/client/images/duoc2.jpg" alt="Image" class="img-fluid w-100 float-lg-right rounded">
        </div> --}}

    </div>

</div>
<!-- End Hero Section -->


<!-- el Team -->

<div class="untree_co-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title">Nuestro equipo de Trabajo</h2>
            </div>
        </div>

        <div class="row justify-content-around">

            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="libs/client/images/alan.jpg" class="img-fluid mb-5 rounded">
                <h3 clas><span class="">Alan</span> Jara</a></h3>
                    <span class="d-block position mb-4">Estudiante de Ingeniería en Informática</span>
                            <ul>
                                <li>Edad: 26 años</li>
                                <li>Residencia: Maipú, Región Metropolitana</li>
                                <li>Especialidad: Desconocida</li>
                            </ul>
                    <p class="mb-0"><a href="https://www.linkedin.com/in/alan-jara-616427140/" class="more dark">Perfil de LinkedIn<span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="libs/client/images/yo3.jpg" class="img-fluid mb-5 rounded">
                <h3 clas><span class="">Diego</span> Arancibia</a></h3>
                    <span class="d-block position mb-4">Estudiante de Ingeniería en Informática</span>
                            <ul>
                                <li>Edad: 34 años</li>
                                <li>Residencia: Maipú, Región Metropolitana</li>
                                <li>Especialidad: Desarrollo Web - PM</li>
                            </ul>
                    <p class="mb-0"><a href="https://www.linkedin.com/in/alan-jara-616427140/" class="more dark">Perfil de LinkedIn<span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="libs/client/images/carlos.jpg" class="img-fluid mb-5 rounded">
                <h3 clas><span class="">Carlos</span> Poblete</a></h3>
                    <span class="d-block position mb-4">Estudiante de Ingeniería en Informática</span>
                            <ul>
                                <li>Edad: 30 años</li>
                                <li>Residencia: Maipú, Región Metropolitana</li>
                                <li>Especialidad: QA- Desarrollo Web</li>
                            </ul>
                    <p class="mb-0"><a href="https://www.linkedin.com/in/alan-jara-616427140/" class="more dark">Perfil de LinkedIn<span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 3 -->

            

        </div>
    </div>
</div>
<!-- End Team Section -->

@endsection
