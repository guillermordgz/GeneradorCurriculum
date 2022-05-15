<?php
include("conexion.php");

$archivo = fopen("sesion.txt","r");
$valor = fread($archivo, filesize("sesion.txt"));
$sesion = intval($valor);

$redSocial = $_POST["redSocial"];
$nick = $_POST["nick"];

mysqli_query($conn,"INSERT INTO contacto (nombreRed, nombreUsuarioRed, idUsuario) VALUES ('".$redSocial."', '".$nick."', $sesion);");
header("location: ../informacionContacto.php");
?>