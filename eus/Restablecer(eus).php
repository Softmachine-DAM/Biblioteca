<?php
    include "./conexion.php";
    $correo = '';
    $usuarios = "SELECT * FROM clientes_1 WHERE Correo = '$correo'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Softmachines">
    <meta name="fecha" content="20-10-2024">
    <meta name="proyecto reto" content="WEB-RETO-1">
    <meta name="keywords" content="registro,libros, biblioteca, Muskiz, lectura" >
    <title>Restablecer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Styles/Estilos_Inicio_Sesion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../Imagenes/LOGO_MUSKIZ.png">
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
            <a href="../es/Restablecer.php">  <b> >  Gazteleraz  </b>   </a>
           
        </nav>
        <div class="contacto">
            <a href="softmachines@gmail.com"> 
                
            </a>

        </div>
    </header>

    <main id="sign-in">
        <div class="container-add">
            <h2 class="container__title">Berrezarri pasahitza</h2>
            <form class="container-table container-table--edit" action="actualizar.php" method="post">
                <label for="" class="container__label">Elbide elektronikoa:</label>
                <input name="Correo" type="text" class="container__input">
                <label for="" class="container__label">Pasahitza:</label>
                <input name="Contraseña" type="text" class="container__input">
                <?php $resultado=mysqli_query($conexion,$usuarios);  
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <input type="text" class="table__input>" value="<?php ?>"contraseña="Contraseña">
                <?php } mysqli_free_result($resultado);?>
                <input class="container__submit" type="Submit" Value="Restablecer">
            </form>
        </div>
        <sub>Erregistratuta zaude? <a href="../es/inicio_sesion.php" style="text-decoration-color: blue;">Hasi saioa hemen.</a></sub>
    </main>
</body>
</html>