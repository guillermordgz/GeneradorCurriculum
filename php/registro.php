<?php

include("conexion.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];
$passwordConfirm = $_POST["passwordConfirm"];

if($password==$passwordConfirm){
    mysqli_query($conn,"INSERT INTO Usuarios (correoElectronico, contrasena) VALUES('".$usuario."','".$password."')");
    header("location: ../acercaMi.html");
}else{
    header("location: ../signup.html");
}

?>