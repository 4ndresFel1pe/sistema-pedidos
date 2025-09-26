<?php
$host = "localhost";   // servidor de XAMPP
$user = "root";        // usuario por defecto
$pass = "";            // contraseña (en XAMPP normalmente está vacía)
$db   = "test";        // nombre de tu base de datos

$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
