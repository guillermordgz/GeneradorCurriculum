<?php

include("conexion.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];
$passwordConfirm = $_POST["passwordConfirm"];

if($password==$passwordConfirm){
    mysqli_query($conn,"INSERT INTO Usuarios (correoElectronico, contrasena) VALUES('$usuario','$password')");
    $select = mysqli_query($conn,"SELECT * FROM Usuarios WHERE correoElectronico = '$usuario' AND contrasena = '$password'");
    $row = mysqli_fetch_assoc($select);
    $usuarioActual = $row['idUsuario'];
    $archivo = fopen("sesion.txt","w+");
    fwrite($archivo, $usuarioActual);
    header("location: ../acercaMi.html");
}else{
    header("location: ../signup.html");
}

?>