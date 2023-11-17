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
