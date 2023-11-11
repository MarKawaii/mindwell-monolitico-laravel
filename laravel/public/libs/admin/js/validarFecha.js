// Función para verificar si una cadena es una fecha válida
function isValidDate(dateString) {
    const date = new Date(dateString);
    return !isNaN(date.getTime());
}

// Espera a que el contenido de la página esté cargado
document.addEventListener('DOMContentLoaded', (event) => {
    // Obtén la fecha encriptada de localStorage
    const encryptedDate = localStorage.getItem('selectedDate');

    // Si no hay fecha o la fecha no es válida, redirige al inicio
    if (!encryptedDate) {
        console.error('No hay fecha encriptada en localStorage.');
        window.location.replace("/inicio");
        return;
    }

    const decodedDate = atob(encryptedDate);
    if (!isValidDate(decodedDate)) {
        console.error('La fecha desencriptada no es válida:', decodedDate);
        window.location.replace("/inicio");
        return;
    }

    // Si llegamos aquí, la fecha es válida, entonces la formateamos y mostramos
    const dateObj = new Date(decodedDate);
    const day = dateObj.getDate();
    const monthNames = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];
    const month = monthNames[dateObj.getMonth()];
    const year = dateObj.getFullYear();
    const formattedDate = `${day} de <strong>${month}</strong> de ${year}`;

    document.getElementById("fecha-placeholder").innerHTML = formattedDate;

    // No removemos el valor de localStorage aquí por si el usuario refresca la página
    // localStorage.removeItem('selectedDate');
});
