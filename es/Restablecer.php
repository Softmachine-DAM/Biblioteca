<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Softmachines">
    <meta name="fecha" content="20-10-2024">
    <meta name="proyecto reto" content="WEB-RETO-1">
    <meta name="keywords" content="registro,libros, biblioteca, Muskiz, lectura" >
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Styles/InicioSesion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../Imagenes/LOGO_MUSKIZ.png">
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
    <main id="sign-in">
        <div class="container-add">
            <h2 class="container__title">Restablecer contraseña</h2>
            <form class="container-table container-table--edit" action="actualizar.php" method="post">
                <label for="" class="container__label">Correo:</label>
                <input name="Correo" type="text" class="container__input">
                <label for="" class="container__label">Contraseña:</label>
                <input name="Contraseña" type="text" class="container__input">
                <?php $resultado=mysqli_query($conexion,$usuarios);  
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <input type="text" class="table__input>" value="<?php ?>"contraseña="Contraseña">
                <?php } mysqli_free_result($resultado);?>
                <input class="container__submit" type="Submit" Value="Restablecer">
            </form>
        </div>
        <sub>¿Ya estas registrado? <a href="../es/inicio_sesion.php" style="text-decoration-color: blue;">Inicia sesión aquí.</a></sub>
    </main>
    <footer class="footer">
        <div class="footer-section footer-links">
            <a href="#">Política de privacidad</a>
            <span>|</span>
            <a href="somorrostro.com">Aviso legal</a>
        </div>
        <div class="footer-section footer-info">
            Ayuntamiento de Bilbao. Área de Cultura y Educación. Subdirección de Bibliotecas<br>
            Calle Bidebarrieta, nº4, 48005 Bilbao.<br>
            Teléfonos: 944 150 915, 944 156 930
        </div>
        <div class="footer-section footer-social">
            <a href="https://www.facebook.com/muskizko.liburutegia/"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="../IMAGENES/Instagram_logo_2022.svg.png" alt="Instagram"></a>
            <a href="#"><img src="youtube-icon.png" alt="YouTube"></a>
        </div>
        <div class="Softmachines">
            <small>&copy;2024 <small>Softmachines </small> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>
</html>
<?php
    include "./conexion.php";
    $correo = '';
    $usuarios = "SELECT * FROM clientes_1 WHERE Correo = '$correo'";
?>