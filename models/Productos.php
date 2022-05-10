<?php

class ProductosModel
{
    private $db;
    private $productos;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->productos = array();
    }

    public function addProduct(
        $nombre, $descripcion, $piezas, $precio, $img, $tipo
    ):bool
    {
        $flag = $this->db->query(
            "INSERT INTO productos(nombre, descripcion, piezas, precio, img, tipo) 
            VALUES('$nombre', '$descripcion', '$piezas', '$precio', '$img', '$tipo')"
        );

        return $flag;
    }

    public function getProductos()
    {
        $sql = "SELECT * FROM productos";
        $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc())
        {
            $this->productos[] = $row;
        }
        return $this->productos;
    }
    public function editar($id){
        $resultado = $this->db->query("UPDATE productos SET ID = '$id'");
    }
    
    public function delete($id){
        $resultado = $this->db->query("DELETE FROM productos WHERE ID = '$id'");
    }

}