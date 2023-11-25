@extends('client.layout.app')

@section('page-title')
@endsection

@section('content')

<style>
   .popular-product .thumbnail img {
        width: 461px; /* Ajusta el ancho según tus preferencias */
        height: 281px; /* Ajusta la altura según tus preferencias */
        object-fit: cover; /* Mantiene la relación de aspecto y cubre el contenedor */
    }

    .popular-product .product-item-lg {
        text-align: center;
        margin-bottom: 20px; /* Puedes ajustar este valor según tus preferencias */
    }
    .product-section img{
        width: 461px; /* Ajusta el ancho según tus preferencias */
        height: 441px; 
    }
    .product-title {
        text-align: center
    }
</style>


    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1><span class="d-block">Mind-Well</span> Salud Mental</h1>
                        <p class="mb-4">Cuidado especializado y compasivo en un entorno seguro y acogedor, para guiarle
                            hacia su bienestar emocional.</p>
                        <p><a href="{{ route('services') }}" class="btn btn-secondary me-2">Servicios</a><a href="{{ route('contactanos.index') }}"
                                class="btn btn-white-outline" target="_blank">Contacto</a></p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero-img-wrap" style="margin-top: -60px;">
                        <!-- Asegúrate de reemplazar 'src' con la ruta correcta a la imagen que deseas mostrar -->
                        <img src="libs/client/images/mental.png"
                            class="img-fluid" alt="Equipo de Mind-Well" style="width: 82%">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">¿Qué es la salud mental?</h2>
                    <p class="mb-4">La salud mental incluye nuestro bienestar emocional, psicológico y social. Afecta la forma en que pensamos, 
                        sentimos y actuamos cuando enfrentamos la vida. También ayuda a determinar cómo manejamos el estrés, nos relacionamos con los demás
                        y tomamos decisiones. La salud mental es importante en todas las etapas de la vida, desde la niñez y la adolescencia hasta la adultez y la vejez.
                    </p>
                    <p><a href="https://www.mayoclinic.org/es/healthy-lifestyle/adult-health/in-depth/mental-health/art-20044098" target="_blank" class="btn">Explorar</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <img src="libs/client/images/image77.jpg" class="img-fluid">
                    <h3 class="product-title">Florece</h3>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <img src="libs/client/images/brain.jpg" class="img-fluid">
                    <h3 class="product-title">Sana</h3>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <img src="libs/client/images/rompe.jpg" class="img-fluid">
                    <h3 class="product-title">Reconstruye</h3>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
