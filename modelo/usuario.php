<?php


class Usuario{
    private $idUsuario;
    private $nombre;
    private $correo;
    private $usuario;
    private $contraseña;
    private $idPerfil;


    function __construct(){
        
    }

    function getIdUsuario(){
        return $this->idUsuario;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getCorreo(){
        return $this->correo;
    }

    function getUsuario(){
        return $this->usuario;
    }

    function getContraseña(){
        return $this->contraseña;
    }

    function getIdPerfil(){
        $this->idPerfil;
    }

    function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setCorreo($correo){
        $this->correo = $correo;
    }

    function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }

    function setPerfil($idPerfil){
        $this->idPerfil = $idPerfil;
    }





    }

?>