<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <nav class="navbar navbar-light navbar-expand-sm bg-success d-print">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secciones">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="secciones">
                <ul class="nav navbar-nav nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="../CV.php">Ver CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../acercaMi.html">Acerca de mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../informacionContacto.php">Información de contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../formacionAcademica.php">Formación académica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../experiencia.php">Experiencia</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="container">
        <div class="row p-3 m-3">
            <div class="col-12 col-md-5 col-lg-4">
                <form action="editarContacto.php?idRedSocial=<?php echo $_GET['idRedSocial'] ?>" method="post">
                    <div class="mb-5">
                        <label for="redSocial" class="mt-5 form-label text-light">Nombre de la red social</label>
                        <input type="text" class="form-control" id="redSocial"
                            placeholder="Escriba aquí el nombre de la red social" name="redSocial">
                    </div>
                    <div class="mb-5">
                        <label for="nick" class="form-label text-light">Nombre de usuario</label>
                        <input type="text" class="form-control" id="nick"
                            placeholder="Escriba aquí su nombre de usuario" name="nick">
                    </div>
                    <input type="submit" onclick="modificado()" class="shadow mt-5 btn btn-secondary" value="Guardar cambios"/>
                </form>
            </div>
            <div class="col-12 col-md-7 col-lg-8 mt-5">
                <h2 class="text-light">Usted está editando:</h2>
                <table class="table table-dark table-bordered table-sm">
                    <thead class="table-striped">
                        <tr>
                            <th>idRedSocial</th>
                            <th>nombreRed</th>
                            <th>nombreUsuarioRed</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include("conexion.php");

                        $idRedSocial = $_GET['idRedSocial'];

                        $select = "SELECT idRedSocial, nombreRed, nombreUsuarioRed FROM contacto WHERE idRedSocial = $idRedSocial";
                        $resultado = mysqli_query($conn, $select);
                        while($row = mysqli_fetch_array($resultado)){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $row['idRedSocial'] ?>
                                </td>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/editarContacto.js"></script>
</body>

</html>