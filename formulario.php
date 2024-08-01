<!DOCTYPE html> <!-- Corregí la etiqueta DOCTYPE -->
<html lang="es">
<head>
    <meta charset="UTF-8"> <!-- Añadí la metaetiqueta charset -->
    <title>Registro</title>
    <link rel="icon" type="image/x-icon" href="assets/img/barberia-Photoroom.png" /> <!-- Corregí el nombre del archivo en el favicon -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="css/formulario.css" rel="stylesheet" />
</head>
<body>
    <center>
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./index.html">
            <img class="logoBarber" src="assets/img/barberia-Photoroom.png" alt="Logo Barber Nigga">
        </a>
        </center>
        <center>
            <h2>Formulario de Clientes</h2>
            <form action="procesar.php" method="post" onsubmit="return validarFormulario()">
                <label for="documento">Documento:</label>
                <input type="number" id="documento" name="documento"><br><br>

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" maxlength="30"><br><br>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" maxlength="30"><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" maxlength="50"><br><br>

                <label for="telefono">Teléfono:</label>
                <input type="number" id="telefono" name="telefono"><br><br>
                <div class="terminos">
                <label for="terminos">Acepto terminos y condiciones</label><input type="checkbox">
                </div>
                <strong><a href="#">¿olvidaste tu contraseña?</a></strong>
                <input type="submit" value="Enviar">
            </form>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </center>
    </div>
    <script src="./js/formulario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
