<?php

class HomeController
{
    public function __construct()
    {
        /**
         * 
         * Agregar el modelo productos
         * 
         */
        require_once "models/Productos.php";
    }

    public function index()
    {
        $productos = new ProductosModel();
        $data["titulo"] = "Productos";
        $data["productos"] = $productos->getProducts();

        require_once "views/public/home.php";
    }
}
