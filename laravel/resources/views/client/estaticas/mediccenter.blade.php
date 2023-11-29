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
                        <p class="mb-4">Revisa los distintos centros médicos en la Región Metropolitana.
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

    <div class="container mt-5 mb-5">
        <h1 class="mb-4">Centros Médicos</h1>
        <h4>En esta sección podrás visualizar los distintos centros médicos que estan disponibles por nuestros especialistas médicos, no te preocupes que pronto aumentará el número de centros médicos.</h4>
       
        
        <div class="card">
            <div class="card-body map-container">
                <div id="mapa"></div>
    </div>
    <div>
        <input type="text" id="searchInput" placeholder="Buscar centro médico...">
        <button onclick="buscarCentro()">Ir</button>
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
            var centrosMedicos = [
                { lat: -33.4308, lng: -70.6324, nombre: 'Centro Médico 1' },
                { lat: -33.4569, lng: -70.6483, nombre: 'Centro Médico 2' },
                { lat: -33.4181, lng: -70.6086, nombre: 'Centro Médico 3' },
                { lat: -33.4316, lng: -70.6063, nombre: 'Centro Médico 4' },
                { lat: -33.4502, lng: -70.6454, nombre: 'Centro Médico 5' },
                { lat: -33.4219, lng: -70.6418, nombre: 'Centro Médico 6' },
                { lat: -33.4378, lng: -70.6501, nombre: 'Centro Médico 7' },
                { lat: -33.4443, lng: -70.6348, nombre: 'Centro Médico 8' },
                { lat: -33.4277, lng: -70.6158, nombre: 'Centro Médico 9' },
                { lat: -33.4481, lng: -70.6604, nombre: 'Centro Médico 10' },
                { lat: -33.4656, lng: -70.6366, nombre: 'Centro Médico 11' },
                { lat: -33.4207, lng: -70.6595, nombre: 'Centro Médico 12' },
                { lat: -33.4384, lng: -70.6174, nombre: 'Centro Médico 13' },
                { lat: -33.4540, lng: -70.6288, nombre: 'Centro Médico 14' },
                { lat: -33.4631, lng: -70.6514, nombre: 'Centro Médico 15' },
                { lat: -33.4322, lng: -70.6446, nombre: 'Centro Médico 16' },
                { lat: -32.4467, lng: -73.6218, nombre: 'Centro Médico 17' },
                { lat: -33.4689, lng: -70.6433, nombre: 'Centro Médico 18' },
                { lat: -33.4256, lng: -70.6550, nombre: 'Centro Médico 19' },
                { lat: -33.4592, lng: -70.6237, nombre: 'Centro Médico 20' }
                // Puedes agregar más centros médicos aquí
            ];
    
            centrosMedicos.forEach(function (centro) {
                var marker = new google.maps.Marker({
                    position: { lat: centro.lat, lng: centro.lng },
                    map: mapa,
                    title: centro.nombre
                });
            });
        });

        // input

        var input = document.getElementById('searchInput');
        var searchBox = new google.maps.places.SearchBox(input);
        mapa.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        mapa.addListener('bounds_changed', function () {
            searchBox.setBounds(mapa.getBounds());
        });

        searchBox.addListener('places_changed', function () {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Limpiar marcadores existentes
            markers.forEach(function (marker) {
                marker.setMap(null);
            });
            markers = [];

            // Crear nuevos marcadores basados en la búsqueda
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }

                var marker = new google.maps.Marker({
                    map: mapa,
                    title: place.name,
                    position: place.geometry.location
                });

                markers.push(marker);

                bounds.extend(place.geometry.location);
            });

            mapa.fitBounds(bounds);
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






