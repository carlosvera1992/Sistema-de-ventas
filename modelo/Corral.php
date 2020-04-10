<?php

class Corral{
    private $codcorral;
    private $nombre;
    private $capacidad;
    private $codmodulo;

    private $modulo;

    function __construct(){

    }

    function getCodcorral(){
        return $this->codcorral;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getCapacidad(){
        return $this->capacidad;
    }
    function getCodmodulo(){
        return $this->codmodulo;
    }

    function getModulo(){
        return $this->modulo;
    }

    function setCodcorral($codcorral){
        $this->codcorral = $codcorral;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function setCapacidad($capacidad){
        $this->capacidad = $capacidad;
    }
    function setCodmodulo($codmodulo){
        $this->codmodulo = $codmodulo;
    }
    function setModulo($modulo){
        $this->modulo = $modulo;
    }
    
}

?>