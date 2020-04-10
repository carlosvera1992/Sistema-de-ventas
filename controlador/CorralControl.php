<?php

class CorralControl {
  function __construct() {
    require_once '../conexion/Db.php';
    try {
      $this->pdo = Db::conectar();
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
  public function obtenerTodos() {
    try {
      $sql = "select * from corral";
      $prep = $this->pdo->prepare($sql);
      $prep->execute();
      return $prep->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  } 

  // Obtener un objeto Corral por su Id
  public function obtenerPorCodigo($codcorral) {
    try {
      $sql = "select * from corral where codcorral = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($codcorral));
      return $prep->fetch(PDO::FETCH_OBJ);
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
}