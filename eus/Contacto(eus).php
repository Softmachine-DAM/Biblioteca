<?php
include("../PHP-JS/Conexion.php");
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
    <link rel="stylesheet" href="../Styles/Contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../Imagenes/LOGO_MUSKIZ.png">
    <link rel="icon" type="image/x-icon" href="../IMAGENES/LOGO_MUSKIZ.jpg">
</head>
<body>
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
            <a href="../es/Contacto.php">  <b> >  Gazteleraz  </b>   </a>
           
        </nav>
        <div class="contacto">
            <a href="softmachines@gmail.com"> 
                
            </a>

        </div>
    </header>
    <main>
        <div class="form-content">
            <h2 class="Titulo_Contacto"><b>Bidali formularioa</b></h2>
            <form action="quejas.php" method="post" class="container__form">
                <label for="Nombre">Izena</label>
                <input type="text" name="Nombre" id="Nombre" placeholder="Manolo Jiménez Curro">
   
                <label for="email">Elbide elektronikoa</label>
                <input type="email" name="Correo_Electronico" id="Correo_Electronico" placeholder="Manolojmcr@gmail.com">
   
                <label for="subject">Gaia</label>
                <input type="text" name="Asunto" id="Asunto" placeholder="Fallos en la pagina,Dudas etc">
                <hr>
                <br>
                <label for="coments">Iruzkinak</label>
                <input type="text" name ="Comentarios" id="Comentarios" placeholder="Introduce un comentario">
                <input class="btn" type="submit" value="Enviar">
            </form>
            <sub><a href="/es/VerQuejas(eus).php" style="text-decoration-color: blue;">Gehien egiten diren galderak ezagutu nahi dituzu? Ikus ezazu hemen!</a></sub>
        </div>
        
    </main>
    
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
</body>
</html>