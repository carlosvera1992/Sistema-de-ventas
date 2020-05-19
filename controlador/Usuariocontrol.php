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
            $sql = "select * from usuario where usuario = ? and contrasena = ? ";
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

    public function buscarUsuarioParaRegistro($correo, $username){

        try{
            $sql = "select * from usuario where correo = ? or usuario = ? ";
            $prep = $this->pdo->prepare($sql);
            $prep->execute(array($correo, $username));
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


    public function agregarUsuario($usuario) {
        try {
          $sql = "insert into usuario (idUsuario, nombre, correo, usuario, contrasena, idPerfil) values ( ?, ?, ?, ?, ?, ?)";
          $this->pdo->prepare($sql)->execute(array(
              $usuario->getIdUsuario(),
              $usuario->getNombre(),
              $usuario->getCorreo(),
              $usuario->getUsuario(),
              $usuario->getContraseña(),
              $usuario->getIdPerfil()
          ));
        } catch (Exception $ex) {
          echo 'No Agregado correctamente';
          die($ex->getMessage());
        }
        echo 'Agregado correctamente';
      }
      


}

?>