@extends('client.layout.app')

@section('page-title')
@endsection

@section('content')
<style>
    .post-entry {
        position: relative;
    }

    .linkedin-icon,
    .whatsapp-icon {
        position: absolute;
        font-size: 28px; /* Ajusta el tamaño del icono según sea necesario */
    }

    .whatsapp-icon {
        right: 30%; /* Ajusta la posición horizontal del icono de WhatsApp */
        transform: translateX(50%); /* Ajusta la posición horizontal con translateX */
    }

    .linkedin-icon {
        left: 30%; /* Ajusta la posición horizontal del icono de LinkedIn */
        transform: translateX(-50%); /* Ajusta la posición horizontal con translateX */
    }
</style>


    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1><span class="d-block">Nuestros Especialistas</span> </h1>
                        <p class="mb-4">Comunícate con alguno de nuestros especialistas para coordinar internamente alguna
                            consulta.
                        </p>
                       
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero-img-wrap" style="position: relative; top: -70px;">
                        <!-- Asegúrate de reemplazar 'src' con la ruta correcta a la imagen que deseas mostrar -->
                        <img src="libs/client/images/um-medico-jovem-e-bonito-em-branco-removebg-preview.png"
                            class="img-fluid" alt="Equipo de Mind-Well" style="width: 50%;">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="blog-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Especialistas</h2>
                    <p class="mb-4">Nuestro equipo de especialistas en salud mental, estarán disponibles para atender 
                        cualquier duda que tengas y si deseas coordinar una atención puedes hacerlo directamente con ellos.</p>
                    
                </div>

                <div>
                    <h4>Contamos con diversas áreas de atención:</h4>
                    <ul>
                        <li>Medicina en Salud mental</li>
                        <li>Neurología</li>
                        <li>Psicología</li>
                        <li>Psiquiatría</li>
                        <li>Terapía de parejas y familia</li>
                        <li>Psicopedagogía</li>
                        <li>Terapia ocupacional</li>
                        <li>Fonoaudiología</li>


                    </ul>
                </div>

                <!-- Especialista 1 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 1</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>Descripción del especialista:</p>
                            <ul>
                                <li>Punto 1</li>
                                <li>Punto 2</li>
                                <li>Punto 3</li>
                                <li>Punto 4</li>
                                <li>Punto 5</li>
                            </ul>
                            <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>

                            <div class="meta">
                                <!-- Iconos debajo de la lista -->
                                <div>
                                    <a href="https://www.linkedin.com/in/diego-ignacio-arancibia-pinto-92a3301ba/" target="_blank" class="linkedin-icon">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="https://wa.me/+56986200339" target="_blank" class="whatsapp-icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- Fin Especialista 1 -->

                <!-- Especialista 2 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 2</a></h3>
                             <!-- Párrafo con lista de 5 puntos -->
                             <p>Descripción del especialista:</p>
                             <ul>
                                 <li>Punto 1</li>
                                 <li>Punto 2</li>
                                 <li>Punto 3</li>
                                 <li>Punto 4</li>
                                 <li>Punto 5</li>
                             </ul>
                             <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>
                            <div class="meta">
                                <a href="ENLACE_A_LINKEDIN_ESPECIALISTA_1" target="_blank" class="linkedin-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="ENLACE_A_WHATSAPP_ESPECIALISTA_1" target="_blank" class="whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Especialista 2 -->

                <!-- Especialista 3 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 3</a></h3>
                             <!-- Párrafo con lista de 5 puntos -->
                             <p>Descripción del especialista:</p>
                             <ul>
                                 <li>Punto 1</li>
                                 <li>Punto 2</li>
                                 <li>Punto 3</li>
                                 <li>Punto 4</li>
                                 <li>Punto 5</li>
                             </ul>
                             <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>
                            <div class="meta">
                                <a href="ENLACE_A_LINKEDIN_ESPECIALISTA_1" target="_blank" class="linkedin-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="ENLACE_A_WHATSAPP_ESPECIALISTA_1" target="_blank" class="whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Especialista 3 -->

                <!-- Especialista 4 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 4</a></h3>
                             <!-- Párrafo con lista de 5 puntos -->
                             <p>Descripción del especialista:</p>
                             <ul>
                                 <li>Punto 1</li>
                                 <li>Punto 2</li>
                                 <li>Punto 3</li>
                                 <li>Punto 4</li>
                                 <li>Punto 5</li>
                             </ul>
                             <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>
                            <div class="meta">
                                <a href="ENLACE_A_LINKEDIN_ESPECIALISTA_1" target="_blank" class="linkedin-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="ENLACE_A_WHATSAPP_ESPECIALISTA_1" target="_blank" class="whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Especialista 4 -->

                <!-- Especialista 5 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 5</a></h3>
                             <!-- Párrafo con lista de 5 puntos -->
                             <p>Descripción del especialista:</p>
                             <ul>
                                 <li>Punto 1</li>
                                 <li>Punto 2</li>
                                 <li>Punto 3</li>
                                 <li>Punto 4</li>
                                 <li>Punto 5</li>
                             </ul>
                             <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>
                            <div class="meta">
                                <a href="ENLACE_A_LINKEDIN_ESPECIALISTA_1" target="_blank" class="linkedin-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="ENLACE_A_WHATSAPP_ESPECIALISTA_1" target="_blank" class="whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Especialista 5 -->

                <!-- Especialista 6 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 6</a></h3>
                             <!-- Párrafo con lista de 5 puntos -->
                             <p>Descripción del especialista:</p>
                             <ul>
                                 <li>Punto 1</li>
                                 <li>Punto 2</li>
                                 <li>Punto 3</li>
                                 <li>Punto 4</li>
                                 <li>Punto 5</li>
                             </ul>
                             <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>
                            <div class="meta">
                                <a href="ENLACE_A_LINKEDIN_ESPECIALISTA_1" target="_blank" class="linkedin-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="ENLACE_A_WHATSAPP_ESPECIALISTA_1" target="_blank" class="whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Especialista 6 -->

                <!-- Especialista 7 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 7</a></h3>
                             <!-- Párrafo con lista de 5 puntos -->
                             <p>Descripción del especialista:</p>
                             <ul>
                                 <li>Punto 1</li>
                                 <li>Punto 2</li>
                                 <li>Punto 3</li>
                                 <li>Punto 4</li>
                                 <li>Punto 5</li>
                             </ul>
                             <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>
                            <div class="meta">
                                <a href="ENLACE_A_LINKEDIN_ESPECIALISTA_1" target="_blank" class="linkedin-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="ENLACE_A_WHATSAPP_ESPECIALISTA_1" target="_blank" class="whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Especialista 7 -->

                <!-- Especialista 8 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 8</a></h3>
                             <!-- Párrafo con lista de 5 puntos -->
                             <p>Descripción del especialista:</p>
                             <ul>
                                 <li>Punto 1</li>
                                 <li>Punto 2</li>
                                 <li>Punto 3</li>
                                 <li>Punto 4</li>
                                 <li>Punto 5</li>
                             </ul>
                             <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>
                            <div class="meta">
                                <a href="ENLACE_A_LINKEDIN_ESPECIALISTA_1" target="_blank" class="linkedin-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="ENLACE_A_WHATSAPP_ESPECIALISTA_1" target="_blank" class="whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Especialista 8 -->

                <!-- Especialista 9 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/yo3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Nombre del Especialista 9</a></h3>
                             <!-- Párrafo con lista de 5 puntos -->
                             <p>Descripción del especialista:</p>
                             <ul>
                                 <li>Punto 1</li>
                                 <li>Punto 2</li>
                                 <li>Punto 3</li>
                                 <li>Punto 4</li>
                                 <li>Punto 5</li>
                             </ul>
                             <p>Contáctate directamente con el especialista en los íconos de acá abajo.&darr;</p>
                            <div class="meta">
                                <a href="ENLACE_A_LINKEDIN_ESPECIALISTA_1" target="_blank" class="linkedin-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="ENLACE_A_WHATSAPP_ESPECIALISTA_1" target="_blank" class="whatsapp-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Especialista 9 -->

            </div>
        </div>
    </div>
    <!-- End Blog Section -->
@endsection
