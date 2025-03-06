<?php
// Incluir el archivo de conexión
require_once 'db_connection.php';

// Contraseña en texto plano
$password_text = "contraseña1"; // Reemplaza con la contraseña que deseas cifrar

// Cifrar la contraseña
$password_hashed = password_hash($password_text, PASSWORD_DEFAULT);

echo "Hash de la contraseña: " . $password_hashed;

// Cierra la conexión
$conn->close();
?>