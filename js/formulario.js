function validarFormulario() {
    // Obtener los valores de los campos
    var documento = document.getElementById('documento').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('telefono').value;

    // Validación de campos vacíos
    if (documento === "" || nombre === "" || apellido === "" || email === "" || telefono === "") {
        Swal.fire({
            title: "Error",
            text: "Todos los campos son obligatorios.",
            icon: "error"
        });
        return false; // Evita el envío del formulario
    }

    // Validación de formato de email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        Swal.fire({
            title: "Error",
            text: "Por favor, ingresa un correo electrónico válido.",
            icon: "error"
        });
        return false;
    }

    // Validación del teléfono (debe ser un número y no puede tener más de 10 dígitos)
    if (!/^\d{7,10}$/.test(telefono)) {
        Swal.fire({
            title: "Error",
            text: "Por favor, ingresa un número de teléfono válido (entre 7 y 10 dígitos).",
            icon: "error"
        });
        return false;
    }

    // Validación de la longitud del documento (por ejemplo, entre 6 y 10 dígitos)
    if (documento.length < 6 || documento.length > 10) {
        Swal.fire({
            title: "Error",
            text: "El documento debe tener entre 6 y 10 dígitos.",
            icon: "error"
        });
        return false;
    }

    // Si todas las validaciones son exitosas, muestra la alerta de éxito
    Swal.fire({
        title: "Éxito",
        text: "Datos enviados correctamente.",
        icon: "success"
    }).then(function() {
        // Enviar el formulario
        document.forms[0].submit();
    });

    // Previene el envío del formulario hasta que se cierre la alerta de éxito
    return false;
}