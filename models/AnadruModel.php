<?php

require_once('../config/database.php');

class Anadru_model {

  private $db;
  private $productos;
  private $usuario;
  
  public function __construct(){
    $this->db = Conectar::conexion();
    $this->productos = array();
  }
  
  public function get_usuario($usuario, $password)
  {
    $comparar = "SELECT * FROM usuario WHERE nombre='$usuario' AND pass='$password'";
    $resultado = $this->db->query($comparar);
    $row = $resultado->fetch_assoc();
    return $this->usuario;
  }

  public function get_productos()
  {
    $sql = "SELECT * FROM productos";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
      $this->productos[] = $row;
    }
    return $this->productos;
  }
    
} 
?>