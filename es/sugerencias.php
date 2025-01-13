<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

$insertar = "INSERT INTO contacto (nombre,correo,asunto,motivo) VALUES('$nombre','$apellidos','$correo','$telefono')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Se ha registrado el usuario con exito');
    window.location='/practica-php'</script>";
}else{
    "<script>alert('No se pudo registrar al usuario'); 
    window.history.go(-1);</script>";
}