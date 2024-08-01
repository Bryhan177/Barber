<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Prepara la declaración SQL para insertar los datos
    $sql = "INSERT INTO clientes_info (documento, nombre, apellido, email, telefono) VALUES (?, ?, ?, ?, ?)";
    
    // Prepara y vincula
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssi", $documento, $nombre, $apellido, $email, $telefono);

    // Ejecuta la declaración
    if ($stmt->execute()) {
        echo "Datos guardados exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
