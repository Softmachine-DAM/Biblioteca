<?php
include("./conexion.php");

$nombre = $_POST["Nombre"];
$apellidos = $_POST["Apellidos"];
$correo = $_POST["Correo"];
$telefono = $_POST["Telefono"];
$contraseña = password_hash($_POST["Contraseña"], PASSWORD_DEFAULT);
$insertar = "INSERT INTO clientes_1 (Nombre, Apellidos, Correo, Telefono, Contraseña) 
             VALUES ('$nombre', '$apellidos', '$correo', '$telefono', '$contraseña')";

$resultado = mysqli_query($conexion, $insertar);

if ($resultado) {
    echo "<script>alert('Usuario registrado con éxito');
    window.location='./inicio_sesion.php'</script>";
} else {
    echo "<script>alert('Error al registrar usuario'); 
    window.history.go(-1);</script>";
}
?>
