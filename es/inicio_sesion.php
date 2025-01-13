<?php
    include("conexion.php");
    $correo = "SELECT * FROM clientes_1";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Softmachines">
    <meta name="fecha" content="20-10-2024">
    <meta name="proyecto reto" content="WEB-RETO-1">
    <meta name="keywords" content="inicio sesión,libros, biblioteca, Muskiz, lectura" >
    <title>Inicio Sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Softmachine-DAM.github.io-main/Styles/Estilos_Inicio_Sesion.css">
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
            <a href="/Softmachine-DAM.github.io-main/eu/index_eu.html" class="nav-link">Eu</a>
        </nav>
    </header>
    <main id="sign-in">
    <h1 class="Titulo_Registro"><b>Inicio de Sesión</b></h1> 
    <form action="login.php" method="POST">
    <label for="correo">Correo Electrónico</label><br>
    <input type="email" name="Correo" id="correo" required><br>
    <label for="contraseña">Contraseña</label><br>
    <input type="password" name="Contraseña" id="contraseña" required><br><br>
    <input type="submit" value="Iniciar Sesión">
    </form>
        <sub>¿No tienes cuenta? <a href="/Softmachine-DAM.github.io-main/es/registro.php" style="text-decoration-color: blue;">Crea una aquí.</a></sub>
        <sub>¿No recuerda su contraseña? <a href="/Softmachine-DAM.github.io-main/es/restablecer.php" style="text-decoration-color: blue;">Restablezca aqui.</a></sub>
    </main>
    <footer id="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="/Softmachine-DAM.github.io-main/Imagenes/Softmachines.png" alt="logo Softmachines">
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