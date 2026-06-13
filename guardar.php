<?php

include("conexion.php");

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$sql = "INSERT INTO publicaciones (titulo, contenido)
VALUES ('$titulo', '$contenido')";

$conexion->query($sql);

header("Location: index.php");

?>