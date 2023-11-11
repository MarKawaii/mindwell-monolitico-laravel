<!-- Modal -->
<div class="modal fade" id="googleLoginModal" tabindex="-1" aria-labelledby="googleLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="googleLoginModalLabel">Iniciar Sesión con Google</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <a href="{{ route('google.login') }}" class="btn btn-danger">Login con Google</a>
            </div>
        </div>
    </div>
</div>
