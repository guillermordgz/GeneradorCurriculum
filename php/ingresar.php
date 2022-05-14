<?php

include("conexion.php");
include("variables.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$confirmar = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM Usuarios WHERE correoElectronico = '".$usuario."' AND contrasena = '".$password."'"));

if($confirmar>0){
    header("location: ../acercaMi.html"); 
}else{
    header("location: ../index.html");
}

?>