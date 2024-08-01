<?php
$servername = "localhost";
$username = "root"; // tu usuario de MySQL
$password = ""; // tu contraseña de MySQL, si no tienes, deja esto vacío
$dbname = "clientes";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 
echo "Conexión exitosa";
?>
