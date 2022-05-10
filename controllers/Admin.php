<?php

class AdminController
{

    public function __construct()
    {
        require_once 'models/Productos.php';
    }

    public function index()
    {
        $productos = new ProductosModel();
	    $data["productos"] = $productos->getProductos();
        require_once 'views/admin/home.php';
    }
}