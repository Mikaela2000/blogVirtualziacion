<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/config.php';


$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($requestUri, '/42501611') === 0) {
    $requestUri = substr($requestUri, strlen('/42501611'));
}

$requestUri = '/' . ltrim($requestUri, '/');


$assetExtensions = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'pdf'];
$fileExt = strtolower(pathinfo($requestUri, PATHINFO_EXTENSION));


if (in_array($fileExt, $assetExtensions)) {
    $filePath = asset_path($requestUri);
    
    if (file_exists($filePath) && is_file($filePath)) {
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


include __DIR__ . '/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="estilo.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Portfolio Mika</title>
</head>

<body>

<div class="container">

    <!-- INICIO -->
    <section id="inicio" class="inicio">
      <div class="container">
        <section id="inicio" class="inicio">
            <div class="contenido">
                <header>
                    <div class="contenido-header">
                        <h3>/LP/</h3>
                        <nav id="nav">
                            <ul id="links">
                                <li><a href="#inicio" class="seleccionado">Inicio</a></li>
                                <li><a href="#sobremi">Sobre mi</a></li>
                                <li><a href="#servicios">Tecnologías</a></li>
                                <li><a href="#publicaciones">Publicaciones</a></li>
                                <li><a href="#contacto">Contacto</a></li>
                                <li><a href="actualizar.php">Actualizar Blog</a></li>
                            </ul>
                        </nav>


                        <div id="icono-nav" onclick="responsiveMenu()">
                            <i class="fa-solid fa-bars"></i>
                        </div>

                        <div class="redes">
                            <a href="https://www.linkedin.com/in/mikaela-monroy-54800b253/" target="_blank"><i
                                    class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://github.com/Mikaela2000" target="_blank"><i class="fab fa-github"></i></a>

                        </div>
                    </div>
                </header>


                <div class="presentacion">
                    <p class="bienvenida">Bienvenidos</p>
                    <h2>Trabajo Final <span>Virtualización</span></h2>
                    <p class="descripcion">Este sitio web corresponde al Trabajo Práctico Final de la cátedra de
                        Virtualización. El proyecto consiste en la implementación de un blog personal desplegado sobre
                        una infraestructura virtualizada utilizando contenedores LXC en Proxmox,
                        con una arquitectura compuesta por un servidor de aplicaciones y un servidor de base de datos
                        independientes.
                    </p>
                    <a href="<?= app_url('pdf.php') ?>">Descargar Informe</a>
                </div>

            </div>
        </section>

        <!-- ----------------SECCION DE SOBRE MI------------------ -->
        <section id="sobremi">
            <div class="contenedor-foto">
                <img src="imagen.php?file=fotoMia.jpeg" alt="Foto de Mikaela Monroy">
            </div>
            <div class="sobremi">
                <p class="titulo-seccion">Sobre Mi</p>
                <h2>Hola, soy <span>Mikaela Monroy</span></h2>
                <h3>Legajo: 48481</h3>
                <h3>Desarrolladora Web</h3>
                <p><strong>Ubicación:</strong> San Miguel de Tucumán, Tucumán, Argentina</p>
                <p>Soy estudiante avanzada de Ingeniería en Sistemas de la Información, apasionada por el mundo de la
                    programación y el constante aprendizaje.

                    Desde que descubrí mi interés por la informática, me he entregado de lleno a explorar y adentrarme
                    en el vasto campo de la tecnología.
                    Durante mi trayectoria académica y personal, he tenido la oportunidad de trabajar en diversos
                    proyectos y enfrentarme a retos que me han permitido desarrollar mis habilidades como programadora.
                    La posibilidad de crear aplicaciones y sistemas que aporten valor a la sociedad me emociona y me
                    motiva a seguir creciendo en este campo.

                </p>
            </div>
        </section>

        <!-- ----------------SECCION SERVICIOS------------------ -->
        <section id="servicios">
            <h3 class="titulo-seccion">TECNOLOGÍAS UTILIZADAS</h3>
            <div class="fila">
                <div class="servicios">

                    <div class="icono"><img src="imagen.php?file=proxmox.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=ubuntu.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=php.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=Apache.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=mariadb.png" alt=""></div>


                    <div class="icono"><img src="imagen.php?file=proxmox.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=ubuntu.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=php.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=Apache.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=mariadb.png" alt=""></div>


                    <div class="icono"><img src="imagen.php?file=html.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=css.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=js.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=git.png" alt=""></div>
                    <div class="icono"><img src="imagen.php?file=github.png" alt=""></div>


                    <!-- <div class="icono"><img src="./img/html.png" alt=""></div>
                    <div class="icono"><img src="./img/css.png" alt=""></div>
                    <div class="icono"><img src="./img/js.png" alt=""></div>
                    <div class="icono"><img src="./img/git.png" alt=""></div>
                    <div class="icono"><img src="./img/github.png" alt=""></div> -->



                </div>
            </div>

        </section>

        <!-- ----------------SECCION PUBLICACIONES------------------ -->


<section id="publicaciones">
    <h3 class="titulo-seccion">Publicaciones</h3>

    <div class="contenedor-publicaciones">

        <?php
        $sql = "SELECT * FROM publicaciones ORDER BY fecha DESC";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {

         while ($fila = $resultado->fetch_assoc()) {
?>

    <div class="publicacion">
        <h4><?php echo $fila['titulo']; ?></h4>

        <p class="fecha">
            <?php echo $fila['fecha']; ?>
        </p>

        <p>
            <?php echo $fila['contenido']; ?>
        </p>

        <form action="<?= app_url('/eliminar_publicacion.php') ?>" method="POST"
              onsubmit="return confirm('¿Estás seguro de eliminar esta publicación?');">

            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

            <button type="submit" class="btn-eliminar">
                Eliminar
            </button>

        </form>
    </div>

<?php

            }

        } else {
        ?>

            <div class="publicacion">
                <h4>No hay publicaciones todavía</h4>
                <p>Utiliza la opción "Actualizar Blog" para agregar una nueva publicación.</p>
            </div>

        <?php
        }
        ?>

    </div>
</section>



        <!-- ----------------SECCION CONTACTO------------------ -->
        <section id="contacto">
            <h3 class="titulo-seccion">Contáctame</h3>
            <div class="contenedor-form">
                <form action="https://formsubmit.co/mikaelamonroy9@gmail.com" method="POST">
                    <div class="fila mitad">
                        <input type="text" name="name" placeholder="Nombre completo" class="input-mitad">
                        <input type="text" name="email" placeholder="Direccion de Email" class="input-mitad">
                    </div>

                    <div class="fila">
                        <input type="text" name="tema" placeholder="Tema..." class="input-full">
                    </div>

                    <div class="fila">
                        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Tu mensaje..."
                            class="input-full"></textarea>
                    </div>

                    <input type="submit" value="Enviar Mensaje" class="btn-enviar">

                </form>
            </div>
        </section>

    </div>
    <!-- ----------------SECCION FOOTER------------------ -->
<footer>
    <p>UTN - FRT / Monroy Mikaela 2026</p>
</footer>

<script src="script.php"></script>
</body>

</html>