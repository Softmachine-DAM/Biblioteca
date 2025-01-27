<?php
include("conexion.php");
$usuarios = "SELECT * FROM quejas";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikusi Kexak</title>
    <link rel="stylesheet" href="/Softmachine-DAM.github.io-main/Styles/ver_quejas.css">
</head>
<body>
<div class="container-table">
        <div class="table__title">Kontaktua</div>
        <div class="table__header">Izena</div>
        <div class="table__header">Helbide elektronikoa</div>
        <div class="table__header">Gaia</div>
        <div class="table__header">Iruzkinak</div>
        <?php $resultado=mysqli_query($conexion,$usuarios);  
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["Nombre"];?></div>
            <div class="table__item"><?php echo $row["Correo_Electronico"];?></div>
            <div class="table__item"><?php echo $row["Asunto"];?></div>
            <div class="table__item"><?php echo $row["Comentarios"];?></div>
            <?php } mysqli_free_result($resultado);?>


            <sub><a href="/Softmachine-DAM.github.io-main/es/contacto.php" style="text-decoration-color: blue;">Sakatu hemen kontaktura bueltatzeko</a></sub>  
</body>
</html>