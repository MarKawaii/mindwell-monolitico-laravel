@extends('client.layout.app')

@section('page-title')
@endsection

@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1><span class="d-block">Autoayuda</span> </h1>
                    <p class="mb-4">Somos los más duros en Salud mental
                    </p>
                    {{-- <p><a href="{{ route('services') }}" class="btn btn-secondary me-2">Servicios</a><a href="{{ route('contactus') }}"
                            class="btn btn-white-outline">Contacto</a></p> --}}
                </div>
            </div>

            <div class="col-lg-7">
                <div class="hero-img-wrap" style="margin-top: -20px;">
                    <!-- Asegúrate de reemplazar 'src' con la ruta correcta a la imagen que deseas mostrar -->
                    <img src="libs/client/images/autoayuda.png"
                        class="img-fluid" alt="Equipo de Mind-Well" style="width: 55%">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Consejos para autocuidado</h2>
            <p>¿Cuándo pedir ayuda? El autocuidado, el apoyo mutuo y la puesta en práctica de estas recomendaciones ayudarán a sobrellevar de mejor manera la cuarentena. Sin embargo, puede ser que en algún minuto sienta que la situación se vuelva inmanejable y que necesita de mayor apoyo para seguir adelante.</p>

            <p>Buscar ayuda siempre es bueno y apoyarnos con otros es fundamental para estar bien.</p>

            <p>Pida ayuda para sí mismo, un familiar o amigo, si observa alguna de las siguientes situaciones:</p>

            <ul>
                <li>Mucha tristeza y retraimiento.</li>
                <li>Pensamientos y sentimientos recurrentes que abruman e interfieren actividades cotidianas.</li>
                <li>Dificultad para realizar tareas cotidianas, incluso aquellas que parecieran muy simples (por ej. preparar comida, aseo personal y otras).</li>
                <li>Intención de hacerse daño o planificar hacerlo.</li>
                <li>Dejar de comer.</li>
                <li>Consumo frecuente y excesivo de alcohol y otras drogas, o automedicación de fármacos para el ánimo o el sueño.</li>
                <li>Cambios drásticos en el estado del ánimo, conductas o hábitos de sueño.</li>
                <li>Intensos miedos y temores que impiden realizar actividades.</li>
                <li>Sentirse muy pesimista respecto a su futuro y sus planes.</li>
            </ul>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-12">
            <h2>¿Qué acciones debemos evitar?</h2>
            <p>Existen algunas situaciones o pensamientos que podrían aumentar el riesgo en el bienestar de salud mental en este periodo, por lo que debemos evitarlas. Estas podrían ser:</p>

            <ul>
                <li>Estar constantemente imaginando el peor escenario, lo que aumenta la angustia ante la situación.</li>
                <li>Tratar de dormir todo el día. Esto puede afectar negativamente la calidad del sueño.</li>
                <li>Ocupar demasiado tiempo leyendo información o noticias sobre la enfermedad. Recibir mucha información podría generar más preocupaciones e inquietudes.</li>
                <li>Ocultar o suprimir las emociones, negándose a expresar algún pensamiento y sentimiento con las personas que lo rodean. Esto puede generar mayor angustia y afectar su ánimo.</li>
            </ul>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>¿Cómo podemos identificar algún problema de salud mental'</h2>
            <p>La identificación de las personas con potenciales problemas de salud mental es una tarea pendiente de la sociedad, que no corresponde exclusivamente a los familiares. Los problemas de salud mental se deberían poder identificar desde su comienzo en la etapa infanto-juvenil. Por ello, es muy importante que profesionales de la salud y de la educación estén formados para identificar estas enfermedades durante la adolescencia e inicio de la edad adulta. Los centros educativos, tanto públicos como privados, como puedan ser colegios y universidades, deben incorporar programas para la detección de bajo rendimiento, aislamiento social, absentismo y alteraciones de conducta. Estos signos visibles son, en muchos casos, el reflejo exterior de que la mente de ese estudiante está sufriendo y, por tanto, deberían ser evaluados por un psiquiatra infantil o psicólogo clínico infantil. Sería recomendable que estas evaluaciones se hicieran en entornos no estigmatizantes para el menor, como la propia escuela, el domicilio familiar o un centro sin aspecto de hospital. Ser evaluado en la escuela puede conllevar que los compañeros se enteren y estigmaticen al menor. Las evaluaciones en el domicilio resultan muy complicadas por el coste que supone el desplazamiento del profesional y la falta de intimidad que pueda tener el paciente en presencia de sus padres. Mientras que, la evaluación en un centro sanitario con un ambiente acogedor, tranquilo y un aspecto no hospitalario, puede resultar la mejor opción. El menor debe sentir y reconocer que tiene un problema, pero no queremos que se sienta enfermo y señalado por su enfermedad.</p>
        </div>
    </div>
</div>


<div class="blog-section">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Información de Autoayuda</h2>
                <p class="mb-4">Estos videos te podrían ayudar cuando sientas que necesites informarte.</p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">First Time Home Owner Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-2.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">First Time Home Owner Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-2.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">First Time Home Owner Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-2.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-5">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="libs/client/images/post-3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Blog Section -->
@endsection