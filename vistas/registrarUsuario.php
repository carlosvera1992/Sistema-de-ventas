<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--CSS propios-->
    <link rel="stylesheet" href="../css/style.css">

    <title class="">Sistema Granja</title>
</head>

<body id="bodyLogin">
    <div class="container">
    
        <div class="row justify-content-center mt-5 row-background">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
           <h1>Registro de usuarios</h1>
                <form action="../funciones/validarRegistro.php" method="POST" class="font-weight-bold was-validated">
                
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Nombre completo" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor llene este campo.</div>
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo"
                            placeholder="Correo" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor llene este campo.</div>
                    </div>

                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario"
                            placeholder="Usuario" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor llene este campo.</div>
                    </div>


                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena"
                            placeholder="Ingrese su contraseña" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor llene este campo.</div>
                    </div>

                    
                    <div class="form-group">
                        <label for="contrasena">Confirme su contraseña</label>
                        <input type="password" class="form-control" id="contrasena2" name="contrasena2"
                            placeholder="Repita su contraseña" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor llene este campo.</div>
                    </div>

                    <button type="submit" class="btn btn-info btn btn-block font-weight-bold">Guardar</button>
                </form>
            
            </div>
        </div>

    </div>


    <!--Scripts necesarios para trabajar con bootstrap-->
    <script src="js/jquery-3.3.1.slim.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>