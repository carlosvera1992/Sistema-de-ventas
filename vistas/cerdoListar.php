<?php
require_once '../controlador/CerdoControl.php';
$cerdoControl = new CerdoControl();
require_once '../controlador/CorralControl.php';
$corralControl = new CorralControl();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <title>Sistema Granja</title>

    <style>
    .color1 {
        color: blue;
    }
    </style>

    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    </style>
</head>

<body>


    <div class="">
        <div class="row">
            <div class="col">
                <a href="cerdoAgregar.php" class="btn btn-success" target="myframe">Agregar</a>
                <table class="table table-striped">

                    <caption>Listado De Cerdos</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Fecha Nacimiento</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Corral</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cerdoControl->obtenerTodos() as $cer) { ?>
                        <tr>
                            <th><?php echo $cer->getCodcerdo(); ?></th>
                            <td><?php echo $cer->getFechanac(); ?></td>
                            <td><?php echo $cer->getSexo(); ?></td>
                            <td><?php echo $cer->getEstado(); ?></td>
                            <td><?php echo $cer->getPrecio(); ?></td>
                            <td><?php echo $cer->getCorral()->nombre; ?></td>

                            <td>
                                <div>
                                    <a href="cerdoModificar.php?codigo=<?php echo $cer->getCodcerdo(); ?>"
                                        target="myframe" class="btn btn-info">Modificar</a>
                                    <a href="../funciones/eliminarCerdo.php?codigo=<?php echo $cer->getCodcerdo(); ?>"
                                        class="btn btn-danger">Eliminar</a>
                                </div>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>



            </div>

        </div>




    </div>
    <!--Scripts necesarios para trabajar con bootstrap-->
    <script src="../js/jquery-3.3.1.slim.min.js"> </script>
    <script src="../js/popper.min.js"> </script>
    <script src="../js/bootstrap.min.js"></script>
</body>


</html>