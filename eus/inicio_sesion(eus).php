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
    <title>Hasi saioa</title>
    <link rel="stylesheet" href="../Styles/InicioSesion.css">
    <link rel="icon" type="image/x-icon" href="../IMAGENES/LOGO_MUSKIZ.jpg">

</head>

<header>
        <div class="logo">
            <img src="../IMAGENES/LOGO_MUSKIZ.jpg" alt="Bilbao Logo">
            <h1 class="Biblioteca_muskiz">   MUSKIZKO LIBURUTEGIA</h1>
        </div>
        <nav class="menu">
            <a href="Index(eus).html"> |    <b>Hasiera</b>     |</a>
            <a href="Contacto(eus).php">|    <b>Laguntza</b>    |</a>
            <a href="Accesibilidad(eus).html">|  <b>Irisgarritasuna</b>    |</a>
            <a href="Registro(eus).html">  <b>| Erregistroa  |</b>   </a>
            <a href="/es/inicio_sesion.php">  <b> >  Gazteleraz  </b>   </a>
           
        </nav>
        <div class="contacto">
            <a href="softmachines@gmail.com"> 
                
            </a>

        </div>
    </header>
<body>
    <main>
        <div id="sign-in">
            <h1 class="Titulo_Registro"><b>Hasi saioa</b></h1><br>
            <form id="formulario" action="login.php" method="POST">
                <label for="correo">Helbide elektronikoa</label>
                <input type="email" name="Correo" id="correo" required>
                <label for="contraseña">Pasahitza</label>
                <input type="password" name="Contraseña" id="contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
            <sub>Ez duzu konturik? <a href="./Registro.php" style="text-decoration-color: #0000; color: #0019a7;">Sortu bat hemen.</a></sub><br>
            <sub>¿Ez duzu pasahitza gogoratzen? <a href="../PHP-JS/Restablecer.php" style="text-decoration-color: #0000; color: #0019a7;">Berrezarri hemen.</a></sub>
        </div>
    </main>
</body>
<footer class="footer">
        <div class="footer-section footer-links">
          <a></a>
            <a href="#">Pribatutasun-politika</a>
          <span>|</span>
          <a href="somorrostro.com">Lege-oharra</a>
        </div>
        <div class="footer-section footer-info">
            Muskizko Udala. Kultura eta Hezkuntza Arloa. Liburutegien Azpizuzendaritza<br>
            Bidebarrieta kalea, 4, 48530 Bilbao.<br>
          Teléfonos: 944 150 915, 944 156 930
        </div>
        <div class="footer-section footer-social">
          <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
          <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
          <a href="#"><img src="/IMAGENES/Instagram_logo_2022.svg.png" alt="Instagram"></a>
          <a href="#"><img src="youtube-icon.png" alt="YouTube"></a>
        </div>
        <div class="Softmachines">
          <small>&copy;2024 <small>Softmachines </small> - Eskubide guztiak erreserbatuta.</small>
          </div>
      </footer>  
</html>