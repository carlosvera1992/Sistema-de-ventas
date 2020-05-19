<?php
 require_once '../modelo/usuario.php';
 require_once '../controlador/Usuariocontrol.php';

 
 $usuariocontrol = new UsuarioControl();

 $correo = $_POST['correo'];
 $username = $_POST['usuario'];
 
 $contras =  $_POST['contrasena'];
 $contras2 = $_POST['contrasena2'];
 
 $usuario = $usuariocontrol->buscarUsuarioParaRegistro($correo, $username);

 if($usuario!=null){
   print "<script>alert(\"El email o el username ya se encuentra registrado.\");window.location='../vistas/registrarUsuario.php';</script>";

 }else{

   if($contras != $contras2){
      print "<script>alert(\"Las contraseñas no coinciden.\");window.location='../vistas/registrarUsuario.php';</script>";
   }else{
      $usuario = new Usuario();
      $usuario->setIdUsuario(0);
      $usuario->setNombre($_REQUEST['nombre']);
      $usuario->setCorreo($_REQUEST['correo']);
      $usuario->setUsuario($_REQUEST['usuario']);
      $usuario->setContraseña($_REQUEST['contrasena']);
      $usuariocontrol->agregarUsuario($usuario);
      print "<script>alert(\"Registrado con exito ahora puede iniciar sesión.\");window.location='../index.php';</script>";
      // header('Location: ../index.php');
   }   
 
}


?>