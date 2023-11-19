@extends('client.layout.app')

@section('page-title')
@endsection

@section('content')
    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Modificar Datos</h2>
                <form action="{{ route('perfil.update', $user['id']) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="p-3 p-lg-5 border bg-white">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="nombre" class="text-black">Nombre Completo <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nombre" value="{{ $user['name'] }}" oninput="this.value=this.value.replace(/[^a-zA-Z ]/g, '')"
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="Genero" class="text-black">Genero <span class="text-danger">*</span></label>
                                <select name="genero" class="form-control" required>
                                    <option value="" disabled>Seleccione un género</option>
                                    <option value="Masculino" {{ $user->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                    <option value="Femenino" {{ $user->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                    <option value="Otros" {{ $user->genero == 'Otros' ? 'selected' : '' }}>Otros</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="fecha_nacimiento" class="text-black">Fecha de Nacimiento <span class="text-danger">*</span></label>
                                <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $user['fecha_nacimiento'] }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="run" class="text-black">RUN <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputRun" name="run" placeholder="RUN"
                                    minlength="9" maxlength="12" required value="{{ $user['run'] }}">
                            </div>

                            <div class="col-md-6">
                                <label for="estadoCivil" class="text-black">Estado Civil <span class="text-danger">*</span></label>
                                <select class="form-control" name="estadoCivil" required>
                                    <option value="" disabled>Seleccione su estado civil</option>
                                    <option value="soltero" {{ $user->estado_civil == 'soltero' ? 'selected' : '' }}>Soltero/a</option>
                                    <option value="casado" {{ $user->estado_civil == 'casado' ? 'selected' : '' }}>Casado/a</option>
                                    <option value="divorciado" {{ $user->estado_civil == 'divorciado' ? 'selected' : '' }}>Divorciado/a</option>
                                    <option value="viudo" {{ $user->estado_civil == 'viudo' ? 'selected' : '' }}>Viudo/a</option>
                                    <option value="unionLibre" {{ $user->estado_civil == 'unionLibre' ? 'selected' : '' }}>Unión libre</option>
                                    <option value="separado" {{ $user->estado_civil == 'separado' ? 'selected' : '' }}>Separado/a</option>
                                </select>
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email" class="text-black">Correo </label>
                                <input type="email" class="form-control" value="{{ $user['email'] }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="direccion" class="text-black">Dirección <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="direccion" placeholder="Direccion 1212"
                                    value="{{ $user['direccion'] }}" required>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="ciudad" class="text-black">Ciudad <span class="text-danger">*</span></label>
                                <select class="form-control" id="ciudad" name="ciudad" onchange="updateComunas()"
                                    required>
                                    <option value="">Seleccione una ciudad</option>
                                    <option value="arica" {{ $user['ciudad'] == 'arica' ? 'selected' : '' }}>Arica</option>
                                    <option value="iquique" {{ $user['ciudad'] == 'iquique' ? 'selected' : '' }}>Iquique
                                    </option>
                                    <option value="antofagasta" {{ $user['ciudad'] == 'antofagasta' ? 'selected' : '' }}>
                                        Antofagasta</option>
                                    <option value="copiapo" {{ $user['ciudad'] == 'copiapo' ? 'selected' : '' }}>Copiapó
                                    </option>
                                    <option value="la_serena" {{ $user['ciudad'] == 'la_serena' ? 'selected' : '' }}>La
                                        Serena</option>
                                    <option value="coquimbo" {{ $user['ciudad'] == 'coquimbo' ? 'selected' : '' }}>Coquimbo
                                    </option>
                                    <option value="valparaiso" {{ $user['ciudad'] == 'valparaiso' ? 'selected' : '' }}>
                                        Valparaíso</option>
                                    <option value="viña_del_mar" {{ $user['ciudad'] == 'viña_del_mar' ? 'selected' : '' }}>
                                        Viña del Mar</option>
                                    <option value="rancagua" {{ $user['ciudad'] == 'rancagua' ? 'selected' : '' }}>Rancagua
                                    </option>
                                    <option value="talca" {{ $user['ciudad'] == 'talca' ? 'selected' : '' }}>Talca
                                    </option>
                                    <option value="concepcion" {{ $user['ciudad'] == 'concepcion' ? 'selected' : '' }}>
                                        Concepción</option>
                                    <option value="temuco" {{ $user['ciudad'] == 'temuco' ? 'selected' : '' }}>Temuco
                                    </option>
                                    <option value="valdivia" {{ $user['ciudad'] == 'valdivia' ? 'selected' : '' }}>Valdivia
                                    </option>
                                    <option value="puerto_montt" {{ $user['ciudad'] == 'puerto_montt' ? 'selected' : '' }}>
                                        Puerto Montt</option>
                                    <option value="coyhaique" {{ $user['ciudad'] == 'coyhaique' ? 'selected' : '' }}>
                                        Coyhaique</option>
                                    <option value="punta_arenas" {{ $user['ciudad'] == 'punta_arenas' ? 'selected' : '' }}>
                                        Punta Arenas</option>
                                    <option value="santiago" {{ $user['ciudad'] == 'santiago' ? 'selected' : '' }}>Santiago
                                    </option>
                                </select>


                            </div>
                            <div class="col-md-6">
                                <label for="comuna" class="text-black">Comuna <span class="text-danger">*</span></label>
                                <select class="form-control" id="comuna" name="comuna" required>
                                    <option value="">Seleccione una comuna</option>
                                    <!-- Añade aquí las opciones de comuna -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-md-6">
                                <label for="celular" class="text-black">Celular <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="celular" placeholder="99999999" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    value="{{ $user['celular'] }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telefono" class="text-black">Telefono Fijo</label>
                                <input type="text" class="form-control" name="telefono" placeholder="99999999" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                minlength="8" maxlength="8" value="{{ $user['telefono'] }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-warning">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        // manejar la función de las comunas
        function updateComunas(userComuna) {
            var comunasPorCiudad = {
                arica: ["Arica", "Camarones", "Putre"],
                iquique: ["Iquique", "Alto Hospicio", "Pica"],
                antofagasta: ["Antofagasta", "Calama", "Tocopilla"],
                copiapo: ["Copiapó", "Caldera", "Vallenar"],
                la_serena: ["La Serena", "Coquimbo", "Vicuña"],
                coquimbo: ["Coquimbo", "La Serena", "Ovalle"],
                valparaiso: ["Valparaíso", "Viña del Mar", "Quilpué"],
                viña_del_mar: ["Viña del Mar", "Valparaíso", "Concón"],
                rancagua: ["Rancagua", "Machalí", "Graneros"],
                talca: ["Talca", "Maule", "Linares"],
                concepcion: ["Concepción", "Talcahuano", "Chiguayante"],
                temuco: ["Temuco", "Padre las Casas", "Villarrica"],
                valdivia: ["Valdivia", "La Unión", "Paillaco"],
                puerto_montt: ["Puerto Montt", "Puerto Varas", "Calbuco"],
                coyhaique: ["Coyhaique", "Aysén", "Cisnes"],
                punta_arenas: ["Punta Arenas", "Puerto Natales", "Porvenir"],
                santiago: [
                    "Cerrillos", "Cerro Navia", "Conchalí", "El Bosque",
                    "Estación Central", "Huechuraba", "Independencia", "La Cisterna",
                    "La Florida", "La Granja", "La Pintana", "La Reina",
                    "Las Condes", "Lo Barnechea", "Lo Espejo", "Lo Prado",
                    "Macul", "Maipú", "Ñuñoa", "Pedro Aguirre Cerda", "Peñalolén",
                    "Providencia", "Pudahuel", "Quilicura", "Quinta Normal", "Recoleta",
                    "Renca", "San Joaquín", "San Miguel", "San Ramón", "Santiago",
                    "Vitacura"
                ],
            };

            var ciudadSeleccionada = document.getElementById("ciudad").value;
            var comunas = comunasPorCiudad[ciudadSeleccionada] || [];
            var comunaSelect = document.getElementById("comuna");

            // Limpiar las opciones anteriores
            comunaSelect.innerHTML = '';

            // Opción por defecto
            var option = document.createElement("option");
            option.value = "";
            option.text = "Seleccione una comuna";
            comunaSelect.appendChild(option);

            // Añadir nuevas opciones
            comunas.forEach(function(comuna) {
                var option = document.createElement("option");
                option.value = comuna.toLowerCase().replace(/\s+/g, '_');
                option.text = comuna;
                comunaSelect.appendChild(option);

                // Seleccionar la comuna del usuario
                if (userComuna && userComuna.toLowerCase().replace(/\s+/g, '_') === option.value) {
                    option.selected = true;
                }
            });
        }

        // manejar el formateo de rut
        document.addEventListener('DOMContentLoaded', function() {
            var inputRun = document.getElementById('inputRun');

            inputRun.addEventListener('input', function() {
                var value = inputRun.value;
                value = value.replace(/[^0-9kK]+/g, '');
                // Formatear con puntos y guion
                value = value.replace(/^(\d{1,2})(\d{3})?(\d{3})?([0-9kK]?)$/, '$1.$2.$3-$4');

                inputRun.value = value.toUpperCase(); // Convertir a mayúsculas
            });

            // Actualiza las comunas cuando se carga la página
            updateComunas("{{ $user['comuna'] }}"); // Reemplaza esto con la comuna del usuario
        });
    </script>
@endsection
