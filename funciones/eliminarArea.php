<?php

  require_once '../controlador/AreaControl.php';
  $areaControl = new AreaControl();
  $areaControl->eliminar($_REQUEST['codigo']);
  
  header('Location: ../vistas/listarAreas.php');

 ?>