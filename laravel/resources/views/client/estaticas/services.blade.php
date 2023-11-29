@extends('client.layout.app')

@section('page-title')
@endsection

@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1><span class="d-block">Servicios</span> </h1>
                    <p class="mb-4">Ofrecemos servicios sencillos y a tu alcance
                    </p>
                    {{-- <p><a href="{{ route('services') }}" class="btn btn-secondary me-2">Servicios</a><a href="{{ route('contactus') }}"
                            class="btn btn-white-outline">Contacto</a></p> --}}
                </div>
            </div>

            <div class="col-lg-7">
                <div class="hero-img-wrap" style="margin-top: -20px;">
                    <!-- Asegúrate de reemplazar 'src' con la ruta correcta a la imagen que deseas mostrar -->
                    <img src="libs/client/images/servicio100.png"
                        class="img-fluid" alt="Equipo de Mind-Well" style="width: 55%">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">¿Por qué nosotros?</h2>
                <p>Como equipo de Mind-Well, queremos brindarte un apoyo para acceder a información sobre Salud mental y un fácil acceso a nuestros especialistas. Contamos con estos servicios:</p>

                <ul>
                    <li>Acceso rápido a especialists de salud, sólo iniciando sesión.</li>
                    <li>Puedes contar con diversos tips de autoayuda</li>
                    <li>Te puedes enterar de las noticias sobre salud mental y de redes de apoyo</li>
                    <li>Puedes visualizar centros médicos de salud mental</li>
                    <li>¡Nuestro chatbot ayudará a resolver tus dudas!</li>
                    <li>Visualizar distintos programas de salud mental del gobierno</li>
                    
                </ul>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="libs/client/images/reunion.jpg" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection