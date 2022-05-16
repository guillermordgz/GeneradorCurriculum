<?php

include("conexion.php");

$idGrado = $_GET['idGrado'];

mysqli_query($conn, "DELETE FROM formacion WHERE idGrado = $idGrado ");
header("location: ../formacionAcademica.php");

?>