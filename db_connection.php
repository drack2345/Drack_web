<?php

$servername = "trolley.proxy.rlwy.net";
$username = "root";
$password = "MklaUGRdKQtNibPmCszseEZGVTxGzioN";
$dbname = "railway";
$port = 12634; // Agrega el puerto

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el juego de caracteres a utf8 (recomendado)
$conn->set_charset("utf8");

?>