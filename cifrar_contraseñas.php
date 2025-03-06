<?php
// Incluir el archivo de conexión
require_once 'db_connection.php';

// Obtener todas las contraseñas de la tabla 'users'
$sql = "SELECT id, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $password = $row['password'];

        // Cifrar la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Actualizar la contraseña cifrada en la base de datos
        $update_sql = "UPDATE users SET password = '$hashed_password' WHERE id = $id";
        if ($conn->query($update_sql) === TRUE) {
            echo "Contraseña cifrada para el usuario con ID: " . $id . "<br>";
        } else {
            echo "Error al cifrar la contraseña para el usuario con ID: " . $id . ": " . $conn->error . "<br>";
        }
    }
} else {
    echo "No se encontraron contraseñas en la base de datos.";
}

// Cierra la conexión
$conn->close();
?>
