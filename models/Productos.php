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
        $nombre,
        $descripcion,
        $piezas,
        $precio,
        $img,
        $tipo
    ): bool {
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
        while ($row = $resultado->fetch_assoc()) {
            $this->productos[] = $row;
        }
        return $this->productos;
    }

    public function delete($id){
        $link = $this->db->query("SELECT img FROM productos WHERE ID = '$id'");
        $result = $link->fetch_assoc()['img'];
        unlink($result);
        $resultado = $this->db->query("DELETE FROM productos WHERE ID = '$id'");
    }

    //llamar a imprimir en formulario
    public function get_Productos($id)
    {
        $sql = "SELECT * FROM productos WHERE id = '$id' LIMIT 1";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
    }
}
