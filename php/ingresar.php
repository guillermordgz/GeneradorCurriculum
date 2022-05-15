<?php

include("conexion.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];
$select = mysqli_query($conn,"SELECT * FROM Usuarios WHERE correoElectronico = '".$usuario."' AND contrasena = '".$password."'");

$confirmar = mysqli_num_rows($select);

if($confirmar==1){
    $row = mysqli_fetch_assoc($select);
    $usuarioActual = $row['idUsuario'];
    $archivo = fopen("sesion.txt","wr+");
    fwrite($archivo, $usuarioActual);
    header("location: ../acercaMi.html");
}else{
    header("location: ../index.html");
}

?>