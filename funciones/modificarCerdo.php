<?php
  require_once '../modelo/Cerdo.php';
  require_once '../controlador/CerdoControl.php';
  $cerdo = new Cerdo();

  $cerdo->setCodcerdo($_REQUEST['codigo']);
  $cerdo->setFechanac($_REQUEST['fechanacimiento']);
  $cerdo->setSexo($_REQUEST['sexo']);
  $cerdo->setEstado($_REQUEST['estado']);
  $cerdo->setPrecio($_REQUEST['precio']);
  $cerdo->setCodcorral($_REQUEST['corral']);

  $cerdoControl = new CerdoControl();
  $cerdoControl->modificar($cerdo);

 
  
  ?>

  


