<footer class="footer-section">
    <div class="container relative">

        {{-- <div class="sofa-img">
            <img src="libs/client/images/sofa.png" alt="Image" class="img-fluid">
        </div> --}}

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img
                                src="libs/client/images/envelope-outline.svg" alt="Image"
                                class="img-fluid"></span><span>Inscríbete para recibir información</span></h3>

                    <form action="{{ route('inscripcion.store') }}" method="post" class="row g-3">
                        @csrf
                        <div class="col-auto">
                            <input type="text" name="nombre" class="form-control"  placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="col-auto">
                            <input type="email" name="email" class="form-control" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Salud Mental a tu alcance<span>.</span></a></div>
                <p class="mb-4">Promoviendo el bienestar mental en Chile, porque cada mente saludable construye un país más fuerte. 
                    Inspírate, cuida de ti y de los demás. Juntos, tejemos una red de apoyo para enfrentar cualquier desafío. #SaludMentalChile</p>

                <ul class="list-unstyled custom-social">
                    <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-x"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="row links-wrap">

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('index') }}">Inicio</a></li>
                            <li><a href="{{ route('about') }}">Quiénes somos</a></li>
                            <li><a href="{{ route('services') }}">Servicios</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('mediccenter') }}">Centros médicos</a></li>
                            <li><a href="{{ route('autohelp') }}">Autoayuda</a></li>
                            <li><a href="{{ route('specialist') }}">Especialistas</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('contactus') }}"> Contáctanos</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. Todos los derechos reservados. &mdash;</n> 
                       
                    </p>
                    <p class="mb-2 text-center text-lg-start">
                        Diseñado con amor por nuestro equipo en Duoc UC y en colaboración con Ignacio Véliz, compañero y amigo de Duoc UC
                    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Términos &amp; Condiciones</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</footer>
