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
}