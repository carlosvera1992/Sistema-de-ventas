<?php

  require_once '../controlador/CerdoControl.php';
  $cerdoControl = new CerdoControl();
  $cerdoControl->eliminar($_REQUEST['codigo']);
  
  header('Location: ../vistas/cerdoListar.php');

 ?>