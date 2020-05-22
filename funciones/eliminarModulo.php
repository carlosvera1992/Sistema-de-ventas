<?php

  require_once '../controlador/ModuloControl.php';
  $moduloControl = new ModuloControl();
  $moduloControl->eliminar($_REQUEST['codigo']);
  
  header('Location: ../vistas/listarModulos.php');

 ?>