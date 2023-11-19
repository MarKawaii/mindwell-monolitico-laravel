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
                    <p class="mb-4">Cuidado especializado y compasivo en un entorno seguro y acogedor, para guiarle
                        hacia su bienestar emocional.
                    </p>
                    {{-- <p><a href="{{ route('services') }}" class="btn btn-secondary me-2">Servicios</a><a href="{{ route('contactus') }}"
                            class="btn btn-white-outline">Contacto</a></p> --}}
                </div>
            </div>

            <div class="col-lg-7">
                <div class="hero-img-wrap" style="margin-top: 40px;">
                    <!-- Asegúrate de reemplazar 'src' con la ruta correcta a la imagen que deseas mostrar -->
                    <img src="libs/client/images/equipo.png"
                        class="img-fluid" alt="Equipo de Mind-Well" style="width: 70%">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-4">
            <h2 class="mb-4 section-title">¿Qué es la salud mental?</h2>
                <p class="mb-4">La salud mental incluye nuestro bienestar emocional, psicológico y social. Afecta la forma en que pensamos, 
                    sentimos y actuamos cuando enfrentamos la vida. También ayuda a determinar cómo manejamos el estrés, nos relacionamos con los demás
                    y tomamos decisiones. La salud mental es importante en todas las etapas de la vida, desde la niñez y la adolescencia hasta la adultez y la vejez. 
                </p>
                

        </div>

        <div class="col-4">
            <img src="libs/client/images/duoc2.jpg" alt="Image" class="img-fluid w-100 float-lg-right rounded">
        </div>

        <div class="col-4">
            <img src="libs/client/images/duoc2.jpg" alt="Image" class="img-fluid w-100 float-lg-right rounded">
        </div>

    </div>

</div>
<!-- End Hero Section -->


<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">¿Por qué nosotros?</h2>
                <p>Como equipo de Mind-Well, queremos brindarte un apoyo para acceder a información sobre Salud mental y un fácil acceso a nuestros especialistas</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="libs/client/images/truck.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Fast &amp; Free Shipping</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                vulputate.
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="libs/client/images/bag.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                vulputate.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="libs/client/images/support.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                vulputate.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="libs/client/images/return.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                                vulputate.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="libs/client/images/image5.jpg" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>

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
                <h3 clas><a href="#"><span class="">Alan</span> Jara</a></h3>
                    <span class="d-block position mb-4">Estudiante de Ingeniería en Informática</span>
                    <p>Especialista en hacerse la wawa</p>
                    <p class="mb-0"><a href="https://www.linkedin.com/in/alan-jara-616427140/" class="more dark">Perfil de LinkedIn<span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="libs/client/images/yo3.jpg" class="img-fluid mb-5 w-98 rounded">

                <h3 clas><a href="#"><span class="">Diego</span> Arancibia</a></h3>
                    <span class="d-block position mb-4">Estudiante de Ingeniería en Informática</span>
                    <p>Separated they live in.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class="mb-0"><a href="https://www.linkedin.com/in/diego-ignacio-arancibia-pinto-92a3301ba/" class="more dark">Perfil de LinkedIn <span class="icon-arrow_forward"></span></a></p>

            </div> 
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="libs/client/images/carlos.jpg" class="img-fluid mb-5 rounded">
                <h3 clas><a href="#"><span class="">Carlos</span> Poblete</a></h3>
                    <span class="d-block position mb-4">Estudiante de Ingeniería en Informática</span>
                    <p>Separated they live in.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class="mb-0"><a href="https://www.linkedin.com/in/carlos-poblete-plaza-8a1347268/" class="more dark">Perfil de LinkedIn <span class="icon-arrow_forward"></span></a></p>
            </div> 
            <!-- End Column 3 -->

            

        </div>
    </div>
</div>
<!-- End Team Section -->

@endsection
