@extends('client.layout.app')

@section('page-title')
@endsection

@section('content')
    <div class="container mt-5 mb-5">

        <div class="row justify-content-center">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Modificar Datos</h2>
                <div class="p-3 p-lg-5 border bg-white">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="nombre" class="text-black">Nombre Completo <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nombre" value="{{ $user['name'] }}" required>
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
                            <label for="direccion" class="text-black">Dirección <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion 1212, Maipu"
                                required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="ciudad" class="text-black">Ciudad</label>
                            <select class="form-control" id="ciudad" name="ciudad" onchange="updateComunas()" required>
                                <option value="">Seleccione una ciudad</option>
                                <option value="arica">Arica</option>
                                <option value="iquique">Iquique</option>
                                <option value="antofagasta">Antofagasta</option>
                                <option value="copiapo">Copiapó</option>
                                <option value="la_serena">La Serena</option>
                                <option value="coquimbo">Coquimbo</option>
                                <option value="valparaiso">Valparaíso</option>
                                <option value="viña_del_mar">Viña del Mar</option>
                                <option value="rancagua">Rancagua</option>
                                <option value="talca">Talca</option>
                                <option value="concepcion">Concepción</option>
                                <option value="temuco">Temuco</option>
                                <option value="valdivia">Valdivia</option>
                                <option value="puerto_montt">Puerto Montt</option>
                                <option value="coyhaique">Coyhaique</option>
                                <option value="punta_arenas">Punta Arenas</option>
                                <option value="santiago">Santiago</option>
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



                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="run" class="text-black">RUN </label>
                            <input type="text" class="form-control" value="{{ $user['run'] }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="edad" class="text-black">Edad <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="edad" required>
                        </div>
                    </div>

                    <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="celular" class="text-black">Celular <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="celular" placeholder="99999999"
                                value="{{ $user['celular'] }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="text-black">Telefono Fijo</label>
                            <input type="text" class="form-control" name="telefono" placeholder="99999999"
                                value="{{ $user['telefono'] }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-warning">Enviar</button>
                    </div>
                </div>
            </div>



        </div>
    </div>

    

    <script>
        function updateComunas() {
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
            });
        }
    </script>
@endsection
