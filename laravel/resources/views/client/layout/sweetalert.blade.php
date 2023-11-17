@if ($errors->any())
    <script>
        var laravelErrors = @json($errors->all());
        window.onload = function() {
            Swal.fire({
                title: 'Errores detectados',
                icon: 'error',
                html: '<ul>' + laravelErrors.map(function(error) {
                    return '<li>' + error + '</li>';
                }).join('') + '</ul>',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        };
    </script>
@endif


<script>
    function confirmLogout(event) {
        event.preventDefault(); // Previene el comportamiento por defecto del enlace
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¿Quieres cerrar sesión?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#5f5364',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, cerrar sesión',
            reverseButtons: true // Coloca el botón de confirmación a la derecha
            // No se especifica el foco en ningún botón
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirige a la ruta de cierre de sesión
                window.location.href = '{{ route('logout') }}';
            }
        });
    }
</script>

