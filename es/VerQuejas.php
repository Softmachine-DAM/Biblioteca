<?php
include("../PHP-JS/conexion.php");
$usuarios = "SELECT * FROM quejas";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Quejas</title>
    <link rel="stylesheet" href="../Styles/VerQuejas.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="../IMAGENES/LOGO_MUSKIZ.jpg" alt="Bilbao Logo">
            <h1 class="Biblioteca_muskiz">   BIBLIOTECA DE MUSKIZ</h1>
        </div>
        <nav class="menu">
            <a href="Index.html"> |    <b>Inicio</b>     |</a>
            <a href="Contacto.php">|    <b>Ayuda</b>    |</a>
            <a href="Accesibilidad.html">|  <b>Accesibilidad</b>    |</a>
            <a href="Registro.html">  <b>| Registro  |</b>   </a>
            <a href="../eus/Index(eus).html">  <b> >  Euskaraz  </b>   </a>
           
        </nav>
        <div class="contacto">
            <a href="softmachines@gmial.com"> 
                
            </a>

        </div>
    </header>
<div class="container-table">
        <div class="table__title">Contacto</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Asunto</div>
        <div class="table__header">Comentarios</div>
        <?php $resultado=mysqli_query($conexion,$usuarios);  
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["Nombre"];?></div>
            <div class="table__item"><?php echo $row["Correo_Electronico"];?></div>
            <div class="table__item"><?php echo $row["Asunto"];?></div>
            <div class="table__item"><?php echo $row["Comentarios"];?></div>
            <?php } mysqli_free_result($resultado);?>


            <sub><a href="../es/contacto.php" style="text-decoration-color: blue;">Pulsa aqui para volver a la pagina de contacto</a></sub>  
    </div>
</body>
<footer class="footer">
        <div class="footer-section footer-links">
          <a></a>
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
          <a href="@Muskiz.x"><img src="twitter-icon.png" alt="Twitter"></a>
          <a href="https://www.instagram.com/muskizudala/"><img src="/IMAGENES/Instagram_logo_2022.svg.png" alt="Instagram"></a>
          <a href="#"><img src="youtube-icon.png" alt="YouTube"></a>
        </div>
        <div class="Softmachines">
          <small>&copy;2024 <small>Softmachines </small> - Todos los Derechos Reservados.</small>
          </div>
 
      </footer> 
</html>