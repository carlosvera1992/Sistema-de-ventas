<?php

require_once '../controlador/ModuloControl.php';
require_once '../modelo/Corral.php';


class CorralControl {
  function __construct() {
    require_once '../conexion/Db.php';
    try {
      $this->pdo = Db::conectar();
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }

  
  
  public function obtenerTodos() {
    $moduloControl = new ModuloControl();
    try {
      $sql = "select * from corral";
      $prep = $this->pdo->prepare($sql);
      $prep->execute();
      $corrales = [];
      foreach($prep->fetchAll(PDO::FETCH_OBJ) as $corr){
        $corral = new Corral();

        $corral->setCodcorral($corr->codcorral);
        $corral->setNombre($corr->nombre);
        $corral->setCapacidad($corr->capacidad);
        $corral->setCodmodulo($corr->codmodulo);
        
      
        $corral->setModulo($moduloControl->obtenerPorId($corr->codmodulo));
        array_push($corrales, $corral);
      
      }
      return $corrales;

    } catch (Exception $ex) {
      echo 'Corrales No encontrados';
      die($ex->getMessage());
    }
  } 

  // Obtener un objeto Corral por su Id
  public function obtenerPorCodigo($codcorral) {
    $moduloControl = new ModuloControl();
    try {
      $sql = "select * from corral where codcorral = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($codcorral));
      $cor = $prep->fetch(PDO::FETCH_OBJ);

      if($cor != null){
      $corral = new Corral();

      $corral->setCodcorral($cor->codcorral);
      $corral->setNombre($cor->nombre);
      $corral->setCapacidad($cor->capacidad);
      $corral->setCodmodulo($cor->codmodulo);

      $corral->setModulo($moduloControl->obtenerPorId($cor->codmodulo));

      return $corral;
      }

    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }

  public function agregar($corral) {
    try {
      $sql = "insert into corral (codcorral, nombre, capacidad, codmodulo) values ( ?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute(array(
          $corral->getCodcorral(),
          $corral->getNombre(),
          $corral->getCapacidad(),
          $corral->getCodmodulo()
      ));
    } catch (Exception $ex) {
      echo 'No Agregado correctamente';
      die($ex->getMessage());
    }
    echo 'Agregado correctamente';
  }

  
  public  function modificar($corral) {
     
    try {
      $sql = "update corral set nombre = ?, capacidad = ?, codmodulo = ? where codcorral = ?";
      $this->pdo->prepare($sql)->execute(array(
          $corral->getNombre(),
          $corral->getCapacidad(),
          $corral->getCodmodulo(),
          $corral->getCodcorral()             
      ));
    } catch (Exception $ex) {
      echo 'No modificado correctamente';
      die($ex->getMessage());
    
    }
    echo 'Modififcado correctamente';
  }

  public function eliminar($codCorral) {
    try {
      $sql = "delete from corral where codcorral = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($codCorral));
      echo 'Corral Eliminado';
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }

}