<?php
include("./conexion.php");

    $correo = $_POST["Correo"];
    $contraseña = $_POST["Contraseña"];

    $contraseña_hashed = password_hash($contraseña, PASSWORD_DEFAULT);

    $actualizar = "UPDATE clientes_1 SET Contraseña='$contraseña_hashed' WHERE Correo='$correo'";
    $resultado = mysqli_query($conexion, $actualizar);

    if ($resultado) {
        echo "<script>
            alert('La contraseña se actualizó correctamente.');
            window.location='/Softmachine-DAM.github.io-main/es/inicio_sesion.php';
        </script>";
    } else {
        echo "<script>
            alert('Hubo un error al actualizar la contraseña.');
            window.history.go(-1);
        </script>";
    }
?>
