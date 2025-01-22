<?php
session_start();
include("conexion.php");

$username = $_POST["Correo"];
$password = $_POST["Contraseña"];


if (!empty($username) && !empty($password)) {
    $sql = "SELECT * FROM clientes_1 WHERE Correo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $user = $resultado->fetch_assoc();
        

        echo "Contraseña almacenada: " . $user['Contraseña'] . "<br>";
        echo "Contraseña ingresada: " . $password . "<br>";


        if (password_verify($password, $user['Contraseña'])) {
            $_SESSION['Correo'] = $user['Correo'];
            header("Location: index.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        header("Location: registro.php");
            exit();
    }
} else {
    echo "Por favor, completa todos los campos.";
}
?>

