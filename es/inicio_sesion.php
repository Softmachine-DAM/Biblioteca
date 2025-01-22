<?php
    include("../PHP-JS/conexion.php");
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
    <link rel="stylesheet" href="../Styles/InicioSesion.css">
    <link rel="icon" type="image/x-icon" href="../IMAGENES/LOGO_MUSKIZ.jpg">

</head>
<body>
    <header>
        <div class="logo">
            <img src="../IMAGENES/LOGO_MUSKIZ.jpg" alt="Bilbao Logo">
            <h1 class="Biblioteca_muskiz">   BIBLIOTECA DE MUSKIZ</h1>
        </div>
        <nav class="menu">
            <a href="./Index.html"> |    <b>Inicio</b>     |</a>
            <a href="./Contacto.html">|    <b>Ayuda</b>    |</a>
            <a href="./Accesibilidad.html">|  <b>Accesibilidad</b>    |</a>
            <a href="./Registro.html">  <b>| Registro  |</b>   </a>
            <a href="../eus/Index(eus).html">  <b> >  Euskaraz  </b>   </a>
        </nav>
        <div class="contacto">
            <a href="softmachines@gmial.com"></a>
        </div>
    </header>
    <main>
        <div id="sign-in">
            <h1 class="Titulo_Registro"><b>Inicio de Sesión</b></h1><br>
            <form id="formulario" action="login.php" method="POST">
                <label for="correo">Correo Electrónico</label>
                <input type="email" name="Correo" id="correo" required>
                <label for="contraseña">Contraseña</label>
                <input type="password" name="Contraseña" id="contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
            <sub>¿No tienes cuenta? <a href="./Registro.php" style="text-decoration-color: #0000; color: #0019a7;">Crea una aquí.</a></sub><br>
            <sub>¿No recuerda su contraseña? <a href="../PHP-JS/Restablecer.php" style="text-decoration-color: #0000; color: #0019a7;">Restablezca aqui.</a></sub>
        </div>
    </main>
</body>
</html>