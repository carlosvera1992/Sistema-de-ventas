<?php

Class Cerdo{
    private $codcerdo;
    private $fechanac;
    private $sexo;
    private $estado;
    private $precio;
    private $codcorral;

    private $corral;

    function __construct(){

    }

    function getCodcerdo(){
        return $this->codcerdo;
    }
    function getFechanac(){
        return $this->fechanac;
    }
    function getSexo(){
        return $this->sexo;
    }
    function getEstado(){
        return $this->estado;
    }
    function getPrecio(){
        return $this->precio;
    }
    function getCodcorral(){
        return $this->codcorral;
    }
    function getCorral(){
        return $this->corral;
    }

    function setCodcerdo($codcerdo){
        $this->codcerdo = $codcerdo;
    }
    function setFechanac($fechanac){
        $this->fechanac = $fechanac;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }
    function setEstado($estado){
        $this->estado = $estado;
    }
    function setPrecio($precio){
        $this->precio = $precio;
    }
    function setCodcorral($codcorral){
        $this->codcorral = $codcorral;
    }
    function setCorral($corral){
        $this->corral = $corral;
    }


}
?>