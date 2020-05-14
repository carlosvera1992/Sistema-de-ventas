<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

</body>

</html>


<?php

    require_once '../modelo/usuario.php';
    require_once '../controlador/Usuariocontrol.php';

    $usuario = new Usuario();

    $user = $_POST['usuario'];
    $contras =  $_POST['contrasena'];
    
    $usuariocontrol = new UsuarioControl();
    $usuario = $usuariocontrol->buscarUsuario($user, $contras);
   
    
     if($usuario!=null){
         session_start();
         $_SESSION['usuario'] =$usuario->getNombre();
        header('Location: ../vistas/principal.php');

        }else{
        header('Location: ../index.php');
        }
 ?>