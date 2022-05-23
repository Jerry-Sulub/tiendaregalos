<?php

class ResourcesController
{
    public function __construct()
    {
        require_once 'models/Productos.php';
    }

    public function getAll()
    {
        $items = array();
        $items['product'] = array();

        $productos = new ProductosModel();
        $data = $productos->getProducts();
        $i = 0;

        while ($i < sizeof($data))
        {
            $obj = array(
                'id' => $data[$i]['ID'],
                'name' => $data[$i]['nombre'],
                'description' => $data[$i]['descripcion'],
                'pieces' => $data[$i]['piezas'],
                'price' => $data[$i]['precio'],
                'image' => $data[$i]['img'],
                'type' => $data[$i]['tipo']
            );
            array_push($items['product'], $obj);
            $i++;
        }
        echo json_encode($items);
    }
}