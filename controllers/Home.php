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

    /* Vista */
    public function nuevo()
    {
        require_once "views/admin/addproductos.html";
    }

    public function guardar()
    {
        /**Entrada de datos */
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $piezas = $_POST['piezas'];
        $precio = $_POST['precio'];
        $tipo = $_POST['tipo'];

        $temp = $_FILES['imagen']['tmp_name'];
        $rutaServer = 'resources/';
        $image_name = $_FILES['imagen']['name'];

        date_default_timezone_set('UTC');
        $nameUnic = date('Y-m-d-h-i-s').$image_name;

        $tipofoto = $_FILES['imagen']['type'];

        if($tipofoto == "image/jpeg" or $tipofoto == "image/png" or $tipofoto == "image/gif" or $tipofoto == "image/jpg" or $image_name == "") {
            move_uploaded_file ($temp, $rutaServer.$nameUnic);
        }

        $obj = new ProductosModel();
        $obj->addProduct(
            $nombre,
            $descripcion,
            $piezas,
            $precio,
            $rutaServer.$nameUnic,
            $tipo
        );
    }

    public function delete()
    {
    $regalos = new tiendaRegalos_model();
			$data["regalos"] = $regalos->get_regalos();
			require_once "views/public/eliminar.php";
    }

    public function eliminar($id){
        $regalos = new tiendaRegalos_model();
        $regalos->eliminar($id);
        $this->index();
    }
}

