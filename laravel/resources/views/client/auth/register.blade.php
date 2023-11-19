<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('libs/client/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('libs/client/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/client/css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e117c4f16.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>MIND-WELL - Registro</title>

    <!-- Estilo adicional para el fondo morado -->
    <style>
        body {
            background-color: #5f5364;
            /* Color morado */
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Crear una cuenta</h2>
        <form action="{{ route('register.post') }}" method="post">
            @csrf
            <div class="row mb-2">
                <div class="col-md-6">
                    <label for="inputName">Nombre</label>
                    <input type="text" class="form-control" id="inputName" name="nombre"
                        placeholder="Nombre completo" value="{{ old('nombre') }}"
                        oninput="this.value=this.value.replace(/[^a-zA-Z ]/g, '')" minlength="10" maxlength="30"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="inputRun">RUN</label>
                    <input type="text" class="form-control" id="inputRun" name="run" placeholder="RUN"
                        value="{{ old('run') }}" minlength="9" maxlength="12" required>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <label for="inputCelular">Celular</label>
                    <input type="text" class="form-control" id="inputCelular" name="celular" placeholder="Celular"
                        value="{{ old('celular') }}" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                        minlength="9" maxlength="9" required>
                </div>
                <div class="col-md-6">
                    <label for="inputTelefono">Teléfono</label>
                    <input type="text" class="form-control" id="inputTelefono" name="telefono" placeholder="Teléfono"
                        value="{{ old('telefono') }}" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                        minlength="9" maxlength="9">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email"
                        value="{{ old('email') }}" minlength="10" maxlength="50" required>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <label for="inputPassword">Contraseña</label>
                    <input type="password" class="form-control" id="inputPassword" name="contrasena"
                        placeholder="Contraseña" minlength="6" maxlength="20" required>
                </div>
                <div class="col-md-6">
                    <label for="inputRepeatPassword">Repetir Contraseña</label>
                    <input type="password" class="form-control" id="inputRepeatPassword" name="repetir_contrasena"
                        placeholder="Repetir Contraseña" minlength="6" maxlength="20" required>
                </div>
            </div>

            <div class="form-group mt-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="acepta_terminos"
                        {{ old('acepta_terminos') ? 'checked' : '' }}>
                    <label class="form-check-label" for="gridCheck">
                        Acepto los términos y condiciones
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-warning mt-3">Registrar</button>
        </form>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var inputRun = document.getElementById('inputRun');

            inputRun.addEventListener('input', function() {
                var value = inputRun.value;
                value = value.replace(/[^0-9kK]+/g, '');
                // Formatear con puntos y guion
                value = value.replace(/^(\d{1,2})(\d{3})?(\d{3})?([0-9kK]?)$/, '$1.$2.$3-$4');

                inputRun.value = value.toUpperCase(); // Convertir a mayúsculas
            });
        });
    </script>

    <script src="{{ asset('libs/client/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/client/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('libs/client/js/custom.js') }}"></script>

    @include('client.layout.sweetalert')
</body>

</html>
