<?php

class Modulo{

    private $codModulo;
    private $nombre;
    private $capacidad;
    private $codArea;

    private $area;

    function __construct()
    {
        
    }

    function getCodModulo(){
        return $this->codModulo;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getCapacidad(){
        return $this->capacidad;
    }

    function getCodArea(){
        return $this->codArea;
    }

    function getArea(){
        return $this->area;
    }



    function setCodModulo($codModulo){
        $this->codModulo = $codModulo;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setCapacidad($capacidad){
        $this->capacidad = $capacidad;
    }

    function setCodArea($codArea){
        $this->codArea = $codArea;
    }

    function setArea($area){
        $this->area = $area;
    }
}
?>

