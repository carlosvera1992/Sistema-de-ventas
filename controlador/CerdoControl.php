<?php

//se requieren estos dos archivos para buscar la informacion
require_once '../controlador/CorralControl.php';

require_once '../modelo/Cerdo.php';

class CerdoControl {
    
  
  public function __construct() {
    require_once '../conexion/DB.php';
    try {
      $this->pdo = DB::conectar();
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
    
  }
  
  public function obtenerTodos() {
      $corralControl = new CorralControl();
    try {
      $sql = "select * from cerdo";
      $prep = $this->pdo->prepare($sql);
      $prep->execute();
      
      //se realiza este codigo para obtener el obejeto cerdo con la realacion de la tabla ciudad
      $cerdos = [];
      foreach($prep->fetchAll(PDO::FETCH_OBJ) as $cer) {
        $cerdo = new Cerdo();
        
        $cerdo->setCodcerdo($cer->codcerdo);
        $cerdo->setFechanac($cer->fechanacimiento);
        $cerdo->setSexo($cer->sexo);
        $cerdo->setEstado($cer->estado);
        $cerdo->setPrecio($cer->precio);
        $cerdo->setCodcorral($cer->codcorral);
        
        $cerdo->setCorral($corralControl->obtenerPorCodigo($cer->codcorral));
        array_push($cerdos, $cerdo);
      }
      return $cerdos;
      
     // return $prep->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
  
  public function agregar($cerdo) {
    try {
      $sql = "insert into cerdo (codcerdo, fechanacimiento, sexo, estado, precio, codcorral) values ( ?, ?, ?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute(array(
          $cerdo->getCodcerdo(),
          $cerdo->getFechanac(),
          $cerdo->getSexo(),
          $cerdo->getEstado(),
          $cerdo->getPrecio(),
          $cerdo->getCodcorral()
         
         

      ));
    } catch (Exception $ex) {
      echo 'No Agregado correctamente';
      die($ex->getMessage());
    }
    echo 'Agregado correctamente';
  }
  
   
  public function obtenerPorId($codcerdo) {
      $corralControl = new CorralControl();
    try {
      $sql = "select * from cerdo where codcerdo = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($codcerdo));
      $cerd = $prep->fetch(PDO::FETCH_OBJ);
    
      $cerdo = new Cerdo();
      $cerdo->setCodcerdo($cerd->codcerdo);
      $cerdo->setFechanac($cerd->fechanacimiento);
      $cerdo->setSexo($cerd->sexo);
      $cerdo->setEstado($cerd->estado);
      $cerdo->setPrecio($cerd->precio);
      $cerdo->setCodcorral($cerd->codcorral);
      $cerdo->setCorral($corralControl->obtenerPorCodigo($cerd->codcorral));
     
      return $cerdo;
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
  
  public  function modificar($cerdo) {
     
    try {
      $sql = "update cerdo set fechanacimiento = ?, sexo = ?, estado = ?, precio = ?, codcorral = ? where codcerdo = ?";
      $this->pdo->prepare($sql)->execute(array(
          $cerdo->getFechanac(),
          $cerdo->getSexo(),
          $cerdo->getEstado(),
          $cerdo->getPrecio(),
          $cerdo->getCodcorral(),
          $cerdo->getCodcerdo()
         
      ));
    } catch (Exception $ex) {
      die($ex->getMessage());
    
    }
    
  }
  
   
  public function eliminar($codcerdo) {
    try {
      $sql = "delete from cerdo where codcerdo = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($codcerdo));
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  

}
?>