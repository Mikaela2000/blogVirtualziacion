<?php

$host = "172.16.90.184";
$usuario = "mikauser";
$password = "mika9380";
$bd = "blogdb";

$conexion = new mysqli($host, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>