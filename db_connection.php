<?php

$url = parse_url("mysql://root:MklaUGRdKQtNibPmCszseEZGVTxGzioN@trolley.proxy.rlwy.net:12634/railway");

$servername = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$dbname = substr($url["path"], 1);
$port = $url["port"];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
