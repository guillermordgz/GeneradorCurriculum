<?php

include("conexion.php");

$idRedSocial = $_GET["idRedSocial"];
$redSocial = $_POST["redSocial"];
$nick = $_POST["nick"];

mysqli_query($conn,"UPDATE contacto SET nombreRed = '$redSocial', nombreUsuarioRed = '$nick' WHERE idRedSocial = $idRedSocial");
header("location: ../informacionContacto.php");


?>