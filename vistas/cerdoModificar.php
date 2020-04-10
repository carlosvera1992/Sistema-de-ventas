<?php
    require_once '../controlador/CerdoControl.php';
    $cerdoControl = new CerdoControl();
    $cerdo = $cerdoControl->obtenerPorId($_REQUEST['codigo']);
    
    require_once '../controlador/CorralControl.php';
    $corralControl = new Corralcontrol();
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
    <div class="container-fluid">
        <div class="row justify-content-center row-background">
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 col-xl-8">

                <form action="../funciones/modificarCerdo.php" method="GET" class="font-weight-bold was-validated">
                    <div class="form group text-center ">
                        <h3 class="font-weight-bold">Modificar Cerdo</h3><br>

                    </div>
                    <div class="form-group">
                        <label for="codigo">Código:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" readonly placeholder="Ingrese Código"
                            required value="
                        <?php echo $cerdo->getCodcerdo(); ?>">
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="fechanacimiento">Fecha De Nacimiento:</label>
                        <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento"
                            placeholder="Ingrese la fecha" required value="<?php echo $cerdo->getFechanac(); ?>">
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>

                    <p>Sexo:</p>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="macho"
                            value="<?php echo $cerdo->getSexo(); ?>"
                            <?php echo ($cerdo->getSexo() == "macho" ? "checked" : ""); ?>>
                        <label class="form-check-label" for="macho">
                            Macho
                        </label>
                    </div>

                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="hembra"
                            value="<?php echo $cerdo->getSexo(); ?>"
                            <?php echo ($cerdo->getSexo() == "hembra" ? "checked" : ""); ?>>
                        <label class="form-check-label" for="hembra">
                            Hembra
                        </label>
                    </div><br><br>

                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select class="form-control" id="estado" name="estado" value="">

                            <option value="<?php echo $cerdo->getEstado(); ?> "
                                <?php echo ($cerdo->getEstado() == "vivo" ? "selected" : "")?>>Vivo</option>

                            <option value="<?php echo $cerdo->getEstado(); ?> "
                                <?php echo ($cerdo->getEstado() == "muerto" ? "selected" : "")?>>Muerto</option>

                            <option value="<?php echo $cerdo->getEstado(); ?> "
                                <?php echo ($cerdo->getEstado() == "momia" ? "selected" : "")?>>Momia</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" id="precio" name="precio"
                            placeholder="Ingrese el precio" required value="<?php echo $cerdo->getPrecio(); ?>">
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>

                    <div class="form-group">
                        <label for="corral">Corral:</label>
                        <select class="form-control" id="corral" name="corral" value="">
                            <?php foreach ($corralControl->obtenerTodos() as $cor) { ?>
                            <option value="<?php echo $cor->codcorral; ?>"
                                <?php echo ($cerdo->getCodcorral() == $cor->codcorral ? "selected" : "")?>>
                                <?php echo $cor->nombre; ?>
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