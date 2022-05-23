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
        $clima = new Clima();
        $resClim = $clima->getClima();
        $productos = new ProductosModel();
        $data["titulo"] = "Productos";
        $data["productos"] = $productos->getProducts();

        require_once "views/public/home.php";
    }

    public function showProduct($id){

        $productos = new ProductosModel();
        
        $data= $productos->getProduct($id);
        require_once "views/public/verProducto.php";
    }
}
