<?php

//se requieren estos dos archivos para buscar la informacion
require_once '../controlador/AreaControl.php';

require_once '../modelo/Area.php';

class AreaControl
{


    public function __construct()
    {
        require_once '../conexion/DB.php';
        try {
            $this->pdo = DB::conectar();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function obtenerTodas()
    {
        try {
            $sql = "select * from area";
            $prep = $this->pdo->prepare($sql);
            $prep->execute();

            //se realiza este codigo para obtener el obejeto area 
            $areas = [];
            foreach ($prep->fetchAll(PDO::FETCH_OBJ) as $ar) {
                $area = new Area();

                $area->setCodArea($ar->codarea);
                $area->setNombre($ar->nombre);
                $area->setDescripcion($ar->descripcion);
                array_push($areas, $area);
            }
            return $areas;

            // return $prep->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }


    public function agregar($area)
    {
        try {
            $sql = "insert into area (codarea, nombre, descripcion) values ( ?, ?, ?)";
            $this->pdo->prepare($sql)->execute(array(
                $area->getCodArea(),
                $area->getNombre(),
                $area->getDescripcion()


            ));
        } catch (Exception $ex) {
            echo ' Area No Agregado correctamente';
            die($ex->getMessage());
        }
        echo 'Area Agregado correctamente';
    }


    public function obtenerPorId($codArea){

        try {
            $sql = "select * from area where codarea = ?";
            $prep = $this->pdo->prepare($sql);
            $prep->execute(array($codArea));
            $ar = $prep->fetch(PDO::FETCH_OBJ);

            $area = new Area();
            $area->setCodArea($ar->codarea);
            $area->setNombre($ar->nombre);
            $area->setDescripcion($ar->descripcion);
            
            return $area;
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }


    public  function modificar($area)
    {

        try {
            $sql = "update area set nombre = ?, descripcion = ? where codarea = ?";
            $this->pdo->prepare($sql)->execute(array(
                $area->getNombre(),
                $area->getDescripcion(),
                $area->getCodArea()

            ));
        } catch (Exception $ex) {
            echo 'No Modificafo';
            die($ex->getMessage());
        }
    }


    public function eliminar($codArea)
    {
        try {
            $sql = "delete from area where codarea = ?";
            $prep = $this->pdo->prepare($sql);
            $prep->execute(array($codArea));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
}
