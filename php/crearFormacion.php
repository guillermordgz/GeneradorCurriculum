<?php
include("conexion.php");
$escuela = $_POST["escuela"];
$grado = $_POST["grado"];
$idUser = 29;
mysqli_query($conn,"INSERT INTO formacion (nombreEscuela, grado, idUsuario) VALUES ('".$escuela."', '".$grado."', $idUser);");
header("location: ../formacionAcademica.html");
?>