@extends('client.layout.app')

@section('page-title')
    <title>Centros Médicos</title>
@endsection

@section('content')
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





















{{-- @extends('client.layout.app')

@section('page-title')
    <title>Centros Médicos</title>
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Centros Médicos</h1>

        <div class="card">
            <div class="card-body map-container">
                <div id="mapa"></div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mapa = L.map('mapa').setView([-33.4489, -70.6693], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(mapa);

            // Añade marcadores según tus centros médicos
            L.marker([-33.4308, -70.6324]).addTo(mapa)
                .bindPopup('Centro Médico 1');

            L.marker([-33.4569, -70.6483]).addTo(mapa)
                .bindPopup('Centro Médico 2');
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
    </style> --}}
{{-- @endsection --}}




