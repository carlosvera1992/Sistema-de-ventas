<?php
    session_start();
    $varSesion = $_SESSION['usuario'];

    if($varSesion == null || $varSesion = ''){
        header("location: ../index.php");
        die();
    }
    require_once '../controlador/CorralControl.php';
    $corralControl = new CorralControl();
    $corral = $corralControl->obtenerPorCodigo($_REQUEST['codigo']);
    
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
    <div class="container">
        <div class="row justify-content-center row-background">
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6 col-xl-8">

                <form action="../funciones/agregarcorral.php" method="GET" class="font-weight-bold was-validated">
                    <div class="form group text-center ">
                        <h3 class="font-weight-bold">Modificar Corral</h3><br>

                    </div>
                    <div class="form-group">
                        <label for="codigo">Código:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" readonly placeholder="Ingrese Código"
                            required value="<?php echo $corral->getCodcorral();?>">
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Ingrese Nombre"
                            required value="<?php echo $corral->getNombre();?>">
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>

                    <div class="form-group">
                        <label for="capacidad">Capacidad:</label>
                        <input type="number" class="form-control" id="capacidad" name="capacidad"  placeholder="Ingrese Capacidad"
                            required value="<?php echo $corral->getCapacidad();?>">
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>

                    <div class="form-group">
                        <label for="area">Módulo:</label>
                        <select class="form-control" id="modulo" name="modulo" value="">
                            <?php foreach ($moduloControl->obtenerTodos() as $mod) { ?>
                            <option value="<?php echo $mod->getCodModulo(); ?>"
                                <?php echo ($corral->getCodmodulo() == $mod->getCodModulo() ? "selected" : "")?>>
                                <?php echo $mod->getNombre(); ?>
                            </option>
                            <?php }?>

                        </select>
                    </div>

                   

                    <button type="submit" class="btn btn-info btn btn-block font-weight-bold"
                        value="guardar">Guardar</button>
                </form>
            </div>
        </div>


    </div>

    <!--Scripts necesarios para trabajar con bootstrap-->
    <script src="../js/jquery-3.3.1.slim.min.js"> </script>
    <script src="../js/popper.min.js"> </script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>