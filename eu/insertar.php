<?php
include("conexion.php");

$nombre = $_POST["Nombre"];
$apellidos = $_POST["Apellidos"];
$correo = $_POST["Correo"];
$telefono = $_POST["Telefono"];

$insertar = "INSERT INTO clientes_1 (Nombre,Apellidos,Correo,Telefono) VALUES('$nombre','$apellidos','$correo','$telefono')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Se ha registrado el usuario con exito');
    window.location='/Softmachine-DAM.github.io-main/es/inicio_sesion.php'</script>";
}else{
    "<script>alert('No se pudo registrar al usuario'); 
    window.history.go(-1);</script>";
}