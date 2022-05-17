<?php

include("conexion.php");

$idExperiencia = $_GET["idExperiencia"];
$nombreEmpresa = $_POST["nombreEmpresa"];
$puesto = $_POST["puesto"];
$fechaInicio = $_POST["fechaInicio"];
$fechaFin = $_POST["fechaFin"];
$duracion = date_diff(date_create($fechaFin), date_create($fechaInicio));
$duracion = $duracion->y;

mysqli_query($conn,"UPDATE experiencia SET nombreEmpresa='$nombreEmpresa', puesto='$puesto', fechaInicio='$fechaInicio', fechaFin='$fechaFin', duracion=$duracion WHERE idExperiencia=$idExperiencia");
header("location: ../experiencia.php");


?>