<?php
include("conexion.php");
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$descripcion = $_POST["descripcion"];
mysqli_query($conn,"Update Usuarios SET NombreCompleto = '".$nombre."', descripcion = '".$descripcion."', correoElectronico = '".$email."'");
header("location: ../acercaMi.html");
?>