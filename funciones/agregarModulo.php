<?php
  require_once '../modelo/Modulo.php';
  require_once '../controlador/ModuloControl.php';
 $modulo = new Modulo();
 $modulo->setCodModulo($_REQUEST['codigo']);
 $modulo->setNombre($_REQUEST['nombre']);
 $modulo->setCapacidad($_REQUEST['capacidad']);
 $modulo->setCodArea($_REQUEST['area']);

 $moduloControl = new ModuloControl();

 $mod = $moduloControl->obtenerPorId($modulo->getCodModulo());
 
  if($mod == null){
    $moduloControl->agregar($modulo);
  }else{
    $moduloControl->modificar($modulo);
  }
 
header('Location: ../vistas/listarModulos.php');
