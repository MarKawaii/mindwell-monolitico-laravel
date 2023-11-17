<style>
    .btn-custom-color {
        background-color: #5f5364;
        /* Color personalizado */
        color: white;
        /* Color del texto, ajusta según sea necesario */
    }

    .link-button {
        display: block;
        width: 100%;
        /* Hace que el enlace se comporte como un botón de ancho completo */
        text-align: center;
        padding: .375rem .75rem;
        /* Padding similar al de los botones */
        border: 1px solid transparent;
        border-radius: .25rem;
        text-decoration: none;
        /* Elimina subrayado del enlace */
        margin-bottom: 2px;
        /* Espaciado muy reducido entre enlaces */
    }
</style>

<!-- Modal -->
<div class="modal fade" id="googleLoginModal" tabindex="-1" aria-labelledby="googleLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title w-100 text-center" id="googleLoginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de inicio de sesión con Email -->
                <form method="POST" action="{{ route('login') }}" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Correo</label>
                        <input type="email" name="email" class="form-control" id="emailInput"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="passwordInput">
                    </div>
                    <button type="submit" class="btn btn-custom-color w-100">Iniciar Sesión</button>
                </form>

                <!-- Enlace para redirigir al registro de usuario -->
                <div class="d-flex justify-content-center">
                    <a href="" class="link-button btn-link">Registrarse</a>
                </div>

                <!-- Enlace para recuperar contraseña -->
                <div class="d-flex justify-content-center">
                    <a href="" class="link-button btn-link">¿Olvidaste tu contraseña?</a>
                </div>

                <hr>

                <!-- Botón de inicio de sesión con Google -->
                <div class="d-flex justify-content-center">
                    <a href="{{ route('google.login') }}" class="btn btn-danger w-100 btn-google">
                        <i class="fab fa-google me-2"></i> Iniciar con Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
