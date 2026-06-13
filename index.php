<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Portfolio Mika</title>
</head>

<body>

    <!-- ----------------SECCION DE INICIO------------------ -->
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
                                <li><a href="actualizar.html">Actualizar Blog</a></li>
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

                <div class="bubbles">
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:20;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:9;"></span>


                </div>
                <div class="presentacion">
                    <p class="bienvenida">Bienvenidos</p>
                    <h2>Trabajo Final <span>Virtualización</span></h2>
                    <p class="descripcion">Este sitio web corresponde al Trabajo Práctico Final de la cátedra de
                        Virtualización. El proyecto consiste en la implementación de un blog personal desplegado sobre
                        una infraestructura virtualizada utilizando contenedores LXC en Proxmox,
                        con una arquitectura compuesta por un servidor de aplicaciones y un servidor de base de datos
                        independientes.
                    </p>
                    <a href="/img/CV Mikaela Monroy.pdf" download="CV Mikaela Monroy.pdf">Descargar Informe</a>
                </div>

            </div>
        </section>

        <!-- ----------------SECCION DE SOBRE MI------------------ -->
        <section id="sobremi">
            <div class="contenedor-foto">
                <img src="./img/fotoMia.jpeg" alt="Foto de Mikaela Monroy">
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

                    <div class="icono"><img src="./img/proxmox.png" alt=""></div>
                    <div class="icono"><img src="./img/ubuntu.png" alt=""></div>
                    <div class="icono"><img src="./img/php.png" alt=""></div>
                    <div class="icono"><img src="./img/Apache.png" alt=""></div>
                    <div class="icono"><img src="/img/mariadb.png" alt=""></div>


                    <div class="icono"><img src="./img/proxmox.png" alt=""></div>
                    <div class="icono"><img src="./img/ubuntu.png" alt=""></div>
                    <div class="icono"><img src="./img/php.png" alt=""></div>
                    <div class="icono"><img src="./img/Apache.png" alt=""></div>
                    <div class="icono"><img src="./img/mariadb.png" alt=""></div>


                    <div class="icono"><img src="./img/html.png" alt=""></div>
                    <div class="icono"><img src="./img/css.png" alt=""></div>
                    <div class="icono"><img src="./img/js.png" alt=""></div>
                    <div class="icono"><img src="./img/git.png" alt=""></div>
                    <div class="icono"><img src="./img/github.png" alt=""></div>


                    <div class="icono"><img src="./img/html.png" alt=""></div>
                    <div class="icono"><img src="./img/css.png" alt=""></div>
                    <div class="icono"><img src="./img/js.png" alt=""></div>
                    <div class="icono"><img src="./img/git.png" alt=""></div>
                    <div class="icono"><img src="./img/github.png" alt=""></div>



                </div>
            </div>

        </section>

        <!-- ----------------SECCION PUBLICACIONES------------------ -->

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
</body>
<!-- ----------------SECCION FOOTER------------------ -->
<footer>
    <p>UTN - FRT / Monroy Mikaela 2026</p>
    <div class="redes">
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
</footer>

<script src="script.js"></script>



</html>