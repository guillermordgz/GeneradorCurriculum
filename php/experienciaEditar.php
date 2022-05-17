<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia</title>
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
                        <a class="nav-link" href="../informacionContacto.php">Información de contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../formacionAcademica.php">Formación académica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../experiencia.php">Experiencia</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="container">
        <div class="row p-3 m-3">
            <div class="col-12 col-lg-4">
                <form action="editarExperiencia.php?idExperiencia=<?php echo $_GET['idExperiencia']?>" method="post">
                    <div class="mb-5">
                        <label for="empresa" class="mt-5 form-label text-light">Empresa</label>
                        <input type="text" class="form-control" id="empresa"
                            placeholder="Escriba aquí el nombre de la empresa" name="nombreEmpresa">
                    </div>
                    <div class="mb-5">
                        <label for="puesto" class="form-label text-light">Puesto</label>
                        <input type="text" class="form-control" id="puesto" placeholder="Escriba aquí el puesto desempeñado"
                            name="puesto">
                    </div>
                    <div class="mb-5">
                        <label for="fechaInicio" class="form-label text-light">Fecha de inicio</label>
                        <input type="date" class="form-control" id="fechaInicio"
                            name="fechaInicio">
                    </div>
                    <div class="mb-5">
                        <label for="fechaFin" class="form-label text-light">Fecha de fin</label>
                        <input type="date" class="form-control" id="fechaFin"
                            name="fechaFin">
                    </div>
                    <input type="submit" class="shadow mt-5 btn btn-secondary" value="Guardar cambios" />
                </form>
            </div>
            <div class="col-12 col-lg-8 mt-5">
                <h2 class="text-light">Usted está editando:</h2>
                <table class="table table-dark table-bordered table-sm">
                    <thead class="table-striped">
                        <tr>
                            <th>idExperiencia</th>
                            <th>nombreEmpresa</th>
                            <th>puesto</th>
                            <th>fechaInicio</th>
                            <th>fechaFin</th>
                            <th>duracion</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include("conexion.php");

                        $idExperiencia = $_GET["idExperiencia"];

                        $select = "SELECT idExperiencia, nombreEmpresa, puesto, fechaInicio, fechaFin, duracion FROM experiencia WHERE idExperiencia = $idExperiencia";
                        $resultado = mysqli_query($conn, $select);
                        while($row = mysqli_fetch_array($resultado)){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $row['idExperiencia'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nombreEmpresa'] ?>
                                </td>
                                <td>
                                    <?php echo $row['puesto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['fechaInicio'] ?>
                                </td>
                                <td>
                                    <?php echo $row['fechaFin'] ?>
                                </td>
                                <td>
                                    <?php echo $row['duracion'] ?>
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
</body>

</html>