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
    <div class="container">
        <div class="row justify-content-center row-background">
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6 col-xl-8">

                <form action="../funciones/AgregarCorral.php" method="POST" class="mt-4 font-weight-bold was-validated">
                    <div class="form group text-center ">
                        <h3 class="font-weight-bold">Agregar Corral</h3><br>
                    </div>

                    <div class="form-group">
                        <label for="codigo">Código:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese Código" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>

                    <div class="form-group">
                        <label for="capacidad">Capacidad:</label>
                        <input type="number" class="form-control" id="capacidad" name="capacidad" placeholder="capacidad" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="modulo">Módulo:</label>
                        <select class="form-control" id="modulo" name="modulo">
                            <option>Seleccione...</option>
                            <?php foreach ($moduloControl->obtenerTodos() as $mod) {?>
                            <option value="<?php echo $mod->getCodModulo()?>"><?php echo $mod->getNombre()?></option>
                            <?php }?>
                            
                        </select>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-info btn btn-block font-weight-bold">Registrar</button>
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