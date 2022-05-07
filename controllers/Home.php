<?php

class HomeController {

    public function __construct()
    {
        //Agregar el archivo de modelo
        require_once "models/AnadruModel.php";
    }

    public function index()
    {
        $productos = new Anadru_model();
	    $data["productos"] = $productos->get_productos();

        require_once "views/public/home.php";

    }

}
?>