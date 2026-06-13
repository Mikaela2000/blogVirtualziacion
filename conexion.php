<?php

$host = "172.16.90.184DB";
$usuario = "root";
$password = "mika938";
$bd = "blogdb";

$conexion = new mysqli($host, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>