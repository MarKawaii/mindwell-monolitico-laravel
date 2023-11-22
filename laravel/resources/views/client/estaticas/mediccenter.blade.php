@extends('client.layout.app')

@section('page-title')
    <title>Centros Médicos</title>
@endsection


@section('content')

    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1><span class="d-block">Centros Médicos</span> </h1>
                        <p class="mb-4">Revisa los distintos cetnros médicos en la Región Metropolitana.
                        </p>
                        {{-- <p><a href="{{ route('services') }}" class="btn btn-secondary me-2">Servicios</a><a href="{{ route('contactus') }}"
                                class="btn btn-white-outline">Contacto</a></p> --}}
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero-img-wrap" style="margin-top: -10px;">
                        <!-- Asegúrate de reemplazar 'src' con la ruta correcta a la imagen que deseas mostrar -->
                        <img src="libs/client/images/center.png"
                            class="img-fluid" alt="Equipo de Mind-Well" style="width: 60%">
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Centros Médicos</h1>

        <div class="card">
            <div class="card-body map-container">
                <div id="mapa"></div>
            </div>
        </div>
    </div>

    <!-- Reemplaza "TU_CLAVE_API" con tu clave de API de Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQxl_7oVWGvNBezeba99h4K_OHt9HgX2o&libraries=places"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Centra el mapa en Santiago, Chile
            var centroMapa = { lat: -33.4489, lng: -70.6693 };

            // Crea un nuevo mapa
            var mapa = new google.maps.Map(document.getElementById('mapa'), {
                center: centroMapa,
                zoom: 12
            });

            // Añade marcadores según tus centros médicos
            var marker1 = new google.maps.Marker({
                position: { lat: -33.4308, lng: -70.6324 },
                map: mapa,
                title: 'Centro Médico 1'
            });

            var marker2 = new google.maps.Marker({
                position: { lat: -33.4569, lng: -70.6483 },
                map: mapa,
                title: 'Centro Médico 2'
            });
        });
    </script>

    <style>
        /* Estilo para limitar el tamaño del mapa */
        .map-container {
            height: 400px;
            border: 1px solid #ccc;
            overflow: hidden;
        }

        /* Estilo para ajustar el tamaño del mapa al contenedor */
        #mapa {
            height: 100%;
        }
    </style>
@endsection






