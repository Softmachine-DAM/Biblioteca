<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Softmachines">
    <meta name="fecha" content="20-10-2024">
    <meta name="proyecto reto" content="WEB-RETO-1">
    <meta name="keywords" content="contacto,libros, biblioteca, Muskiz, lectura" >
    <title>Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Softmachine-DAM.github.io-main/Styles/Estilos_contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/Softmachine-DAM.github.io-main/Imagenes/LOGO_MUSKIZ.png">
</head>
<body>
    <header>
        <div class="logo">
            <img src="/Softmachine-DAM.github.io-main/Imagenes/LOGO_MUSKIZ.png" alt="logo de la compañía">
            <h2 class="nombre empresa">BIBLIOTECA MUNICIPAL MUSKIZ</h2>
        </div>
        <nav>
            <a href="/Softmachine-DAM.github.io-main/es/index.php" class="nav-link">Inicio</a>
            <a href="/Softmachine-DAM.github.io-main/es/sobre_nosotros.php" class="nav-link">Sobre Nosotros</a>
            <a href="/Softmachine-DAM.github.io-main/es/contacto.php" class="nav-link">Contacto</a>
            <a href="/Softmachine-DAM.github.io-main/es/dudas_frecuentes.php" class="nav-link">Dudas Frecuentes</a>
            <a href="/eu/index_eu.html" class="nav-link">Eu</a>
        </nav>
    </header>
    <main>
        <img src="/Softmachine-DAM.github.io-main/Imagenes/check-1292819_640.png" alt="check" id="checkit">
        <div class="form-content">
            <h2 class="Titulo_Contacto"><b>Enviar su formulario</b></h2>
            <form action="quejas.php" method="post" class="container__form">
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" placeholder="Manolo Jiménez Curro">
    
                <label for="email">Correo electrónico</label>
                <input type="email" name="Correo_Electronico" id="Correo_Electronico" placeholder="Manolojmcr@gmail.com">
    
                <label for="subject">Asunto</label>
                <input type="text" name="Asunto" id="Asunto" placeholder="Fallos en la pagina,Dudas etc">
                <hr>
                <br>
                <label for="coments">Comentarios</label>
                <input type="text" name ="Comentarios" id="Comentarios" placeholder="Introduce un comentario">
                <input class="btn" type="submit" value="Enviar">
            </form>
            <sub><a href="/Softmachine-DAM.github.io-main/es/ver_quejas.php" style="text-decoration-color: blue;">¿Quieres saber las dudas mas frecuentes? !Mirelo aqui!</a></sub>
        </div>
    </main>
    <footer id="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="/Imagenes/Softmachines.png" alt="logo Softmachines">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>TÉRMINOS Y CONDICIONES DE USO</h2>
                <p><a href="https://www.somorrostro.com/" class="aviso-legal">Aviso Legal</a></p>
            </div>
            <div class="box">
                <h2>SÍGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/MuskizUdala" class="fab fa-facebook"></a>
                    <a href="https://www.instagram.com/muskizudala/" class="fab fa-instagram"></a>
                    <a href="https://x.com/Muskiz" class="fab fa-twitter"></a>
                    <a href="https://www.youtube.com/@MuskizUdalaAyuntamiento" class="fab fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
        <small>&copy;2024 <b>Softmachines</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>