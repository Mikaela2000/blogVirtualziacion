<?php

require_once __DIR__ . '/config.php';
include __DIR__ . '/conexion.php';

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$sql = "INSERT INTO publicaciones (titulo, contenido)
VALUES ('$titulo', '$contenido')";

$conexion->query($sql);

app_redirect('/index.php');

?>