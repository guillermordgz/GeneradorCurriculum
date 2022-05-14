<?php
include("conexion.php");
$redSocial = $_POST["redSocial"];
$nick = $_POST["nick"];
$idUser = 29;
mysqli_query($conn,"INSERT INTO contacto (nombreRed, nombreUsuarioRed, idUsuario) VALUES ('".$redSocial."', '".$nick."', $idUser);");
header("location: ../informacionContacto.html");
?>