<?php
$alert = '';
if(!empty($_POST)){
 echo $alert = "Click";
}


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--CSS propios-->
    <link rel="stylesheet" type="text/css" href="../css/index.css">
      
      <title class="">Login</title>

      
	  <style>
		.color1{
      color:blue;}
      .borde{
          color: aqua;
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
        <div class="container" >
            <div class="row justify-content-center mt-5 border row-background" >
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                
                    <form action="" method="POST" class="font-weight-bold was-validated">
                        <div class="form group text-center ">
                            <h3 class="font-weight-bold">Login</h3><br>
                            <img src="../img/avatar.png" alt="70" width="140"><br>
                            <label class="" or="">Bienvenidos al sistema</label>
                        </div>
                        <div class="form-group">
                          <label for="usuario">Usuario</label>
                          <input type="email" class="form-control" id="" placeholder="Ingrese usuario" required>
                          <div class="valid-feedback">Valido.</div>
                          <div class="invalid-feedback">Por favor llene este campo.</div>
                        </div>
                        <div class="form-group">
                          <label for="contrasena">Contraseña</label>
                          <input type="password" class="form-control" id="" placeholder="Ingrese su contraseña" required>
                          <div class="valid-feedback">Valido.</div>
                          <div class="invalid-feedback">Por favor llene este campo.</div>
                        </div>
                        
                        <button type="submit" class="btn btn-info btn btn-block font-weight-bold">Ingresar</button>
                      </form>
                </div>
            </div>

        </div>


    <!--Scripts necesarios para trabajar con bootstrap-->
    <script src="js/jquery-3.3.1.slim.min.js">  </script>
    <script src="js/popper.min.js">  </script> 
    <script src="js/bootstrap.min.js"></script>

  </body>

  
  </html>
  
  