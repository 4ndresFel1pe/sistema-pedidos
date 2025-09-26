<?php
$host = "localhost";
$user = "root";       // usuario por defecto en XAMPP
$pass = "";           // contraseña vacía por defecto
$db   = "test";       // tu base de datos

$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
