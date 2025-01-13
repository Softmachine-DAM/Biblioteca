<?php
include("conexion.php");

$nombre = $_POST["Nombre"];
$correo_1 = $_POST["Correo_Electronico"];
$Asunto = $_POST["Asunto"];
$Comentario = $_POST["Comentarios"];
$insertar = "INSERT INTO quejas (Nombre, Correo_Electronico, Asunto, Comentarios) 
             VALUES ('$nombre', '$correo_1', '$Asunto', '$Comentario')";

$resultado = mysqli_query($conexion, $insertar);

if ($resultado) {
    echo "<script>alert('Hemos recibido su mensaje correctamente');
    window.location='/Softmachine-DAM.github.io-main/es/contacto.php'</script>";
} else {
    echo "<script>alert('Error al registrar usuario'); 
    window.history.go(-1);</script>";
}
?>
