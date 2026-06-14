<?php

include __DIR__ . '/conexion.php';

$basePath = dirname($_SERVER['SCRIPT_NAME']);
$basePath = $basePath === '/' ? '' : rtrim($basePath, '/');

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$sql = "INSERT INTO publicaciones (titulo, contenido)
VALUES ('$titulo', '$contenido')";

$conexion->query($sql);

header('Location: ' . $basePath . '/index.php');

?>