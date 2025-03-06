<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo de conexión
require_once 'db_connection.php';

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Escapar los datos para prevenir inyección SQL
$username = $conn->real_escape_string($username);

// Consulta SQL usando prepared statements para mayor seguridad
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);  // "s" indica que estamos pasando un string
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Usuario encontrado, verificar la contraseña
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Contraseña correcta
        echo "Login exitoso";
        // Redirigir a la página principal (descomenta y reemplaza con la URL real)
        // header("Location: pagina_principal.php");
        // exit();
    } else {
        // Contraseña incorrecta
        echo "Usuario o contraseña incorrectos";
    }
} else {
    // Usuario no encontrado
    echo "Usuario o contraseña incorrectos";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
