<?php

    require_once '../controlador/AreaControl.php';
    require_once '../modelo/Modulo.php';

    class ModuloControl{

        public function __construct()
        {
            require_once '../conexion/DB.php';
            try{
                $this->pdo = DB::conectar();
            }catch (Exception $ex){
                die($ex->getMessage());
            }
    }

    public function obtenerTodos() {
        $areaControl = new AreaControl();
      try {
        $sql = "select * from modulo";
        $prep = $this->pdo->prepare($sql);
        $prep->execute();
        
        //se realiza este codigo para obtener el obejeto modulo con la realacion de la tabla area
        $modulos = [];
        foreach($prep->fetchAll(PDO::FETCH_OBJ) as $mod) {
          $modulo = new Modulo();
          
          $modulo->setCodModulo($mod->codmodulo);
          $modulo->setNombre($mod->nombre);
          $modulo->setCapacidad($mod->capacidad);
          $modulo->setCodArea($mod->codarea);
          
          $modulo->setArea($areaControl->obtenerPorId($mod->codarea));
          array_push($modulos, $modulo);
        }
        return $modulos;
        
       // return $prep->fetchAll(PDO::FETCH_OBJ);
      } catch (Exception $ex) {
        die($ex->getMessage());
      }
    }

    public function agregar($modulo) {
        try {
          $sql = "insert into modulo (codmodulo, nombre, capacidad, codarea) values ( ?, ?, ?, ?)";
          $this->pdo->prepare($sql)->execute(array(
              $modulo->getCodModulo(),
              $modulo->getNombre(),
              $modulo->getCapacidad(),
              $modulo->getCodArea()
          ));
        } catch (Exception $ex) {
          echo 'No Agregado correctamente';
          die($ex->getMessage());
        }
        echo 'Agregado correctamente';
      }
    

      public function obtenerPorId($codModulo) {
        $areaControl = new AreaControl();
      try {
        $sql = "select * from modulo where codmodulo = ?";
        $prep = $this->pdo->prepare($sql);
        $prep->execute(array($codModulo));
        $mod = $prep->fetch(PDO::FETCH_OBJ);
        
        if($mod!=null){
        $modulo = new Modulo();
        $modulo->setCodModulo($mod->codmodulo);
        $modulo->setNombre($mod->nombre);
        $modulo->setCapacidad($mod->capacidad);
        $modulo->setCodArea($mod->codarea);
        $modulo->setArea($areaControl->obtenerPorId($mod->codarea));
        
        return $modulo;
        }else{
          
        }


      } catch (Exception $ex) {
        die($ex->getMessage());
      }
    }

    public  function modificar($modulo) {
     
        try {
          $sql = "update modulo set nombre = ?, capacidad = ?, codarea = ? where codmodulo = ?";
          $this->pdo->prepare($sql)->execute(array(
              $modulo->getNombre(),
              $modulo->getCapacidad(),
              $modulo->getCodArea(),
              $modulo->getCodModulo()             
          ));

        } catch (Exception $ex) {
          die($ex->getMessage());
        
        }
          echo 'Modificado correctamente';
      }


      public function eliminar($codModulo) {
        try {
          $sql = "delete from modulo where codmodulo = ?";
          $prep = $this->pdo->prepare($sql);
          $prep->execute(array($codModulo));
          echo 'Eliminado correctamente';
        } catch (Exception $ex) {
          echo 'No se ha elimiando correctamente';
          die($ex->getMessage());
        }
      }



}





?>