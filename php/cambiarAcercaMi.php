<?php

include("conexion.php");

$archivo = fopen("sesion.txt","r");
$valor = fread($archivo, filesize("sesion.txt"));
$sesion = intval($valor);

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$descripcion = $_POST["descripcion"];
mysqli_query($conn,"UPDATE usuarios SET NombreCompleto = '$nombre', descripcion = '$descripcion', correoElectronico = '$email' WHERE idUsuario = $sesion");
header("location: ../acercaMi.html");
?>