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
    /* Estilo para las imágenes de los especialistas */
    .post-thumbnail img {
        width: 441px;
        height: 421px;
        border-radius: 10px; /* Agrega bordes redondeados para un aspecto más suave */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Agrega una sombra suave */
    }
    /* Estilo para el contenedor principal de cada especialista */
    .post-entry {
       
        border: 1px solid #ddd; /* Agrega un borde para separar visualmente cada especialista */
        border-radius: 10px; /* Agrega bordes redondeados al contenedor principal */
        transition: transform 0.3s ease; /* Agrega una transición suave al hacer hover */
        
        /* Nueva propiedad para la sombra */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Agrega una sombra suave */
    }


    /* Estilo para el contenedor principal de cada especialista */
    

    
   

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
                            <img src="libs/client/images/especialista3.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dr. Sebastián Valdés Rojas</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>El Dr. Valdés es reconocido por su enfoque integral en el tratamiento de trastornos psiquiátricos, 
                                combinando terapias tradicionales y enfoques innovadores.</p>
                            <ul>
                                <li>Especialidad: Psiquiatría</li>
                                <li>Universidad: Universidad de Chile</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                            <img src="libs/client/images/especialista6.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dra. Valentina Morales Paredes</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>Dra. Morales se especializa en psicología clínica, brindando apoyo emocional y 
                                herramientas prácticas para el manejo del estrés.</p>
                            <ul>
                                <li>Especialidad: Psicología</li>
                                <li>Universidad: Universidad de Concepción</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                            <img src="libs/client/images/especialista5.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dr. Felipe Gutiérrez Silva</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>Dr. Gutiérrez destaca por su dedicación a mejorar la calidad de vida a través de intervenciones de terapia ocupacional personalizadas.</p>
                            <ul>
                                <li>Especialidad: Terapia Ocupacional</li>
                                <li>Universidad: Pontificia Universidad Católica de Chile</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                            <img src="libs/client/images/especialista8.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dra. Carolina Salazar Vargas</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>Dra. Salazar se dedica a ayudar a niños y adolescentes a superar desafíos educativos, utilizando métodos personalizados.</p>
                            <ul>
                                <li>Especialidad: Psicopedagogía</li>
                                <li>Universidad: Universidad de Valparaíso</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                <!-- Fin Especialista 4 -->

                <!-- Especialista 5 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/especialista1.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dr. Ignacio Soto Cárdenas</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>El Dr. Valdés es reconocido por su enfoque integral en el tratamiento de trastornos psiquiátricos, 
                                combinando terapias tradicionales y enfoques innovadores.</p>
                            <ul>
                                <li>Especialidad: Neurología</li>
                                <li>Universidad: Universidad Austral de Chile</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                <!-- Fin Especialista 5 -->

                <!-- Especialista 6 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/especialista7.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dra. Antonia Mendoza Leiva</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>Dra. Mendoza se especializa en fortalecer relaciones familiares y de pareja, facilitando la comunicación y la resolución de conflictos..</p>
                            <ul>
                                <li>Especialidad: Fonoaudiología</li>
                                <li>Universidad: Universidad de Chile</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                <!-- Fin Especialista 6 -->

                <!-- Especialista 7 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/especialista4.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dr. Sebastián Valdés Rojas</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>El Dr. Herrera es un médico especializado en salud mental, comprometido con enfoques holísticos para el bienestar psicológico.</p>
                            <ul>
                                <li>Especialidad: Medicina en Salud Mental</li>
                                <li>Universidad: Universidad de Santiago de Chile</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                <!-- Fin Especialista 7 -->

                <!-- Especialista 8 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/especialista9.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dra. Camila Rojas Cáceres</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>Dra. Rojas se especializa en psicología infantil, brindando apoyo emocional y herramientas para el desarrollo saludable de los niños.</p>
                            <ul>
                                <li>Especialidad: Psicología Infantil</li>
                                <li>Universidad: Universidad de Chile</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                <!-- Fin Especialista 8 -->

                <!-- Especialista 9 -->
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="libs/client/images/especialista2.jpg" alt="Especialista 1" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Dr. Alejandro Silva Castillo</a></h3>
                            <!-- Párrafo con lista de 5 puntos -->
                            <p>El Dr. Silva se destaca por su enfoque basado en evidencia en la psicoterapia, ayudando a sus pacientes a enfrentar y superar los desafíos emocionales con éxito.</p>
                            <ul>
                                <li>Especialidad: Psiquiatría</li>
                                <li>Universidad: Universidad de Concepción</li>
                                <li>Tipo de atención: Online y presencial</li>
                                <li>Horarios de atención: Lunes a Viernes de 9:00 a 18:00 hrs</li>
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
                <!-- Fin Especialista 9 -->

            </div>
        </div>
    </div>
    <!-- End Blog Section -->
@endsection
