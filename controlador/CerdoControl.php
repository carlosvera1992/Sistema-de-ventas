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
  
  
  public function agregar($cliente) {
    try {
      $sql = "insert into cliente (idcliente, nombre1, nombre2, apellido1, apellido2, telefono, idciudad, direccion, correo, activo) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute(array(
          $cliente->getIdcliente(),
          $cliente->getNombre1(),
          $cliente->getNombre2(),
          $cliente->getApellido1(),
          $cliente->getApellido2(),
          $cliente->getTelefono(),
          $cliente->getIdciudad(),
          $cliente->getDireccion(),
          $cliente->getCorreo(),
          $cliente->getActivo()
      ));
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
   
  public function obtenerPorId($idcliente) {
      $ciudadControl = new CiudadControl();
    try {
      $sql = "select * from cliente where idcliente = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($idcliente));
      $client = $prep->fetch(PDO::FETCH_OBJ);
    
      $cliente = new Cliente();
      $cliente->setIdcliente($client->idcliente);
      $cliente->setNombre1($client->nombre1);
      $cliente->setNombre2($client->nombre2);
      $cliente->setApellido1($client->apellido1);
      $cliente->setApellido2($client->apellido2);
      $cliente->setTelefono($client->telefono);
      $cliente->setIdciudad($client->idciudad);
      $cliente->setDireccion($client->direccion);
      $cliente->setCorreo($client->correo);
      $cliente->setActivo($client->activo);
      $cliente->setCiudad($ciudadControl->obtenerPorId($client->idciudad));
     
      return $cliente;
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
  
  public function modificar($cliente) {
     
    try {
      $sql = "update cliente set nombre1 = ?, nombre2 = ?, apellido1 = ?, apellido2 = ?, telefono = ?, idciudad = ?, direccion = ?, correo = ?, activo = ?  where idcliente = ?";
      $this->pdo->prepare($sql)->execute(array(
          $cliente->getNombre1(),
          $cliente->getNombre2(),
          $cliente->getApellido1(),
          $cliente->getApellido2(),
          $cliente->getTelefono(),
          $cliente->getIdciudad(),
          $cliente->getDireccion(),
          $cliente->getCorreo(),
          $cliente->getActivo(),
          $cliente->getIdcliente()
      ));
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
   
  public function eliminar($idcliente) {
    try {
      $sql = "delete from cliente where idcliente = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($idcliente));
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  

}
?>
