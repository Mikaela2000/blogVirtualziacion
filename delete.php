<?php

require_once __DIR__ . '/config.php';
include __DIR__ . '/conexion.php';

$id = $_POST['id'];

$stmt = $conexion->prepare("DELETE FROM publicaciones WHERE id = ?");
$stmt->bind_param("i", $id);

$stmt->execute();

app_redirect('/index.php');

?>