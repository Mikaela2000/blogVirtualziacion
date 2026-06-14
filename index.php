<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ===== ROUTER DINÁMICO PARA ASSETS =====
// Detectar la URI solicitada
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Limpiar base path
$basePath = dirname($_SERVER['SCRIPT_NAME']);
$basePath = $basePath === '/' ? '' : rtrim($basePath, '/');

// Eliminar el base path de la URI si existe
if ($basePath && strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
}

// Eliminar el prefijo de NAP (/42501611) si existe
if (strpos($requestUri, '/42501611') === 0) {
    $requestUri = substr($requestUri, strlen('/42501611'));
}

// Normalizar la URI
$requestUri = '/' . ltrim($requestUri, '/');

// Extensiones de assets que servimos dinámicamente
$assetExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'pdf'];
$fileExt = strtolower(pathinfo($requestUri, PATHINFO_EXTENSION));

// Si es un asset, servirlo dinámicamente
if (in_array($fileExt, $assetExtensions)) {
    $filePath = __DIR__ . $requestUri;
    
    if (file_exists($filePath) && is_file($filePath)) {
        // MIME types para cada extensión
        $mimeTypes = [
            'css' => 'text/css; charset=UTF-8',
            'js' => 'application/javascript; charset=UTF-8',
            'json' => 'application/json',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'ico' => 'image/x-icon',
            'pdf' => 'application/pdf'
        ];
        
        header('Content-Type: ' . ($mimeTypes[$fileExt] ?? 'application/octet-stream'));
        header('Cache-Control: public, max-age=3600');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        header('HTTP/1.0 404 Not Found');
        exit('/* Asset not found: ' . htmlspecialchars($requestUri) . ' */');
    }
}

// ===== FIN DEL ROUTER - Si llegamos aquí, es una página HTML =====

include __DIR__ . '/conexion.php';

$basePath = dirname($_SERVER['SCRIPT_NAME']);
$basePath = $basePath === '/' ? '' : rtrim($basePath, '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?= $basePath ?>/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Portfolio Mika</title>
</head>

<body>

<div class="container">

    <!-- INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido">

            <header>
                <div class="contenido-header">
                    <h3>/LP/</h3>

                    <nav id="nav">
                        <ul id="links">
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#sobremi">Sobre mi</a></li>
                            <li><a href="#servicios">Tecnologías</a></li>
                            <li><a href="#publicaciones">Publicaciones</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                            <li><a href="<?= $basePath ?>/actualizar.php">Actualizar Blog</a></li>
                        </ul>
                    </nav>

                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    <div class="redes">
                        <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                    </div>

                </div>
            </header>

            <div class="presentacion">
                <p class="bienvenida">Bienvenidos</p>
                <h2>Trabajo Final <span>Virtualización</span></h2>

                <p class="descripcion">
                    Este sitio corresponde al Trabajo Práctico Final...
                </p>

                <a href="<?= $basePath ?>/img/CV Mikaela Monroy.pdf" download>Descargar Informe</a>
            </div>

        </div>
    </section>

    <!-- PUBLICACIONES -->
    <div class="contenedor-publicaciones">

        <?php
        $sql = "SELECT * FROM publicaciones ORDER BY fecha DESC";
        $resultado = $conexion->query($sql);

        if ($resultado && $resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
        ?>

        <div class="publicacion">
            <h4><?= $fila['titulo'] ?></h4>
            <p class="fecha"><?= $fila['fecha'] ?></p>
            <p><?= $fila['contenido'] ?></p>
        </div>

        <?php
            }
        } else {
        ?>

        <div class="publicacion">
            <h4>No hay publicaciones todavía</h4>
            <p>Utiliza "Actualizar Blog" para agregar contenido.</p>
        </div>

        <?php } ?>

    </div>

    <!-- CONTACTO -->
    <section id="contacto">
        <h3>Contáctame</h3>

        <form action="https://formsubmit.co/mikaelamonroy9@gmail.com" method="POST">

            <input type="text" name="name" placeholder="Nombre">

            <input type="email" name="email" placeholder="Email">

            <input type="text" name="tema" placeholder="Tema">

            <textarea name="mensaje" placeholder="Mensaje"></textarea>

            <input type="submit" value="Enviar">

        </form>

    </section>

</div>

<footer>
    <p>UTN - FRT / Monroy Mikaela 2026</p>
</footer>

<script src="<?= $basePath ?>/script.js"></script>

</body>
</html>