<?php

  require_once '../controlador/CorralControl.php';
  $corralControl = new CorralControl();
  $corralControl->eliminar($_REQUEST['codigo']);
  
  header('Location: ../vistas/listarCorrales.php');

 ?>