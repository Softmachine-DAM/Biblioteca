<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Quejas</title>
    <link rel="stylesheet" href="../Styles/VerQuejas.css>
</head>
<body>
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
</body>
</html>
<?php
include("../PHP-JS/conexion.php");
$usuarios = "SELECT * FROM quejas";
?>