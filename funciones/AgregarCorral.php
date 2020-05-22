<?php
  require_once '../modelo/Corral.php';
  require_once '../controlador/CorralControl.php';
  $corral = new Corral();
  
  $corralControl = new CorralControl();

  $corral->setCodcorral($_REQUEST['codigo']);
  $corral->setNombre($_REQUEST['nombre']);
  $corral->setCapacidad($_REQUEST['capacidad']);
  $corral->setCodmodulo($_REQUEST['modulo']);

  $corr = $corralControl->obtenerPorCodigo($corral->getCodcorral());

  if($corr == null){
    $corralControl->agregar($corral);
  }else{
    $corralControl->modificar($corral);
  }



//header('Location: ../vistas/cerdoListar.php');
