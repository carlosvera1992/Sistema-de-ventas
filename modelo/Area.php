<?php

class Area{

    private $codArea;
    private $nombre;
    private $descripcion;

    function __construct()
    {
    }

    function getCodArea()
    {
        return $this->codArea;
    }
    function getNombre()
    {
        return $this->nombre;
    }
    function getDescripcion()
    {
        return $this->descripcion;
    }

    function setCodArea($codArea)
    {
        $this->codArea = $codArea;
    }
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
?>