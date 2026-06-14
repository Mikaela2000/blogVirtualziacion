<?php
$basePath = dirname($_SERVER['SCRIPT_NAME']);
$basePath = $basePath === '/' ? '' : rtrim($basePath, '/');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Blog</title>
    <link rel="stylesheet" href="<?= $basePath ?>/estilo.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <div class="contenedor-formulario">

        <form class="formulario-blog" action="<?= $basePath ?>/guardar.php" method="POST">

            <h2>Nueva Publicación</h2>

            <div class="campo">
                <input
                    type="text"
                    name="titulo"
                    placeholder="Título de la publicación"
                    required>
            </div>

            <div class="campo">
                <textarea
                    name="contenido"
                    rows="10"
                    placeholder="Escribe aquí el contenido..."
                    required></textarea>
            </div>

            <button type="submit" class="btn-publicar">
                <i class="fa-solid fa-upload"></i>
                Publicar
            </button>

            <br><br>

            <a href="<?= $basePath ?>/index.php" class="btn-volver">
                <i class="fa-solid fa-house"></i>
                Volver al Blog
            </a>

        </form>

    </div>

</body>

</html>