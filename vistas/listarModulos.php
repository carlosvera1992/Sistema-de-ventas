<?php
session_start();
$varSesion = $_SESSION['usuario'];

if($varSesion == null || $varSesion = ''){
    header("location: ../index.php");
    die();
}

require_once '../controlador/ModuloControl.php';
$moduloControl = new ModuloControl();
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
                <a href="moduloAgregar.php" class="btn btn-success" target="myframe"
                    style="margin:8px; float:right;">Agregar</a>
                <table class="table table-striped">

                    <caption>Listado De Módulos</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Capacidad</th>
                            <th scope="col">Area</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($moduloControl->obtenerTodos() as $mod) { ?>
                        <tr>
                            <th><?php echo $mod->getCodModulo(); ?></th>
                            <td><?php echo $mod->getNombre(); ?></td>
                            <td><?php echo $mod->getCapacidad(); ?></td>
                            <td><?php echo $mod->getArea()->getNombre(); ?></td>
                        
                            <td>
                                <div>
                                    <a href="moduloModificar.php?codigo=<?php echo $mod->getCodModulo(); ?>"
                                       class="btn btn-info">Modificar</a>
                                    <a href="../funciones/eliminarModulo.php?codigo=<?php echo $mod->getCodModulo(); ?>"
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