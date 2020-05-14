<?php

require_once '../modelo/usuario.php';

class UsuarioControl{


    public function __construct()
    {
        require_once '../conexion/Db.php';
        try{
            $this->pdo = DB::conectar();
        }catch (Exception $ex){
            die($ex->getMessage());
        }
    }

    public function buscarUsuario($correo, $contraseña){

        try{
            $sql = "select * from usuario where correo = ? and contrasena = ? ";
            $prep = $this->pdo->prepare($sql);
            $prep->execute(array($correo, $contraseña));
            //$prep->execute(array($contraseña));
            $user = $prep->fetch(PDO::FETCH_OBJ);

            if($user!=null){
                $usuario = new Usuario();
                $usuario->setIdUsuario($user->idUsuario);
                $usuario->setNombre($user->nombre);
                $usuario->setCorreo($user->correo);
                $usuario->setUsuario($user->usuario);
                $usuario->setContraseña($user->contrasena);
                $usuario->setPerfil($user->idPerfil);
    
                return $usuario;
            }else{
                
            }

           

        }catch(Exception $ex){
            echo "Error de sql";
            die($ex->getMessage());
        }
    }

}

?>