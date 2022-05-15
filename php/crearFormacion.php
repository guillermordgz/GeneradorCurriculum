<?php
include("conexion.php");
$archivo = fopen("sesion.txt","r");
$valor = fread($archivo, filesize("sesion.txt"));
$sesion = intval($valor);

$escuela = $_POST["escuela"];
$grado = $_POST["grado"];

mysqli_query($conn,"INSERT INTO formacion (nombreEscuela, grado, idUsuario) VALUES ('".$escuela."', '".$grado."', $sesion);");
header("location: ../formacionAcademica.php");
?>