<!-- End Product Section -->



    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="libs/client/images/imagedolor.jpg" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="libs/client/images/ejercicio.jpg" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="libs/client/images/celus.jpg" alt="Untree.co"></div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Domina el estrés mental para una vida equilibrada</h2>
                    <p>En el vertiginoso ritmo de la vida actual, gestionar el estrés mental es esencial para mantener un bienestar integral.
                         Aprender a manejar las tensiones cotidianas puede marcar la diferencia en tu salud mental y calidad de vida. 
                         Aquí te ofrecemos algunos consejos prácticos para reducir el estrés y encontrar la armonía en tu día a día.</p>

                    <ul class="list-unstyled custom-list my-4">
                        <li><strong>Práctica de Respiración Profunda:</strong> Tómate minutos diarios para inhalar y exhalar lentamente. Calma el sistema nervioso y reduce la ansiedad.</li>
                        <li><strong>Desconexión Digital:</strong> Establece límites al uso del celular. Desconéctate para reducir la sobreestimulación y favorecer la relajación.</li>
                        <li><strong>Ejercicio Regular:</strong> Camina, corre, practica yoga. El ejercicio libera endorfinas, actúan como analgésicos naturales y mejoran el estado de ánimo.</li>
                        <li><strong>Mindfulness:</strong> Dedica tiempo a la atención plena. Medita, observa conscientemente o presta atención plena a tus actividades diarias. Mejora la concentración.</li>

                    </ul>
                    <p class="mb-0"><a href="https://www.healthline.com/health/es/como-quitar-el-estres" class="more dark">Conoce más tips<span class="icon-arrow_forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
        <div class="container">
            <div class="row">
    
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-lg d-flex flex-column align-items-center">
                        <div class="thumbnail mb-3">
                            <a href="https://www.gob.cl/saludablemente/mujer/" target="_blank">
                                <img src="libs/client/images/celu.jpg" alt="celu" class="img-fluid">
                            </a>
                        </div>
                        <div class="text-center">
                            <h3>Apoyo a las mujeres</h3>
                            <p>Un refugio solidario para todas aquellas mujeres cuya integridad y salud mental se han visto afectadas e información para mujeres víctimas de violencia.</p>
                            <p><a href="https://www.gob.cl/saludablemente/mujer/" target="_blank">Más información</a></p>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-lg d-flex flex-column align-items-center">
                        <div class="thumbnail mb-3">
                            <a href="https://www.minsal.cl/construyendo-salud-mental/" target="_blank">
                                <img src="libs/client/images/copago.jpg" alt="minsal" class="img-fluid">
                            </a>
                        </div>
                        <div class="text-center">
                            <h3>Red Pública de Salud gratuita</h3>
                            <p>El Ministerio de Salud reafirma el compromiso de que en Chile “nunca más las personas estarán solas para enfrentar sus necesidades en salud mental”</p>
                            <p><a href="https://www.minsal.cl/construyendo-salud-mental/" target="_blank">Más información</a></p>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-lg d-flex flex-column align-items-center">
                        <div class="thumbnail mb-3">
                            <a href="https://www.desarrollosocialyfamilia.gob.cl/la-salud-mental-importa" target="_blank">
                                <img src="libs/client/images/ministerio.jpg" alt="lllll" class="img-fluid">
                            </a>
                        </div>
                        <div class="text-center">
                            <h3>Desarrollo Social y Familia</h3>
                            <p>Un espacio donde se comparte información sobre las señales que pueden afectar la salud mental de las personas y programas que ofrece el Gobierno de Chile.</p>
                            <p><a href="https://www.desarrollosocialyfamilia.gob.cl/la-salud-mental-importa" target="_blank">Más información</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-lg d-flex flex-column align-items-center">
                        <div class="thumbnail mb-3">
                            <a href="https://saludmental.achs.cl/" target="_blank">
                                <img src="libs/client/images/achs5.jpg" alt="jjjjjjjjj" class="img-fluid">
                            </a>
                        </div>
                        <div class="text-center">
                            <h3>ACHS: Salud Mental</h3>
                            <p>Si eres empleador o trabajador, en este espacio podrás mantenerte informado sobre la salud mental en estos espacios.</p>
                            <p><a href="https://saludmental.achs.cl/" target="_blank">Más información</a></p>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-lg d-flex flex-column align-items-center">
                        <div class="thumbnail mb-3">
                            <a href="https://www.gob.cl/saludablemente/ayudaprofesionales/" target="_blank">
                                <img src="libs/client/images/ayuda2.jpg" alt="Kkkkkkr" class="img-fluid">
                            </a>
                        </div>
                        <div class="text-center">
                            <h3>Ayuda de profesionales</h3>
                            <p>Si deseas acceder a ayuda ofrecida por el Gobierno de Chile, acá podrás encontrar información relacionada como teléfonos y contactos directos.</p>
                            <p><a href="https://www.gob.cl/saludablemente/ayudaprofesionales/" target="_blank">Más información</a></p>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-lg d-flex flex-column align-items-center">
                        <div class="thumbnail mb-3">
                            <a href="https://www.crececontigo.gob.cl/beneficios/apoyo-para-una-salud-mental-integral-etapaninos-y-ninas-de-4-anos-o-mas/" target="_blank">
                                <img src="libs/client/images/nino4.jpg" alt="jjjjjjj" class="img-fluid">
                            </a>
                        </div>
                        <div class="text-center">
                            <h3>Salud Mental Infantil</h3>
                            <p>El Programa de Apoyo a la Salud Mental Infantil PASMI tiene por objeto brindar diagnóstico y tratamiento a niños que tengan la edad de 5 a 9 años</p>
                            <p><a href="https://www.crececontigo.gob.cl/beneficios/apoyo-para-una-salud-mental-integral-etapaninos-y-ninas-de-4-anos-o-mas/" target="_blank">Más información</a></p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonios</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Descubrí la web de salud mental en un momento crucial de mi vida. Gracias a su fácil acceso, pude conectarme rápidamente con especialistas que comprendieron mi situación. La sección de autoayuda me proporcionó herramientas prácticas que aplico diariamente. Esta plataforma ha sido un salvavidas para mi bienestar emocional.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="libs/client/images/jordy.jpg" alt="Jordhy Thompson"
                                                        class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Jordhy Thompson</h3>
                                                <span class="position d-block mb-3">Deportista. Jugador de Colo-Colo.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;La web de salud mental ha sido mi refugio. Acceder a profesionales capacitados fue tan sencillo como hacer clic. Hay muchos consejos prácticos que han sido mi guía constante. Estoy agradecido por encontrar un espacio en línea que realmente se preocupa por la salud mental de las personas.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="libs/client/images/corchea.jpg" alt="Román Spaceronin7"
                                                        class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Román Spaceronin7 (Corxea)</h3>
                                                <span class="position d-block mb-3">Youtuber. Streamer y compositor</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Encontré la web de salud mental en un momento de necesidad extrema. La rapidez con la que pude conectarme con especialistas me sorprendió gratamente. Esta plataforma ha cambiado mi perspectiva y ha sido un apoyo invaluable en mi viaje hacia la salud mental.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="libs/client/images/brit.jpg" alt="Britany Spears"
                                                        class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Britany Spears</h3>
                                                <span class="position d-block mb-3">Cantante y diseñadora</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->

@endsection
