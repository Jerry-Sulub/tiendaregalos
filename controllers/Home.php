<?php

class HomeController {

    public function __construct()
    {
        //Agregar el archivo de modelo
    }

    public function index()
    {

        require_once "views/public/home.php";

    }

}