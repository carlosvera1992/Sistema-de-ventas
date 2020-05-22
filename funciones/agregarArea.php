<?php
 require_once '../modelo/Area.php';
 require_once '../controlador/AreaControl.php';
 $area = new Area();

 $area->setCodArea($_REQUEST['codigo']);
 $area->setNombre($_REQUEST['nombre']);
 $area->setDescripcion($_REQUEST['descripcion']);
 
 $areaControl = new AreaControl();
 $areaControl->agregar($area);

 header('Location: ../vistas/listarAreas.php');
?>

