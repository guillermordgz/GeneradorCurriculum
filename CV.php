<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="styles/cv.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
</head>
<body>
    <body class="bg-info">
        <div id="container">
            <div class="p-5 mb-5">
                <div class="row">
                    <div class="col-12 col-lg-2">
                        <img class= "rounded" src="images/usuario.jpg" alt="Foto de usuario">
                    </div>
                    <div class="col-12 col-lg-10">
                        <h2><?php
                        include("php/conexion.php");
                        $archivo = fopen("php/sesion.txt","r");
                        $valor = fread($archivo, filesize("php/sesion.txt"));
                        $sesion = intval($valor);
                        $select = "SELECT NombreCompleto, descripcion, correoElectronico FROM usuarios WHERE idUsuario = $sesion";
                        $resultado = mysqli_query($conn, $select);
                        $datosPersonales = mysqli_fetch_array($resultado);
                        echo $datosPersonales['NombreCompleto'];
                        ?></h2>
                        <h3 class="mt-5">Correo electrónico:</h3>
                        <?php echo $datosPersonales['correoElectronico']?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h4 class="mt-5" >Acerca de mí:</h4>
                        <?php echo $datosPersonales['descripcion']?>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4 class="mt-5">Información de contacto:</h4>
                        <table class="table table-bordered table-sm">
                    <thead class="table-striped">
                        <tr>
                            <th>Red Social</th>
                            <th>Nombre de usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $select = "SELECT nombreRed, nombreUsuarioRed FROM contacto WHERE idUsuario = $sesion";
                        $resultado = mysqli_query($conn, $select);
                        while($row = mysqli_fetch_array($resultado)){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $row['nombreRed'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nombreUsuarioRed'] ?>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-3">
                        <h4 class="mt-5">Formación académica:</h4>
                        <table class="table table-bordered table-sm">
                    <thead class="table-striped">
                        <tr>
                            <th>Escuela</th>
                            <th>Grado</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $select = "SELECT nombreEscuela, grado FROM formacion WHERE idUsuario = $sesion";
                        $resultado = mysqli_query($conn, $select);
                        while($row = mysqli_fetch_array($resultado)){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $row['nombreEscuela'] ?>
                                </td>
                                <td>
                                    <?php echo $row['grado'] ?>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                    </div>
                    <div class="col-12 col-xl-9">
                        <h4 class="mt-5">Experiencia:</h4>
                        <table class="table table-bordered table-sm">
                    <thead class="table-striped">
                        <tr>
                            <th>Empresa</th>
                            <th>Puesto</th>
                            <th>Duración</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de fin</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $select = "SELECT nombreEmpresa, puesto, fechaInicio, fechaFin, duracion FROM experiencia WHERE idUsuario = $sesion";
                        $resultado = mysqli_query($conn, $select);
                        while($row = mysqli_fetch_array($resultado)){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $row['nombreEmpresa'] ?>
                                </td>
                                <td>
                                    <?php echo $row['puesto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['duracion'];
                                          echo      ' años';?>
                                </td>
                                <td>
                                    <?php echo $row['fechaInicio'] ?>
                                </td>
                                <td>
                                    <?php echo $row['fechaFin'] ?>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
            <div class="alert alert-info show fixed-bottom" role="alert">
            <button class="btn-close" data-bs-dismiss="alert"></button>
                Es usted <?php echo $datosPersonales['NombreCompleto']?>?, de click <a href="index.html" class="alert-link" target="_blanck">aquí</a> para modificar su CV.
              </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>