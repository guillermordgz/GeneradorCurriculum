<?php
include("conexion.php");
$archivo = fopen("sesion.txt","r");
$valor = fread($archivo, filesize("sesion.txt"));
$sesion = intval($valor);

$nombreEmpresa = $_POST["nombreEmpresa"];
$puesto = $_POST["puesto"];
$fechaInicio = $_POST["fechaInicio"];
$fechaFin = $_POST["fechaFin"];
$duracion = date_diff(date_create($fechaFin), date_create($fechaInicio));
$duracion = $duracion->y;
mysqli_query($conn,"INSERT INTO experiencia (nombreEmpresa, puesto, fechaInicio, fechaFin, duracion, idUsuario) VALUES ('$nombreEmpresa', '$puesto', '$fechaInicio', '$fechaFin', $duracion, $sesion);");
header("location: ../experiencia.php");
?>