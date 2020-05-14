<?php
    session_start();
    $varSesion = $_SESSION['usuario'];

    if($varSesion == null || $varSesion = ''){
        echo 'No tiene acceso';
        die();
    }
    
    session_destroy();
    header("location: ../index.php");
?>